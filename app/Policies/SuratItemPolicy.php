<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\SuratItem;
use Illuminate\Auth\Access\HandlesAuthorization;

class SuratItemPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:SuratItem');
    }

    public function view(AuthUser $authUser, SuratItem $suratItem): bool
    {
        return $authUser->can('View:SuratItem');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:SuratItem');
    }

    public function update(AuthUser $authUser, SuratItem $suratItem): bool
    {
        return $authUser->can('Update:SuratItem');
    }

    public function delete(AuthUser $authUser, SuratItem $suratItem): bool
    {
        return $authUser->can('Delete:SuratItem');
    }

    public function restore(AuthUser $authUser, SuratItem $suratItem): bool
    {
        return $authUser->can('Restore:SuratItem');
    }

    public function forceDelete(AuthUser $authUser, SuratItem $suratItem): bool
    {
        return $authUser->can('ForceDelete:SuratItem');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:SuratItem');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:SuratItem');
    }

    public function replicate(AuthUser $authUser, SuratItem $suratItem): bool
    {
        return $authUser->can('Replicate:SuratItem');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:SuratItem');
    }

}