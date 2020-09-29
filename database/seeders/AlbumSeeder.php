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
            'album_name' => 'Hơn cả yêu (Single)',
            'image' => 'images/9R6dGQQNEyv8ESw3XJU4TyIo4yRhL1VqCBntvb6R.jpeg',
        ]);

        DB::table('albums')->insert([
            'id' => 3,
            'album_name' => 'Có tất cả nhưng thiếu anh (Single)',
            'image' => 'images/5xpds7Aop9IQr3P2PpUnSouy59xxtnj8B9SyiTz4.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 4,
            'album_name' => 'Chẳng thể nói ra (Single)',
            'image' => 'images/vRBmGl4ouwCyg3Bl0KAQHUdkwQe9UP0ahCsctx4u.jpeg',
        ]);

        DB::table('albums')->insert([
            'id' => 5,
            'album_name' => 'BlackPink Arena',
            'image' => 'images/G3sgtQSydn4ZkeBa1dmE4ihjGoSTpxdSb2cblqlx.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 6,
            'album_name' => 'Sẽ có người cần anh (Single)',
            'image' => 'images/CUlqpjsHllOC0lUblBYOyfUITLbeDEJDZFtarE7n.jpeg',
        ]);
    }
}
