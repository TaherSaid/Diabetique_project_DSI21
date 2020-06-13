<?php

use App\comptePersonnel;
use Illuminate\Database\Seeder;

class comptePersonnelseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(comptePersonnel::class, 50)->create();
    }
}
