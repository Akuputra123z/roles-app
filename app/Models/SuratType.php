<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuratType extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'has_items',
        'has_financial',
    ];

    protected $casts = [
        'has_items' => 'boolean',
        'has_financial' => 'boolean',
    ];

    /** RELATIONS */
    public function surats()
    {
        return $this->hasMany(Surat::class);
    }

    public function templates()
    {
        return $this->hasMany(SuratTemplate::class);
    }
}
