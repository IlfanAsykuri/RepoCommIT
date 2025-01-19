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
        Schema::create('pedatrens', function (Blueprint $table) {
            $table->id();
            $table->integer('id_biodata');
            $table->integer('anak_keberapa');
            $table->integer('berapa_bersaudara');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedatrens');
    }
};
