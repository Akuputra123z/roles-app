<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mitra extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'name',
        'name_mitra',
        'jabatan',
        'nip',
        'email',
        'phone',
        'address',
    ];

    /** RELATIONS */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function surats()
    {
        return $this->hasMany(Surat::class);
    }
}
