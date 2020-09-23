<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'id' => 1,
            'song_name' => 'Vì anh',
            'audio' => 'audios/GnX062RZ4WJGFHDWBuB0Z67tcJi3Uxj6SVeRyAY9.mp3',
            'image' => 'images/nmMKWiFrTjsiZxzAipfbE723IukXZxYXPW4j8xdO.jpeg',
            'author' => 'Đan Trường',
            'views' => '1',
            'singer_id' => 4,
            'album_id' => 7,
            'category_id' => 5,
        ]);
        DB::table('songs')->insert([
            'id' => 2,
            'song_name' => 'Sóng Gió',
            'audio' => 'audios/ohOifbSMnnjI5UyCGpeQzAfc9vu23YOhfvauWS8a.mp3',
            'image' => 'images/uSIBpz1ueg4fqvnpAtdqsMQMdRgVspq4gANdGwkl.jpeg',
            'author' => 'Đặng Thế Phong',
            'views' => '1',
            'singer_id' => 2,
            'album_id' => 10,
            'category_id' => 2,
        ]);
        DB::table('songs')->insert([
            'id' => 3,
            'song_name' => 'Người từng yêu anh',
            'audio' => 'audios/gntsXMlzg44SJpf8iHegI5idISllE7noN9staX5r.mp3',
            'image' => 'images/VLb0itbHJhCCkjEvZn5vBjVt7gMe42y0en6Z9Kg2.png',
            'author' => 'Đỗ Nhuận',
            'views' => '1',
            'singer_id' => 4,
            'album_id' => 7,
            'category_id' => 4,
        ]);
        DB::table('songs')->insert([
            'id' => 4,
            'song_name' => 'Năm ấy',
            'audio' => 'audios/xQ61lvVrVgCmMYFcC3IAnvLlei1NYJv9pNZGsT4M.mp3',
            'image' => 'images/pPc0JNuM7FTHj6rbxd5qVKjExkptcfVQbz3HRwDM.jpeg',
            'author' => 'Đức Quỳnh',
            'views' => '1',
            'singer_id' => 6,
            'album_id' => 1,
            'category_id' => 3,
        ]);
        DB::table('songs')->insert([
            'id' => 5,
            'song_name' => 'Mình chia tay đi',
            'audio' => 'audios/M63uO2i2sBzU3bg69yq0aWjRLZK0GxAPGSOb9nZ9.mp3',
            'image' => 'images/APbs4Frltmx0kJieLH2jE5t6fnkdxtHeRe1hebdn.jpeg',
            'author' => 'Hiếu Nghĩa',
            'views' => '1',
            'singer_id' => 7,
            'album_id' => 5,
            'category_id' => 1,
        ]);
        DB::table('songs')->insert([
            'id' => 6,
            'song_name' => 'Mẹ ơi',
            'audio' => 'audios/ttpHCAlj0yHmHAbBsKSKhPwRlgx5gg64vME2vzrq.mp3',
            'image' => 'images/ug48A9ecGBUIb2zGguNomLs5fqaMIBqi2LCIrd53.jpeg',
            'author' => 'Hoàng Quý',
            'views' => '1',
            'singer_id' => 2,
            'album_id' => 4,
            'category_id' => 7,
        ]);
        DB::table('songs')->insert([
            'id' => 7,
            'song_name' => 'Màu nước mắt',
            'audio' => 'audios/sGTMWNEJ9A7ppDtFgK86AhWIeFomiF5wS6JOz0qa.mp3',
            'image' => 'images/UjRbdGK5RLOrfNgeNdoSjFNULEqopgKEln4SWYX0.jpeg',
            'author' => 'Hoàng Quý',
            'views' => '1',
            'singer_id' => 7,
            'album_id' => 1,
            'category_id' => 5,
        ]);
        DB::table('songs')->insert([
            'id' => 8,
            'song_name' => 'Là một thằng con trai',
            'audio' => 'audios/dpSIudcTvZHyMLf82QRft9mq52tgwOm4Ury8aIQT.mp3',
            'image' => 'images/2TA3M9gRpyUdzD4UJRIkYka3Wn3ckFcwjWwGTtpW.jpeg',
            'author' => 'Đan Trường',
            'views' => '1',
            'singer_id' => 2,
            'album_id' => 2,
            'category_id' => 7,
        ]);
        DB::table('songs')->insert([
            'id' => 9,
            'song_name' => 'Kill this love',
            'audio' => 'audios/ZHfw8F9vxh8k3iO4veY1kPRXUeYpbP303fGWjd3R.mp3',
            'image' => 'images/tqy13YuC9bXDpOaVkjGl84DzEPPoybasmYUhHU1P.jpeg',
            'author' => 'Đan Trường',
            'views' => '1',
            'singer_id' => 1,
            'album_id' => 6,
            'category_id' => 1,
        ]);
        DB::table('songs')->insert([
            'id' => 10,
            'song_name' => 'Hạ nhớ',
            'audio' => 'audios/12NQ5ckQmvB76jJCTNCLTBqPtoDMPm16g0VtxOPv.mp3',
            'image' => 'images/zDk3aNHspB7JeMO2nA3fDSYfgC9cfE9Q2idvEyZy.jpeg',
            'author' => 'Hoàng Trọng',
            'views' => '1',
            'singer_id' => 2,
            'album_id' => 10,
            'category_id' => 4,
        ]);
        DB::table('songs')->insert([
            'id' => 11,
            'song_name' => 'Hai thế giới giấc mơ',
            'audio' => 'audios/CMWoBlUMYloBFXVtToVznvkANC4wb0Qo3dp3IXxW.mp3',
            'image' => 'images/lkCIhkRpo5OKImktINM3jG0JPrmoGyX0F4N4Q2Zo.jpeg',
            'author' => 'Hoàng Trọng',
            'views' => '1',
            'singer_id' => 4,
            'album_id' => 8,
            'category_id' => 2,
        ]);
        DB::table('songs')->insert([
            'id' => 12,
            'song_name' => 'Em không sai, chúng ta sai',
            'audio' => 'audios/eBYH0yczjrjr5SvkPvzjyx2d37fksODop2yOWcDU.mp3',
            'image' => 'images/tCsrNmQINOSn1yyAj3VksHr8nt53J8EEkWLlMv98.jpeg',
            'author' => 'Đan Trường',
            'views' => '1',
            'singer_id' => 7,
            'album_id' => 2,
            'category_id' => 3,
        ]);

    }
}
