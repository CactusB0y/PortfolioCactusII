<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert(
            [
                [
                    'adresseRue' => 'sillon',
                    'numero' => '98',
                    'adresse' => "Rue d'Aerschot 30 1030 Schaerbeek",
                    'tel' => '0486 490 741',
                    'mail' => 'abdkbib@gmail.com',
                    'facebook' => "https://www.facebook.com/profile.php?id=100007965316935",
                    'instagram' => "https://www.instagram.com/abrahamcactusboy/",
                    'twitter' => "https://twitter.com/Abraham66263595",
                    
                ]
            ]
        );
    }
}
