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
        Schema::create('newsletter_carnetadresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_newsletter');
            $table->unsignedBigInteger('id_carnet_adresse');
            $table->timestamps();

            $table->foreign('id_newsletter')->references('id')->on('newsletters')->onDelete('cascade');
            $table->foreign('id_carnet_adresse')->references('id')->on('carnetadresses')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newsletter_carnetadresses');
    }
};
