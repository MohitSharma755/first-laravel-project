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
        Schema::create('carts', function (Blueprint $table) {
            $table->id('cartid');
            $table->string('userid',100)->nullable();
            $table->string('category',30)->nullable();
            $table->string('name',50)->nullable();
            $table->string('quantity',100)->nullable();
            $table->string('rate',100)->nullable();
            $table->string('totalprice',100)->nullable();
            $table->string('photo',100)->nullable();
            $table->string('productid',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
