<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    // Positions IDs
    public const memberPositionId = 0;
    public const viceHeadPositionId = 0;
    public const headPositionId = 0;
    public const executiveDirectorPositionId = 0;
    public const organizationManagementDirectorPositionId = 0;
    public const vicePresidentPositionId = 0;
    public const presidentPositionId = 0;
    public const projectManagerPositionId = 0;

    // Committees IDs
    public const frCommitteeId = 0;
    public const itCommitteeId = 0;
    public const marketingCommitteeId = 0;
    public const qmCommitteeId = 0;
    public const hrCommitteeId = 0;
    public const advCommitteeId = 0;
    public const lrCommitteeId = 0;
    public const technicalAcCommitteeId = 0;
    public const nonTechnicalAcCommitteeId = 0;
    public const pmCommitteeId = 0;
    public const tmCommitteeId = 0;

    // Admin ID
    public const adminId = 0;

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Committee' => 'App\Policies\CommitteePolicy',
        'App\CrewMember' => 'App\Policies\CrewMemberPolicy',
        'App\Event' => 'App\Policies\EventPolicy',
        'App\EventApplicant' => 'App\Policies\EventApplicantPolicy',
        'App\Position' => 'App\Policies\PositionPolicy',
        'App\Preference' => 'App\Policies\PreferencePolicy',
        'App\Seminar' => 'App\Policies\SeminarPolicy',
        'App\Speaker' => 'App\Policies\SpeakerPolicy',
        'App\TimeSlot' => 'App\Policies\TimeSlotPolicy',
        'App\User' => 'App\Policies\UserPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function ($user) {
            if ($user->isSuperAdmin()) {
                return true;
            }
        });
    }
}
