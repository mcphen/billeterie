<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrajetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trajets', function (Blueprint $table) {
            $table->id();
            $table->integer('nombre_place');
            $table->integer('prix');
            $table->date('date_depart');
            $table->timestamp('heure_depart');
            $table->string('lieu_depart');
            $table->string('lieu_arrive');
            $table->date('date_arrive');
            $table->timestamp('heure_arrive');
            $table->foreignId('voiture_id')
                ->constrained('voitures')
                ->onDelete('cascade');
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('trajets');
    }
}
