<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'category_name' => 'Acoustic',
            'image' => 'images/fKShgDMp6wHMQlW6lHr1bGdagi7Dyke4dX03nwDl.jpeg',
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'category_name' => 'Bolero',
            'image' => 'images/fPZEs0A9auS1Ss08N3RLRu9WBxoOgeWlb0bJFQ7g.jpeg',
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'category_name' => 'Jazz',
            'image' => 'images/DyNU02K6ByMfP1Tw758EaWkhj208CtnKCWlZBYPL.jpeg',
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'category_name' => 'K-pop',
            'image' => 'images/vLYsieLnbQwSKwUuhzII9IyeZM3M9VW448wwt0F3.jpeg',
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'category_name' => 'Ballad',
            'image' => 'images/ueyshDBQnJq3Rze58v2jQo8Qz1RAy2rVIXJLPevO.jpeg',
        ]);
        DB::table('categories')->insert([
            'id' => 6,
            'category_name' => 'Rap',
            'image' => 'images/a5wENmlrocfDYtwzmpv0CYWM7XoT4y8D9G8sZu85.jpeg',
        ]);
    }
}
