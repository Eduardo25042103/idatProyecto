<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Javier Revilla',
                'username' => 'Administrador',
                'email' => 'jrevillah@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'Recuersos Humanos',
                'username' => 'UserRRHH',
                'email' => 'rrhh@gmail.com',
                'role' => 'rrhh',
                'status' => 'active',
                'password' => bcrypt('123456789'),
            ]
        ]);
    }
}
