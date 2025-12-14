<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\SuratTemplate;
use Illuminate\Auth\Access\HandlesAuthorization;

class SuratTemplatePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:SuratTemplate');
    }

    public function view(AuthUser $authUser, SuratTemplate $suratTemplate): bool
    {
        return $authUser->can('View:SuratTemplate');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:SuratTemplate');
    }

    public function update(AuthUser $authUser, SuratTemplate $suratTemplate): bool
    {
        return $authUser->can('Update:SuratTemplate');
    }

    public function delete(AuthUser $authUser, SuratTemplate $suratTemplate): bool
    {
        return $authUser->can('Delete:SuratTemplate');
    }

    public function restore(AuthUser $authUser, SuratTemplate $suratTemplate): bool
    {
        return $authUser->can('Restore:SuratTemplate');
    }

    public function forceDelete(AuthUser $authUser, SuratTemplate $suratTemplate): bool
    {
        return $authUser->can('ForceDelete:SuratTemplate');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:SuratTemplate');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:SuratTemplate');
    }

    public function replicate(AuthUser $authUser, SuratTemplate $suratTemplate): bool
    {
        return $authUser->can('Replicate:SuratTemplate');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:SuratTemplate');
    }

}