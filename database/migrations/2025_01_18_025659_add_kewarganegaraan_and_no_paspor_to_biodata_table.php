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
        Schema::table('biodata', function (Blueprint $table) {
            $table->enum('kewarganegaraan', ['WNI', 'WNA']); // Enum untuk kewarganegaraan
            $table->integer('no_paspor')->nullable()->unique(); // Integer untuk nomor paspor
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('biodata', function (Blueprint $table) {
            //
        });
    }
};
