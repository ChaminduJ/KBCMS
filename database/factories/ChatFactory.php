<?php

use Faker\Generator as Faker;

$factory->define(App\Chat::class, function (Faker $faker) {
    return [
      'sent_user_id' => $faker->numberBetween($min=1,$max=30),
      'receive_user_id' => $faker->numberBetween($min=1,$max=30),
      'chat'=>$faker->text($maxNbChars=200)
    ];
});
