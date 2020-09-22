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
            'album_name' => 'Edin Vupros',
            'image' => 'images/lGlFOhn9sOPQ9SLJ8j6ve6V6oHFk4MiuwbLoJAHL.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 2,
            'album_name' => 'Bez Vaprosi',
            'image' => 'images/Jm7BrQMl0elBGtfzkkPq4RgMpZYjhf9s46SXTCDm.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 3,
            'album_name' => 'Missing you',
            'image' => 'images/mDUMreJK6nauPwCPmUb3Ss89YBGHvU8Bqp6fkUb7.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 4,
            'album_name' => 'Future Hils',
            'image' => 'images/8ZQ76BiSiLLTgvqzVqYu6fEwhTglSRFa2ed5bUwp.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 5,
            'album_name' => 'BlackPink in Your Area',
            'image' => 'images/fVDKcuDDjHdzG4eSO206SLZi886V1hABqNR0srIb.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 6,
            'album_name' => 'Người từng yêu anh',
            'image' => 'images/jcuCB8Th7JzsxkPY7P8P4frOkNfZ63u6WuS7SM2M.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 7,
            'album_name' => 'Ngốc',
            'image' => 'images/vgDtYcyG5NMW4sVR2xILSWKFaS17nIVUd53XzW8H.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 8,
            'album_name' => 'Hơn cả yêu',
            'image' => 'images/SVG0CJ9oIfv667yfxapRgBKJ8IpD18oWjdlkblXk.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 9,
            'album_name' => 'Như phút ban đầu',
            'image' => 'images/vibIcaPxYLO0DQss7TLCO1P3qWG0NGiscampNlVa.jpeg',
        ]);
        DB::table('albums')->insert([
            'id' => 10,
            'album_name' => 'Việt Nam ơi',
            'image' => 'images/WaCkMD7tkvvZoUoyVSviRtlNkLYjI5QqNOGasDlS.jpeg',
        ]);
    }
}
