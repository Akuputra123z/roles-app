<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Mitra;
use Illuminate\Auth\Access\HandlesAuthorization;

class MitraPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Mitra');
    }

    public function view(AuthUser $authUser, Mitra $mitra): bool
    {
        return $authUser->can('View:Mitra');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Mitra');
    }

    public function update(AuthUser $authUser, Mitra $mitra): bool
    {
        return $authUser->can('Update:Mitra');
    }

    public function delete(AuthUser $authUser, Mitra $mitra): bool
    {
        return $authUser->can('Delete:Mitra');
    }

    public function restore(AuthUser $authUser, Mitra $mitra): bool
    {
        return $authUser->can('Restore:Mitra');
    }

    public function forceDelete(AuthUser $authUser, Mitra $mitra): bool
    {
        return $authUser->can('ForceDelete:Mitra');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Mitra');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Mitra');
    }

    public function replicate(AuthUser $authUser, Mitra $mitra): bool
    {
        return $authUser->can('Replicate:Mitra');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Mitra');
    }

}