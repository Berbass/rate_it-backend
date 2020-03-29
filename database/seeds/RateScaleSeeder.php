<?php

use Illuminate\Database\Seeder;
use App\RateScale;

class RateScaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(RateScale::class, 3)->create();
    }
}
