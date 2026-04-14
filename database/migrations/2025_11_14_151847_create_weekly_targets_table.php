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
        Schema::create('weekly_targets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('work_program_id')->constrained()->onDelete('cascade');
            $table->text('uraian');
            $table->text('realisasi_minggu_ini')->nullable();
            $table->text('keterangan')->nullable();
            $table->text('target_minggu_berikut')->nullable();
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weekly_targets');
    }
};
