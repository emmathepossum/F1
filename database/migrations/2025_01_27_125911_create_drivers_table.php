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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('driverId')->nullable();
            $table->string('url')->nullable();
            $table->string('givenName')->nullable();
            $table->string('familyName')->nullable();
            $table->string('dateOfBirth')->nullable();
            $table->string('nationality')->nullable();
            $table->string('permanentNumber')->nullable();
            $table->string('code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
