<?php

use Illuminate\Database\Seeder;

class MoneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entity\Money::class, 10)->create()->each(function ($m) {
            $m->make();
        });
    }
}
