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
        Schema::create('seller_data', function (Blueprint $table) {
            $table->id('sellerId');
            $table->string('fname',50)->nullable();
            $table->string('lname',50)->nullable();
            $table->string('address',150)->nullable();
            $table->string('city',50);
            $table->string('zip',50)->nullable();
            $table->string('country',50)->nullable();
            $table->string('mobile',50)->nullable();
            $table->string('email',50) ->nullable();
            $table->string('password',50)->nullable();
            $table->string('image',50) ->nullable();
            $table->string('login_type',50)->nullable();
            $table->timestamps();
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addproducts');
    }
};
