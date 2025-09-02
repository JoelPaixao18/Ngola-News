<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('publications')->delete();

        DB::table('publications')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'dndf',
                'file' => 'f736cbaf7e4c98ab440c093c17d23fab.pdf',
                'cover' => '2324002c13c9cc7b66686bf9d653a0c3.jpg',
                'date' => '2025-09-01',
                'deleted_at' => NULL,
                'created_at' => '2025-09-01 10:02:39',
                'updated_at' => '2025-09-01 10:02:39',
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'tttrhre',
                'file' => 'cf4670fa397a48ef7d79abd234c13aba.pdf',
                'cover' => '67d7bc8ce9d110ce1cb5d78eaa567c0c.jpg',
                'date' => '2025-09-01',
                'deleted_at' => NULL,
                'created_at' => '2025-09-01 10:56:23',
                'updated_at' => '2025-09-01 10:56:23',
            ),
            2 =>
            array (
                'id' => 3,
                'title' => 'dfnb',
                'file' => 'c7dac0164e7288371f0eeb932906544a.pdf',
                'cover' => 'dee519b41fbf4431fa17f51c203e45c1.png',
                'date' => '2025-09-01',
                'deleted_at' => NULL,
                'created_at' => '2025-09-01 11:09:21',
                'updated_at' => '2025-09-01 11:09:21',
            ),
            3 =>
            array (
                'id' => 4,
                'title' => 'endf',
                'file' => '4488c39a5b08ecbc8781d3f8bdb40995.pdf',
                'cover' => 'e342a03aba9a2d1c83b9ae5dbd735750.jpg',
                'date' => '2025-09-01',
                'deleted_at' => NULL,
                'created_at' => '2025-09-01 11:09:37',
                'updated_at' => '2025-09-01 11:09:37',
            ),
            4 =>
            array (
                'id' => 5,
                'title' => 'mhgfmh',
                'file' => 'acc9cffc9a4f1e1231d948912698a0ee.pdf',
                'cover' => '8e8e0ee1ad6881a4bb8865e5c73b2adc.png',
                'date' => '2025-09-01',
                'deleted_at' => NULL,
                'created_at' => '2025-09-01 11:09:54',
                'updated_at' => '2025-09-01 11:09:54',
            ),
            5 =>
            array (
                'id' => 6,
                'title' => 'diferente',
                'file' => '6c29cebbf32ec3ead3d02a9ea6d1e5f6.pdf',
                'cover' => '78238c6369917d19c246470686339cb8.jpg',
                'date' => '2025-09-01',
                'deleted_at' => NULL,
                'created_at' => '2025-09-01 11:10:31',
                'updated_at' => '2025-09-01 11:10:31',
            ),
            6 =>
            array (
                'id' => 7,
                'title' => 'Estatuto do INFOSI',
                'file' => '99fd89c09d5235d32ef743f25d811966.pdf',
                'cover' => 'b7e1cb71f7942177367ba9dcdcc70639.jpg',
                'date' => '2025-09-01',
                'deleted_at' => NULL,
                'created_at' => '2025-09-01 11:12:02',
                'updated_at' => '2025-09-01 11:12:02',
            ),
        ));


    }
}

 