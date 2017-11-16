<?php

use App\Model\Club;
use Faker\Generator as Faker;

$factory->define(App\Model\Activity::class, function (Faker $faker) {
    return [
      'name' => $faker->word,
      'promo_title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
      'promo_text' => $faker->paragraph,
      'is_day_event' => $faker->boolean,
      'start_date' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
      'end_date' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
      'has_custom_dates' => $faker->boolean,
      'address' => $faker->address,
      'zipcode' => $faker->numberBetween(1000, 5000),
      'city' => $faker->cityPrefix,
      'region' => $faker->state,
      'country_id' => $faker->numberBetween(1, 50),
      'website' => $faker->url,
      'description' => $faker->paragraph,
      'user_id' => $faker->numberBetween(1, 50),
      'creation_date' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
      'terms_link' => $faker->url,
      'entry_criteria' => $faker->sentence($nbWords = 5, $variableNbWords = true),
      'costs' => $faker->numberBetween(10, 100),
      'start_registration' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
      'end_registration' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
      'max_registrations' => $faker->numberBetween(10, 20),
      'icon_path' => $faker->word,
      'vat_percentage' => $faker->numberBetween(10, 20),
      'type_of_activity' => $faker->word,
      'organizer_type' => $faker->word,
      'club_id' => function () {
          return Club::all()->random();
        },
      'sync_id' => $faker->randomDigitNotNull,
      'group_id' => $faker->numberBetween(1, 50),
      'cost_type' => $faker->word,
      'has_external_registration' => $faker->boolean,
      'registration_url' => $faker->url
    ];
});
