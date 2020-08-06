<?php

namespace App\Policies;

use App\Speaker;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SpeakerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any speakers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the speaker.
     *
     * @param  \App\User  $user
     * @param  \App\Speaker  $speaker
     * @return mixed
     */
    public function view(User $user, Speaker $speaker)
    {
        return true;
    }

    /**
     * Determine whether the user can create speakers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the speaker.
     *
     * @param  \App\User  $user
     * @param  \App\Speaker  $speaker
     * @return mixed
     */
    public function update(User $user, Speaker $speaker)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the speaker.
     *
     * @param  \App\User  $user
     * @param  \App\Speaker  $speaker
     * @return mixed
     */
    public function delete(User $user, Speaker $speaker)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the speaker.
     *
     * @param  \App\User  $user
     * @param  \App\Speaker  $speaker
     * @return mixed
     */
    public function restore(User $user, Speaker $speaker)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the speaker.
     *
     * @param  \App\User  $user
     * @param  \App\Speaker  $speaker
     * @return mixed
     */
    public function forceDelete(User $user, Speaker $speaker)
    {
        return false;
    }
}
