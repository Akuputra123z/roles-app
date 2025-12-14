<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FinancialReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'surat_id',
        'date',
        'amount',
    ];

    protected $casts = [
        'date' => 'date',
        'amount' => 'decimal:2',
    ];

    /** RELATIONS */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function surat()
    {
        return $this->belongsTo(Surat::class);
    }
}
