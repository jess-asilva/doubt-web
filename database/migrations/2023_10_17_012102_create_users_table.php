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
            $table->id();
            $table->foreignId('user_type_id');
            $table->string('name', 100);
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('ra-rm', 11);
            $table->timestamps();

            $table->foreign('user_type_id')->references('id')->on('users_types');
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
