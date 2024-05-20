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
        Schema::create('fragrances', function (Blueprint $table) {
            $table->id();
            $table->string('fragrance_name');
            $table->text('fragrance_description')->nullable();
            $table->text('ingredients')->nullable();
            $table->string('gender')->nullable();
            $table->integer('quantity')->default(0);
            $table->decimal('price', 8, 2)->default(0);
            $table->string('image')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fragrances');
    }
};
