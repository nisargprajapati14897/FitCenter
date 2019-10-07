<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('p_id');
            $table->string('name');
            $table->string('price');
            $table->string('vadility');
            $table->string('Training_overview');
            $table->string('Foundation_Training');
            $table->string('Begineers_Classes');
            $table->string('Olympic_weighlifting');
            $table->string('Steam_bath_and_Sulu_bath');
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
        Schema::dropIfExists('packages');
    }
}
