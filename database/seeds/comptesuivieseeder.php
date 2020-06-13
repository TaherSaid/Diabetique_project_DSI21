<?php

use App\compteSuivie;
use Illuminate\Database\Seeder;

class comptesuivieseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(compteSuivie::class, 50)->create();
    }
}
