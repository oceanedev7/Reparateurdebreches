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
        Schema::create('demandedecontacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');

            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->text('message');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandedecontacts');
    }
};
