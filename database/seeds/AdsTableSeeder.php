<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvertisementsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('Advertisements')->delete();

        DB::table('Advertisements')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'Premier Bet',
                'image' => 'e3696f36266f1a841d963f92d1f38c8d.jpg',
                'link' => 'https://www.premierbet.co.ao/',
                'position' => 'sidebar',
                'active' => 1,
                'created_at' => '2025-09-03 12:53:59',
                'updated_at' => '2025-09-03 12:53:59',
            ),
        ));


    }
}
