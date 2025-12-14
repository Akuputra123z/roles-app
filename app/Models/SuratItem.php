<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuratItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'surat_id',
        'description',
        'quantity',
        'price',
        'total',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    /** RELATIONS */
    public function surat()
    {
        return $this->belongsTo(Surat::class);
    }
}
