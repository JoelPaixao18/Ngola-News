<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
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
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'remember_token' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'editor',
                'email' => 'admin@editor.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('admin123'),
                'role' => 'editor',
                'remember_token' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Jornalista',
                'email' => 'admin@Jornalista.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('admin123'),
                'role' => 'jornalista',
                'remember_token' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Assinante',
                'email' => 'admin@Assinante.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('admin123'),
                'role' => 'assinante',
                'remember_token' => NULL,
            ),
        ));
    }
}
