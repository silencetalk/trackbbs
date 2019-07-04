<?php

use Illuminate\Database\Seeder;
use App\Models\Inform;

class InformsTableSeeder extends Seeder
{
    public function run()
    {
        $informs = factory(Inform::class)->times(50)->make()->each(function ($inform, $index) {
            if ($index == 0) {
                // $inform->field = 'value';
            }
        });

        Inform::insert($informs->toArray());
    }

}

