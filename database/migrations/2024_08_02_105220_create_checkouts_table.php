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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('first',20)->nullable();
            $table->string('last',20)->nullable();
            $table->string('userid',20)->nullable();
            $table->string('address',50)->nullable();
            $table->string('city',20)->nullable();
            $table->string('country',20)->nullable();
            $table->string('postcode',20)->nullable();
            $table->string('mobile',20)->nullable();
            $table->string('email',20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
