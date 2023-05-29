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
        Schema::create('intermediairs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->string('companyname');
            $table->string('ext_debtor_number')->nullable();
            $table->unsignedBigInteger('status_id');
            $table->string('address', 100);
            $table->string('postcode', 10);
            $table->string('city', 100);
            $table->string('country', 10);
            $table->timestamp('deleted')->nullable();
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');

            $table->index('companyname');
            $table->index('ext_debtor_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intermediairs');
    }
};
