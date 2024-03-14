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
            $table->id(); ///primary key
            $table->string('productname');
            $table->string('country');
            $table->integer('price');
            $table->string('orggin');
            $table->text('detail');
            $table->boolean('isStore');
            $table->string('image')->nullable();
            $table->string('color');
            $table->unsignedBigInteger('category_id'); //foreign key
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            // $table->foreignId('category_id')->constrained()->cascadeOnDelete();
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
