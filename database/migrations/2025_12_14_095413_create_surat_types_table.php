<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('surat_types', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); 
            // contoh: invoice, kontrak, spk, penawaran, berita_acara
        
            $table->string('name'); 
            // Invoice, Kontrak, SPK, dll
        
            $table->boolean('has_items')->default(false);
            // true = invoice / kontrak (punya tabel item)
        
            $table->boolean('has_financial')->default(false);
            // true = masuk laporan keuangan
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_types');
    }
};
