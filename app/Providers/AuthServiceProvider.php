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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
