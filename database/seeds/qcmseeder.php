<?php

use App\qcms;
use Illuminate\Database\Seeder;

class qcmseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(qcms::class, 25)->create();
    }
}
