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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('descreption');
            $table->decimal('price',8,2);
<<<<<<< HEAD
            $table->integer('stocke')->nullable();
=======
            $table->integer('stocke');
>>>>>>> 19d803a68700d6d6c0dc59a59edfc9bb4f680a61
            $table->foreignId('categories_id')->constrained()->delete('cascade');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
