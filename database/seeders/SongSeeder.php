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
            'song_name' => 'Crush on You',
            'audio' => 'audios/w5yhBMJaBMepWRzYs3syByrMsijyQSm2gwoxFTG9.mp3',
            'image' => 'images/Q4komJCGNTGP11oGyQf0JWfvZqdbBMOtYFzdON76.jpeg',
            'author' => 'Đan Trường',
            'views' => '1',
            'desc' => '',
            'singer_id' => 12,
            'album_id' => 8,
            'category_id' => 1,
        ]);
        DB::table('songs')->insert([
            'id' => 2,
            'song_name' => 'Năm ấy',
            'audio' => 'audios/sa51TtdtXfQp73hRX1QuixicFZMxgv5JdHUvsPoI.mp3',
            'image' => 'images/TD6OVvD5lBvxwtwszuBzZbr4EO8j16cczWQSnrk2.jpeg',
            'author' => 'Phạm Duy',
            'views' => '1',
            'desc' => '',
            'singer_id' => 4,
            'album_id' => 4,
            'category_id' => 5,
        ]);
        DB::table('songs')->insert([
            'id' => 3,
            'song_name' => 'Cũng đành thôi',
            'audio' => 'audios/kuU00CBUwAHRrZzOLQ3IHOjSMgS3ZW5euZmHwA5s.mp3',
            'image' => 'images/cVdiqggvekmvpLMF93g86YV41sf7EeDEHVbAQbJ1.jpeg',
            'author' => 'Trịnh Công Sơn',
            'views' => '1',
            'desc' => '',
            'singer_id' => 4,
            'album_id' => 4,
            'category_id' => 3,
        ]);
        DB::table('songs')->insert([
            'id' => 4,
            'song_name' => 'Nhà anh ở đâu thế',
            'audio' => 'audios/W6YzuIOoXDzEoHixhm9LJnGPqpunWkMFUHbKYNSl.mp3',
            'image' => 'images/cJrf4Y0QKivnWAJeBYxOqz1IPmhh9Ln6ODEctTUq.jpeg',
            'author' => 'Đỗ Hồng Quân',
            'views' => '1',
            'desc' => '',
            'singer_id' => 2,
            'album_id' => 1,
            'category_id' => 4,
        ]);
        DB::table('songs')->insert([
            'id' => 5,
            'song_name' => 'Vì anh',
            'audio' => 'audios/QOrhHCmzQenn1CGalsCuSs8rQHmEajlBPpe3PMZN.mp3',
            'image' => 'images/bbGwQoHsIC3MuRuKbHREO58IVX4c5dxrpUm3SCwf.jpeg',
            'author' => 'Nguyễn Văn Đông',
            'views' => '1',
            'desc' => '',
            'singer_id' => 16,
            'album_id' => 11,
            'category_id' => 1,
        ]);
        DB::table('songs')->insert([
            'id' => 6,
            'song_name' => 'Người từng yêu anh rất sâu đậm',
            'audio' => 'audios/zhcAFtDBTkB83Uze8w0hYGRcQrIiyMHDIJa5yb0j.mp3',
            'image' => 'images/Ceixw2uCsHcoA5QpwzEXDRBiwlnS1c1IYEuPbFRz.jpeg',
            'author' => 'Đan Trường',
            'views' => '1',
            'desc' => '',
            'singer_id' => 16,
            'album_id' => 11,
            'category_id' => 3,
        ]);

    }
}
