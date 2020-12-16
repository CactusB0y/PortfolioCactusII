<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('presentations')->insert(
            [
                [
                    'src' => 'champcactus.jpg',
                    'nom_complet' => 'Abderrahim "CactusBoy" Kbib',
                    'catch_phrase' => 'Développeur web'
                ]
            ]
        );
    }
}
