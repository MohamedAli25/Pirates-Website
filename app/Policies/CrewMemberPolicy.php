<?php

namespace App\Policies;

use App\CrewMember;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class CrewMemberPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any crew members.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isBoard();
    }

    /**
     * Determine whether the user can view the crew member.
     *
     * @param  \App\User  $user
     * @param  \App\CrewMember  $crewMember
     * @return mixed
     */
    public function view(User $user, CrewMember $crewMember)
    {
        return $crewMember->user()->is($user);
    }

    /**
     * Determine whether the user can create crew members.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the crew member.
     *
     * @param  \App\User  $user
     * @param  \App\CrewMember  $crewMember
     * @return mixed
     */
    public function update(User $user, CrewMember $crewMember)
    {
        return $crewMember->user()->is($user);
    }

    /**
     * Determine whether the user can delete the crew member.
     *
     * @param  \App\User  $user
     * @param  \App\CrewMember  $crewMember
     * @return mixed
     */
    public function delete(User $user, CrewMember $crewMember)
    {
        return $crewMember->user()->is($user);
    }

    /**
     * Determine whether the user can restore the crew member.
     *
     * @param  \App\User  $user
     * @param  \App\CrewMember  $crewMember
     * @return mixed
     */
    public function restore(User $user, CrewMember $crewMember)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the crew member.
     *
     * @param  \App\User  $user
     * @param  \App\CrewMember  $crewMember
     * @return mixed
     */
    public function forceDelete(User $user, CrewMember $crewMember)
    {
        return false;
    }
}
