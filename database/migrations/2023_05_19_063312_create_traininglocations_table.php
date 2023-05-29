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
        Schema::create('traininglocations', function (Blueprint $table) {
            $table->id();

            $table->string('locationname');
            $table->string('address');
            $table->string('postcode');
            $table->string('city');
            $table->string('country');
            $table->string('long')->nullable();
            $table->string('latt')->nullable();

            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('intermediair_id');
            $table->unsignedBigInteger('owner_id');

            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('intermediair_id')->references('id')->on('intermediairs')->onDelete('cascade');
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');

            $table->index('locationname');
            $table->index('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traininglocations');
    }
};
