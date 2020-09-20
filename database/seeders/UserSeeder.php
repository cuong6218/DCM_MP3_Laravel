<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Cuong',
            'email' => 'cuong@gmail.com',
            'password' => 'c20ad4d76fe97759aa27a0c99bff6710',
        ]);
    }
}
