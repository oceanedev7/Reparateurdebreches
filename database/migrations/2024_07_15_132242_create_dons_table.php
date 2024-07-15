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
        Schema::create('dons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_moyens_de_paiement');


            $table->decimal('montant');
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('email')->unique();
            $table->string('code_postal');
            $table->string('ville');
            $table->string('pays');
            $table->string('telephone');
            $table->timestamps();



            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_moyens_de_paiement')->references('id')->on('moyendepaiements')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dons');
    }
};
