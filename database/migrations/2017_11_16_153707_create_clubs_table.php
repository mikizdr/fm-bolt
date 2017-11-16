<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('contract_name');
            $table->text('description');
            $table->integer('user_id')->unsigned()->index();
            $table->datetime('creation_date');
            $table->string('background_path');
            $table->string('icon_path');
            $table->string('short_name');
            $table->string('address');
            $table->integer('house_nr');
            $table->integer('zipcode');
            $table->string('city');
            $table->string('invoice_address');
            $table->integer('invoice_house_nr');
            $table->integer('invoice_zipcode');
            $table->string('invoice_city');
            $table->string('email');
            $table->string('phone');
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
        Schema::dropIfExists('clubs');
    }
}
