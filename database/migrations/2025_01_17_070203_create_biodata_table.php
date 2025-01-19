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
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 30); 
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']); 
            $table->date('tanggal_lahir'); 
            $table->char('tempat_lahir', 50); 
            $table->char('nik', 16); 
            $table->char('no_kk', 16); 
            $table->string('no_telpon', 15); 
            $table->string('email', 100)->unique(); 
            $table->enum('jenjang_pendidikan_terakhir', ['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3']); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata');
    }
};
