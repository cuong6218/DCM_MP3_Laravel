<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'id' => 1,
            'name' => 'covid19',
        ]);
        DB::table('tags')->insert([
            'id' => 2,
            'name' => 'love',
        ]);
        DB::table('tags')->insert([
            'id' => 3,
            'name' => 'kpop',
        ]);
        DB::table('tags')->insert([
            'id' => 4,
            'name' => 'chocolate',
        ]);
        DB::table('tags')->insert([
            'id' => 5,
            'name' => 'dream',
        ]);
        DB::table('tags')->insert([
            'id' => 6,
            'name' => 'hariwon',
        ]);
        DB::table('tags')->insert([
            'id' => 7,
            'name' => 'jack',
        ]);
        DB::table('tags')->insert([
            'id' => 8,
            'name' => 'ducphuc',
        ]);
        DB::table('tags')->insert([
            'id' => 9,
            'name' => 'amee',
        ]);
        DB::table('tags')->insert([
            'id' => 10,
            'name' => 'sontung',
        ]);
        DB::table('tags')->insert([
            'id' => 11,
            'name' => 'erik',
        ]);
        DB::table('tags')->insert([
            'id' => 12,
            'name' => 'huongtram',
        ]);
    }
}
