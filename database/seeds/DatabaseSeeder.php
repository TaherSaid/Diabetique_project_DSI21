<?php

// use userseeder;
// use profileseeder;
// use comptePersonnelseeder;
// use mesureseeder;
// use qcmseeder;
// use comptesuivieseeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(userseeder::class);
         $this->call(profileseeder::class);
         $this->call(comptePersonnelseeder::class);
         $this->call(comptesuivieseeder::class);

         $this->call(mesureseeder::class);
         $this->call(qcmseeder::class);
    }
}
