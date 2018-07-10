<?php

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entity\Currency::class, 10)->create()->each(function ($c) {
            $c->make();
        });
    }
}
