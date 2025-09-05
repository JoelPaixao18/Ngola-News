<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Infosi',
                'email' => 'admin@infosi.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$u/wQCq/pvkdXQJOA48xDLe.o/KNhFZWbH7ZpeGn2AJdbTJjZePQ6G',
                'remember_token' => NULL,
                'created_at' => '2025-09-05 08:53:48',
                'updated_at' => '2025-09-05 08:53:48',
            ),
        ));
    }
}
