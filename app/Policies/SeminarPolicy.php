<?php

namespace App\Policies;

use App\Seminar;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SeminarPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any seminars.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    public function viewAnyDetailed(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the seminar.
     *
     * @param  \App\User  $user
     * @param  \App\Seminar  $seminar
     * @return mixed
     */
    public function view(User $user, Seminar $seminar)
    {
        return true;
    }

    public function viewDetailed(User $user, Seminar $seminar)
    {
        return false;
    }

    /**
     * Determine whether the user can create seminars.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the seminar.
     *
     * @param  \App\User  $user
     * @param  \App\Seminar  $seminar
     * @return mixed
     */
    public function update(User $user, Seminar $seminar)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the seminar.
     *
     * @param  \App\User  $user
     * @param  \App\Seminar  $seminar
     * @return mixed
     */
    public function delete(User $user, Seminar $seminar)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the seminar.
     *
     * @param  \App\User  $user
     * @param  \App\Seminar  $seminar
     * @return mixed
     */
    public function restore(User $user, Seminar $seminar)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the seminar.
     *
     * @param  \App\User  $user
     * @param  \App\Seminar  $seminar
     * @return mixed
     */
    public function forceDelete(User $user, Seminar $seminar)
    {
        return false;
    }
}
