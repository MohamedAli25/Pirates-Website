<?php

namespace App;

use App\Providers\AuthServiceProvider;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'university', 'faculty', 'department', 'academic_year'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function eventApplicants()
    {
        return $this->hasMany(EventApplicant::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_applicants');
    }

    public function crewMember()
    {
        return $this->hasOne(CrewMember::class);
    }

    public function name()
    {
        return $this->first_name . " " . $this->last_name;
    }

    // Crew Member Check
    public function isCrewMember()
    {
        return CrewMember::where('user_id', $this->id)->isNotEmpty();
    }

    // Admin Check
    public function isAdmin()
    {
        return $this->id === AuthServiceProvider::adminId;
    }

    public function isSuperAdmin()
    {
        return $this->isAdmin() || $this->isOMDirector() || $this->isExecutiveDirector() || $this->isVicePresident() || $this->isPresident();
    }

    // Position Check
    public function isMember()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->position_id === AuthServiceProvider::memberPositionId;
        } else {
            return false;
        }
    }

    public function isViceHead()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->position_id === AuthServiceProvider::viceHeadPositionId;
        } else {
            return false;
        }
    }

    public function isHead()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->position_id === AuthServiceProvider::headPositionId;
        } else {
            return false;
        }
    }

    public function isPM()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->position_id === AuthServiceProvider::pmCommitteeId;
        } else {
            return false;
        }
    }

    public function isExecutiveDirector()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->position_id === AuthServiceProvider::executiveDirectorPositionId;
        } else {
            return false;
        }
    }

    public function isOMDirector()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->position_id === AuthServiceProvider::organizationManagementDirectorPositionId;
        } else {
            return false;
        }
    }

    public function isVicePresident()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->position_id === AuthServiceProvider::vicePresidentPositionId;
        } else {
            return false;
        }
    }

    public function isPresident()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->position_id === AuthServiceProvider::presidentPositionId;
        } else {
            return false;
        }
    }

    public function isBoard()
    {
        return $this->isViceHead() || $this->isHead() || $this->isInTM();
    }

    // Committee Check
    public function isInFR()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->committee_id === AuthServiceProvider::frCommitteeId;
        } else {
            return false;
        }
    }

    public function isInIT()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->committee_id === AuthServiceProvider::itCommitteeId;
        } else {
            return false;
        }
    }

    public function isInMarketing()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->committee_id === AuthServiceProvider::marketingCommitteeId;
        } else {
            return false;
        }
    }

    public function isInQM()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->committee_id === AuthServiceProvider::qmCommitteeId;
        } else {
            return false;
        }
    }

    public function isInHR()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->committee_id === AuthServiceProvider::hrCommitteeId;
        } else {
            return false;
        }
    }

    public function isInAdv()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->committee_id === AuthServiceProvider::advCommitteeId;
        } else {
            return false;
        }
    }

    public function isInLR()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->committee_id === AuthServiceProvider::lrCommitteeId;
        } else {
            return false;
        }
    }

    public function isInTechnicalAc()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->committee_id === AuthServiceProvider::technicalAcCommitteeId;
        } else {
            return false;
        }
    }

    public function isInNonTechnicalAc()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->committee_id === AuthServiceProvider::nonTechnicalAcCommitteeId;
        } else {
            return false;
        }
    }

    public function isInPm()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->committee_id === AuthServiceProvider::pmCommitteeId;
        } else {
            return false;
        }
    }

    public function isInTM()
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->committee_id === AuthServiceProvider::tmCommitteeId;
        } else {
            return false;
        }
    }

    // Specific Committee Board Check
    public function isCommitteeViceHead(Committee $committee)
    {
        if ($this->isCrewMember()) {
            return $this->isViceHead() && $this->crewMember()->committee()->is($committee);
        } else {
            return false;
        }
    }

    public function isCommitteeHead(Committee $committee)
    {
        if ($this->isCrewMember()) {
            return $this->isHead() && $this->crewMember()->committee()->is($committee);
        } else {
            return false;
        }
    }

    public function isCommitteeBoard(Committee $committee)
    {
        return $this->isCommitteeViceHead($committee) || $this->isCommitteeHead($committee);
    }

    // General Committee and Position Check
    public function isIn(Committee $committee, Position $position)
    {
        if ($this->isCrewMember()) {
            return $this->crewMember()->committee()->is($committee) && $this->crewMember()->position()->is($position);
        } else {
            return false;
        }
    }
}
