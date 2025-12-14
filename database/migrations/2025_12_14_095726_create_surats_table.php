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
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained()->cascadeOnDelete();
            $table->foreignId('mitra_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('surat_template_id')->constrained('surat_templates')->cascadeOnDelete();
            $table->foreignId('surat_type_id')->constrained()->cascadeOnDelete();
        
            $table->string('number')->nullable();
            $table->date('date');
        
            $table->decimal('subtotal', 18, 2)->default(0);
            $table->decimal('tax', 18, 2)->default(0);
            $table->decimal('total', 18, 2)->default(0);
        
            $table->enum('status', ['draft', 'sent', 'paid'])->default('draft');
        
            $table->longText('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surats');
    }
};
