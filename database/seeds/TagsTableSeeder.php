<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('tags')->delete();

        DB::table('tags')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Tecnologia',
                'description' => 'Tecnologia',
                'deleted_at' => NULL,
                'created_at' => '2025-09-18 13:44:28',
                'updated_at' => '2025-09-18 13:44:28',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Presidente',
                'description' => 'Politica',
                'deleted_at' => NULL,
                'created_at' => '2025-09-18 13:45:21',
                'updated_at' => '2025-09-18 13:45:21',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Futebol',
                'description' => 'Desporto',
                'deleted_at' => NULL,
                'created_at' => '2025-09-18 13:46:01',
                'updated_at' => '2025-09-18 13:46:01',
            ),
        ));


    }
}
