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
            $table->string('username')->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('sandi')->nullable(false);
            $table->string('status')->nullable(false);
            $table->unsignedBigInteger('idRole')->nullable(false);
            $table->dateTime('lastLogin')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Definisi kunci asing untuk kolom 'idRole'
            $table->foreign('idRole')->references('id')->on('user_roles');
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
