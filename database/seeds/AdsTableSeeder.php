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

        DB::table('Advertisements')->insert(array(
            0 =>
            array(
                'id' => 1,
                'title' => 'Premier Bet',
                'image' => 'e3696f36266f1a841d963f92d1f38c8d.jpg',
                'link' => 'https://www.premierbet.co.ao/',
                'position' => 'sidebar',
                'active' => 1,
                'created_at' => '2025-09-03 12:53:59',
                'updated_at' => '2025-09-03 12:53:59',
            ),
            1 =>
            array(
                'id' => 2,
                'title' => 'Cinema',
                'image' => 'be3a7ab619d5a54c8dc499a1eda8568b.jpg',
                'link' => 'https://www.zap.co.ao/zap-cinemas/em-exibicao',
                'position' => 'sidebar',
                'active' => 1,
                'created_at' => '2025-09-05 09:02:09',
                'updated_at' => '2025-09-05 09:02:09',
            ),
            2 =>
            array(
                'id' => 3,
                'title' => '50 anos de independencia',
                'image' => '85c0e763d1554d9a9e01d1dc8ca31ed3.png',
                'link' => 'https://angola50anos.gov.ao/',
                'position' => 'sidebar',
                'active' => 1,
                'created_at' => '2025-09-05 09:26:56',
                'updated_at' => '2025-09-05 09:26:56',
            ),
        ));
    }
}
