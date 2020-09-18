<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SingerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('singers')->insert([
            'singer_name' => 'Lindsay',
            'image' => 'https://images.unsplash.com/photo-1517230878791-4d28214057c2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80',
            'description' => 'Cool',
        ]);
        DB::table('singers')->insert([
            'singer_name' => 'Kenny',
            'image' => 'https://cdn.cnn.com/cnnnext/dam/assets/200321051959-03-kenny-rogers-file-full-169.jpg',
            'description' => 'Best',
        ]);
        DB::table('singers')->insert([
            'singer_name' => 'Pink',
            'image' => 'https://vignette.wikia.nocookie.net/spongebob/images/e/ef/P%21nk.jpg/revision/latest?cb=20151126014152',
            'description' => 'Nice',
        ]);
    }
}
