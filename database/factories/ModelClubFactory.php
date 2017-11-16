<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Club::class, function (Faker $faker) {
    return [
      `name` => $faker->word,
      `contract_name` => $faker->entence($nbWords = 6, $variableNbWords = true),
      `description` => $faker->paragraph,
      `user_id` => $faker->numberBetween(1, 50),
      `creation_date` => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
      `background_path` => $faker->imageUrl($width = 1280, $height = 1080),
      `icon_path` => $faker->imageUrl($width, $height, 'clubs'),
      `short_name` => $faker->word,
      `address` => $faker->address,
      `house_nr` => $faker->numberBetween(1, 500),
      `zipcode` => $faker->postcode,
      `city` => $faker->cityPrefix,
      `invoice_address` => $faker->secondaryAddress,
      `invoice_house_nr` => $faker->buildingNumber,
      `invoice_zipcode` => $faker->postcode,
      `invoice_city` => $faker->cityPrefix,
      `email` => $faker->email,
      `phone` => $faker->phoneNumber,
    ];
});

