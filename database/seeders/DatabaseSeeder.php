<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Adi Apriyanto',
            'nim' => '202302028',
            'id_fakultas' => '1',
            'id_kelas' => '2',
            'address' => 'Cilacap',
            'place_of_birth' => 'Cilacap',
            'date_birth' => '20',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role'  => 'admin',
        ]);
    }
}
