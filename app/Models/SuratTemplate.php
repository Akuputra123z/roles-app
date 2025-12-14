<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuratTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'surat_type_id',
        'name',
        'content',
    ];

    /** RELATIONS */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function type()
    {
        return $this->belongsTo(SuratType::class, 'surat_type_id');
    }

    public function surats()
    {
        return $this->hasMany(Surat::class);
    }
}
