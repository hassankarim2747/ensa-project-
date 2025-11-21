<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('cne')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('filiere');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->date('date_naissance');
            $table->string('adresse');
            $table->string('etat')->default('inscrit'); // Par exemple : inscrit, présélectionné, accepté,admis_écrit
            $table->string('concours');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}