<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Company;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable, HasRoles;

   
    protected $guard_name = 'web';

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_active',
        'company_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_active' => 'boolean',
        ];
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function isSuperAdmin(): bool
{
    return $this->hasRole('super_admin');
}

public function canAccessPanel(Panel $panel): bool
{
    return true;
}   

}
