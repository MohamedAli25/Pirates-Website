<?php

namespace App\Policies;

use App\EventApplicant;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventApplicantPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any event applicants.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the event applicant.
     *
     * @param  \App\User  $user
     * @param  \App\EventApplicant  $eventApplicant
     * @return mixed
     */
    public function view(User $user, EventApplicant $eventApplicant)
    {
        //
    }

    /**
     * Determine whether the user can create event applicants.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the event applicant.
     *
     * @param  \App\User  $user
     * @param  \App\EventApplicant  $eventApplicant
     * @return mixed
     */
    public function update(User $user, EventApplicant $eventApplicant)
    {
        //
    }

    /**
     * Determine whether the user can delete the event applicant.
     *
     * @param  \App\User  $user
     * @param  \App\EventApplicant  $eventApplicant
     * @return mixed
     */
    public function delete(User $user, EventApplicant $eventApplicant)
    {
        //
    }

    /**
     * Determine whether the user can restore the event applicant.
     *
     * @param  \App\User  $user
     * @param  \App\EventApplicant  $eventApplicant
     * @return mixed
     */
    public function restore(User $user, EventApplicant $eventApplicant)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the event applicant.
     *
     * @param  \App\User  $user
     * @param  \App\EventApplicant  $eventApplicant
     * @return mixed
     */
    public function forceDelete(User $user, EventApplicant $eventApplicant)
    {
        //
    }
}
