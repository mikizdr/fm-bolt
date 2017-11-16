<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('promo_title');
            $table->text('promo_text');
            $table->boolean('is_day_event');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->boolean('has_custom_dates');
            $table->string('address');
            $table->integer('zipcode');
            $table->string('city');
            $table->string('region');
            $table->integer('country_id');
            $table->string('website');
            $table->text('description');
            $table->integer('user_id')->unsigned()->index();
            $table->datetime('creation_date');
            $table->string('terms_link');
            $table->string('entry_criteria');
            $table->decimal('costs', 6, 2);
            $table->datetime('start_registration');
            $table->datetime('end_registration');
            $table->integer('max_registrations');
            $table->string('icon_path');
            $table->decimal('vat_percentage', 4, 2);
            $table->string('type_of_activity');
            $table->string('organizer_type');
            $table->integer('club_id')->unsigned()->index();
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
            $table->string('sync_id');
            $table->string('group_id');
            $table->string('cost_type');
            $table->boolean('has_external_registration');
            $table->string('registration_url');
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
        Schema::dropIfExists('activities');
    }
}
