<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('add-equipment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('equipmentname');
            $table->string('description');
            $table->integer('price');
            $table->string('stock');
            $table->string('image');
            $table->rememberToken();
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
        Schema::dropIfExists('add-equipment');
    }
}