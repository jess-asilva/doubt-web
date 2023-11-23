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
        Schema::create('discipline_monitors', function (Blueprint $table) {
            $table->id('id_discipline_monitor');
            $table->foreignId('id_user');
            $table->foreignId('id_discipline');
            $table->foreignId('id_course');
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_discipline')->references('id_discipline')->on('disciplines');
            $table->foreign('id_course')->references('id_course')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discipline_monitors');
    }
};
