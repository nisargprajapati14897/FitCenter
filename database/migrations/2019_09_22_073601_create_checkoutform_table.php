<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckoutformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkoutform', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email', 128)->unique();
            $table->string('phone');
            $table->string('apartment');
            $table->string('area');
            $table->string('landmark');
            $table->string('city');
            $table->string('pincode');
            $table->string('state');
            $table->string ('productname');
            $table->string ('price');
            $table->string ('orderstatus');       
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
        Schema::dropIfExists('checkoutform');
    }
}