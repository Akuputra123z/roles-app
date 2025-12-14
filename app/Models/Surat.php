<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Surat extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'mitra_id',
        'surat_template_id',
        'surat_type_id',
        'number',
        'date',
        'subtotal',
        'tax',
        'total',
        'status',
        'content',
    ];

    protected $casts = [
        'date' => 'date',
        'subtotal' => 'decimal:2',
        'tax' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    /** RELATIONS */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function mitra()
    {
        return $this->belongsTo(Mitra::class);
    }

    public function template()
    {
        return $this->belongsTo(SuratTemplate::class, 'surat_template_id');
    }

    public function type()
    {
        return $this->belongsTo(SuratType::class, 'surat_type_id');
    }

    public function items()
    {
        return $this->hasMany(SuratItem::class);
    }

    public function financialReport()
    {
        return $this->hasOne(FinancialReport::class);
    }
}
