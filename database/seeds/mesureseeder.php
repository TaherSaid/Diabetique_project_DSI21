<?php

use App\mesure;
use Illuminate\Database\Seeder;

class mesureseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(mesure::class, 50)->create();
    }
}
