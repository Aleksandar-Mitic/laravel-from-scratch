<?php

namespace BasicLaravel\Policies;

use BasicLaravel\User;
use BasicLaravel\Project;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the project.
     *
     * @param  \BasicLaravel\User  $user
     * @param  \BasicLaravel\Project  $project
     * @return mixed
     */
    public function view(User $user, Project $project)
    {
        return $project->owner_id == $user->id;
    }

    /**
     * Determine whether the user can create projects.
     *
     * @param  \BasicLaravel\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the project.
     *
     * @param  \BasicLaravel\User  $user
     * @param  \BasicLaravel\Project  $project
     * @return mixed
     */
    public function update(User $user, Project $project)
    {
        //
    }

    /**
     * Determine whether the user can delete the project.
     *
     * @param  \BasicLaravel\User  $user
     * @param  \BasicLaravel\Project  $project
     * @return mixed
     */
    public function delete(User $user, Project $project)
    {
        //
    }

    /**
     * Determine whether the user can restore the project.
     *
     * @param  \BasicLaravel\User  $user
     * @param  \BasicLaravel\Project  $project
     * @return mixed
     */
    public function restore(User $user, Project $project)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the project.
     *
     * @param  \BasicLaravel\User  $user
     * @param  \BasicLaravel\Project  $project
     * @return mixed
     */
    public function forceDelete(User $user, Project $project)
    {
        //
    }
}
