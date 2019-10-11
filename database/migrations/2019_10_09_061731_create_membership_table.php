<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership', function (Blueprint $table) {
            $table->bigIncrements('mid');
            $table->string('name');
            $table->string('email', 128)->unique();
            $table->string('phone');
            $table->string('apartment');
            $table->string('area');
            $table->string('landmark');
            $table->string('city');
            $table->string('pincode');
            $table->string ('membershipname');
            $table->string ('price');
            $table->string ('disease');
            $table->string ('age');
            $table->string ('membershipstatus');
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
        Schema::dropIfExists('membership');
    }
}
