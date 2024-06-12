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
        Schema::create('image', function (Blueprint $table) {
                $table->id(); // primary key, auto-incrementing ID
                $table->string('title'); // title of the image
                $table->unsignedBigInteger('idMenu'); // foreign key referencing menu
                $table->unsignedBigInteger('idAdmin'); // foreign key referencing admin
                $table->text('description')->nullable(); // description of the image
                $table->string('image'); // path to the image file
                $table->timestamps(); // created_at and updated_at columns
                $table->softDeletes();
    
                // Foreign key constraints
                $table->foreign('idMenu')->references('id')->on('menu')->onDelete('cascade');
                $table->foreign('idAdmin')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image');
    }
};
