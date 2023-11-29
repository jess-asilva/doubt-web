<?php

namespace App\Policies;

use App\Models\Publication;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PublicationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Publication $publication): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @var $user User
     * @return bool
     */
    public function create(User $user): bool
    {
        return $user->user_type_id === User::ADMIN || $user->user_type_id === User::MONITOR;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Publication $publication): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @return bool
     * @var $user User
     */
    public function delete(User $user, Publication $publication): bool
    {
        return $user->user_type_id === User::ADMIN;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Publication $publication): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Publication $publication): bool
    {
        //
    }
}
