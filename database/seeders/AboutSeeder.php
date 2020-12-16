<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert(
            [
                [
                    'nom' => 'Abderrahim Kbib',
                    'profil' => 'web developpeur',
                    'email' => 'abdkbib@gmail.com',
                    'phone' => '0486490741',
                    'src' => "cactus.jpg"
                ]
            ]
        );
    }
}
