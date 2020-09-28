<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'id' => 1,
            'album_name' => 'dreAMEE',
            'image' => 'images/7anI8QLe2mIBe5pdyYhucpJmtFSPhpMnfJfVx1KA.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 2,
            'album_name' => 'Em gì ơi (Single)',
            'image' => 'images/IkJ7sW4noKRe8L8tyeix3Vg7wczA56kxcUeyw5Mv.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 3,
            'album_name' => 'Em ơi lên phố (Single)',
            'image' => 'images/Yo90bvHnQWObITedaywdOsZFiDeQTLFZSr2xfqJC.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 4,
            'album_name' => 'Hơn cả yêu (Single)',
            'image' => 'images/9R6dGQQNEyv8ESw3XJU4TyIo4yRhL1VqCBntvb6R.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 5,
            'album_name' => 'Lạc Trôi (Single)',
            'image' => 'images/53CmUNYuC9RXWpCozQJZfUGrkpTNTBXic6YeclbV.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 6,
            'album_name' => 'LoveNote (Single)',
            'image' => 'images/qn9brQ4GSww54eCupJctqWbxFooxZ9nLKGIqWr3A.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 7,
            'album_name' => 'Có tất cả nhưng thiếu anh (Single)',
            'image' => 'images/5xpds7Aop9IQr3P2PpUnSouy59xxtnj8B9SyiTz4.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 8,
            'album_name' => 'Chẳng thể nói ra (Single)',
            'image' => 'images/vRBmGl4ouwCyg3Bl0KAQHUdkwQe9UP0ahCsctx4u.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 9,
            'album_name' => 'Chàng trai năm ấy OST',
            'image' => 'images/xT2gNCLHQgKNXaycVrPaybL9CEVSOQBMN7P9Gd55.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 10,
            'album_name' => 'BlackPink Arena',
            'image' => 'images/G3sgtQSydn4ZkeBa1dmE4ihjGoSTpxdSb2cblqlx.jpeg',
        ]);
    }
}
