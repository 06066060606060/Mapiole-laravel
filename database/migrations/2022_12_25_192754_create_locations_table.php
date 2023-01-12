<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('prix')->nullable();
            $table->text('name')->nullable();
            $table->text('description')->nullable();
            $table->text('description2')->nullable();
            $table->string('image')->nullable();
            $table->string('documents')->nullable();
            $table->string('category')->nullable();
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('pays')->nullable();
            $table->string('type')->nullable();
            $table->integer('loyer')->nullable();
            $table->integer('code_postal')->nullable();
            $table->integer('surface')->nullable();
            $table->integer('nb_piece')->nullable();
            $table->integer('nb_chambre')->nullable();
            $table->integer('nb_salle_bain')->nullable();
            $table->integer('nb_toilette')->nullable();
            $table->integer('terrasse')->nullable();
            $table->integer('jardin')->nullable();
            $table->integer('garage')->nullable();
            $table->integer('parking')->nullable();
            $table->integer('piscine')->nullable();
            $table->integer('ascenseur')->nullable();
            $table->string('telephone')->nullable();
            $table->string('status')->nullable();
            $table->string('type_chauffage')->nullable();

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
        Schema::dropIfExists('locations');
    }
};
