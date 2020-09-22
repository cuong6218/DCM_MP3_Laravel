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
            'category_name' => 'K-pop',
            'image' => 'images/kaIDOWQbmm2XBW4OVTAUcSzikUuy1ANVA0GUKk4j.webp',
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'category_name' => 'Youth music',
            'image' => 'images/4ERPB0jC2tcyXF3SgXVgZs9cZipK5lDNwAKCg948.jpeg',
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'category_name' => 'Trance music',
            'image' => 'images/VbTL9EJ7IOouwiC5qHBLD26LvM9NPrND4hVJKR86.jpeg',
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'category_name' => 'Soul Music',
            'image' => 'images/SjSyoSPDNNOqXL5ppdnlTgiiWyy9ewMp9LCTsP72.jpeg',
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'category_name' => 'Romantic Music',
            'image' => 'images/dLQVNoCe9esMgNbmwXOgKeles1UGgWejMEfEJfFr.jpeg',
        ]);
        DB::table('categories')->insert([
            'id' => 6,
            'category_name' => 'Hip Hop',
            'image' => 'images/TH3l4pgJ1LZVw5qZKqglhVTVuBv0wPSp3HsR4FaM.jpeg',
        ]);
        DB::table('categories')->insert([
            'id' => 7,
            'category_name' => 'Rock Music',
            'image' => 'images/M40LVe5y9UaJXYYnomdDSgSoatlV53zb2nqKIMfz.jpeg',
        ]);
    }
}
