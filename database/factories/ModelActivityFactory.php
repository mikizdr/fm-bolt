<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Activity::class, function (Faker $faker) {
    return [
        //
    ];
});
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `promo_title` varchar(256) DEFAULT NULL,
  `promo_text` text,
  `is_day_event` tinyint(1) NOT NULL DEFAULT '0',
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `has_custom_dates` tinyint(1) DEFAULT '0',
  `address` text NOT NULL COMMENT 'the address of the activity',
  `zipcode` varchar(6) DEFAULT NULL,
  `city` text NOT NULL COMMENT 'the city of the activity',
  `region` varchar(32) NOT NULL DEFAULT 'nl' COMMENT 'the region of the event',
  `country_id` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'the country of the event',
  `website` varchar(256) NOT NULL,
  `description` longtext NOT NULL COMMENT 'the description of the activity',
  `creator_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `terms_link` varchar(256) DEFAULT NULL,
  `entry_criteria` varchar(100) NOT NULL COMMENT 'the targetgroup of the activity',
  `costs` decimal(6,2) DEFAULT NULL COMMENT 'the marketplace costs of the activity',
  `start_registration` datetime NOT NULL COMMENT 'startdate of the registration',
  `end_registration` datetime NOT NULL COMMENT 'enddate of the registration',
  `max_registrations` mediumint(9) NOT NULL COMMENT 'the maximum number of registrations',
  `icon_path` varchar(256) NOT NULL COMMENT 'the logo of this activity',
  `vat_percentage` int(11) DEFAULT NULL,
  `type` varchar(12) NOT NULL DEFAULT 'training' COMMENT 'the type of activity ''activity, event or course''',
  `organizer_type` varchar(12) NOT NULL,
  `organizer_ref` int(10) unsigned NOT NULL,
  `sync_id` varchar(20) DEFAULT NULL COMMENT 'unique id used for synchronzing with other calendars',
  `group_id` varchar(20) DEFAULT NULL COMMENT 'for grouping recurrent activities',
  `cost_type` enum('free','single_price','starting_at','unknown') DEFAULT 'unknown' COMMENT 'tells what kind of costs are assigned',
  `has_external_registration` tinyint(1) DEFAULT '0' COMMENT 'tells if activity has an external registration form',
  `registration_url` varchar(512) DEFAULT NULL,