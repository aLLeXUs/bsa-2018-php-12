<?php

use Faker\Generator as Faker;

$factory->define(App\Entity\Money::class, function (Faker $faker) {
    return [
        'currency_id' => factory(App\Entity\Currency::class)->create()->id,
        'amount' => $faker->randomFloat(2, 0, 1000),
        'wallet_id' => factory(App\Entity\Wallet::class)->create()->id,
    ];
});
