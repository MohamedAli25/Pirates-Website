<?php

namespace App\Policies;

use App\Preference;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PreferencePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any preferences.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the preference.
     *
     * @param  \App\User  $user
     * @param  \App\Preference  $preference
     * @return mixed
     */
    public function view(User $user, Preference $preference)
    {
        //
    }

    /**
     * Determine whether the user can create preferences.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the preference.
     *
     * @param  \App\User  $user
     * @param  \App\Preference  $preference
     * @return mixed
     */
    public function update(User $user, Preference $preference)
    {
        //
    }

    /**
     * Determine whether the user can delete the preference.
     *
     * @param  \App\User  $user
     * @param  \App\Preference  $preference
     * @return mixed
     */
    public function delete(User $user, Preference $preference)
    {
        //
    }

    /**
     * Determine whether the user can restore the preference.
     *
     * @param  \App\User  $user
     * @param  \App\Preference  $preference
     * @return mixed
     */
    public function restore(User $user, Preference $preference)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the preference.
     *
     * @param  \App\User  $user
     * @param  \App\Preference  $preference
     * @return mixed
     */
    public function forceDelete(User $user, Preference $preference)
    {
        //
    }
}
