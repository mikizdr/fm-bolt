<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Club::class, function (Faker $faker) {
    return [
        //
    ];
});
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `contract_name` varchar(128) DEFAULT NULL,
  `description` mediumtext,
  `creator_id` int(10) unsigned DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `background_path` varchar(256) DEFAULT NULL,
  `icon_path` varchar(256) DEFAULT NULL,
  `org_id` varchar(128) DEFAULT NULL,
  `address` varchar(64) DEFAULT NULL,
  `house_nr` varchar(6) DEFAULT NULL,
  `zipcode` varchar(6) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `invoice_address` varchar(64) DEFAULT NULL,
  `invoice_house_nr` varchar(6) DEFAULT NULL,
  `invoice_zipcode` varchar(6) DEFAULT NULL,
  `invoice_city` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `phone` varchar(64) DEFAULT NULL,