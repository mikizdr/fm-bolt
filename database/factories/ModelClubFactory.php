<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Club::class, function (Faker $faker) {
    return [
      'name' => $faker->word,
      'contract_name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
      'description' => $faker->paragraph,
      'user_id' => $faker->numberBetween(1, 50),
      'creation_date' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
      'background_path' => $faker->word,
      'icon_path' => $faker->word,
      'short_name' => $faker->word,
      'address' => $faker->address,
      'house_nr' => $faker->numberBetween(1, 500),
      'zipcode' => $faker->numberBetween(1000, 5000),
      'city' => $faker->cityPrefix,
      'invoice_address' => $faker->address,
      'invoice_house_nr' => $faker->numberBetween(1, 500),
      'invoice_zipcode' => $faker->numberBetween(1000, 5000),
      'invoice_city' => $faker->cityPrefix,
      'email' => $faker->email,
      'phone' => $faker->phoneNumber,
    ];
});

