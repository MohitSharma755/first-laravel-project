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
            $table->id('productid');
            $table->string('category',20)->nullable();
            $table->string('name',20)->nullable();
            $table->string('description',20)->nullable();
            $table->string('photo',20)->nullable();
            $table->string('quantity',20)->nullable();
            $table->string('rate',20)->nullable();
            $table->string('seller_mobile',20)->nullable();
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
