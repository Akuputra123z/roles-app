<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nama_direktur',
        'jabatan',
        'npwpw',
        'email',
        'phone',
        'address',
        'logo',
    ];

    /** RELATIONS */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function mitras()
    {
        return $this->hasMany(Mitra::class);
    }

    public function suratTemplates()
    {
        return $this->hasMany(SuratTemplate::class);
    }

    public function surats()
    {
        return $this->hasMany(Surat::class);
    }

    public function financialReports()
    {
        return $this->hasMany(FinancialReport::class);
    }
   
}
