<?php

use App\profile;
use Illuminate\Database\Seeder;

class profileseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(profile::class, 50)->create();
    }
}
