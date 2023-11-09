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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->unsignedBigInteger('id_type_user');
            $table->string('user', 15);
            $table->string('name', 100);
            $table->string('email')->unique();
            $table->integer('password');
            $table->string('ra/rm', 11);
            $table->timestamps();

            $table->foreign('id_type_user')->references('id_type_user')->on('type_of_users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
