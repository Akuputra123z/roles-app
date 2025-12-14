<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\SuratType;
use Illuminate\Auth\Access\HandlesAuthorization;

class SuratTypePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:SuratType');
    }

    public function view(AuthUser $authUser, SuratType $suratType): bool
    {
        return $authUser->can('View:SuratType');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:SuratType');
    }

    public function update(AuthUser $authUser, SuratType $suratType): bool
    {
        return $authUser->can('Update:SuratType');
    }

    public function delete(AuthUser $authUser, SuratType $suratType): bool
    {
        return $authUser->can('Delete:SuratType');
    }

    public function restore(AuthUser $authUser, SuratType $suratType): bool
    {
        return $authUser->can('Restore:SuratType');
    }

    public function forceDelete(AuthUser $authUser, SuratType $suratType): bool
    {
        return $authUser->can('ForceDelete:SuratType');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:SuratType');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:SuratType');
    }

    public function replicate(AuthUser $authUser, SuratType $suratType): bool
    {
        return $authUser->can('Replicate:SuratType');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:SuratType');
    }

}