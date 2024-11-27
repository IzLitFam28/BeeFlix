<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'genre_id' => 3,
                'title' => 'Bocchi the Rock! Recap Part 2',
                'photo' =>  'bocchi.jpg',
                'publish_date' => '2024-11-15',
                'description' => 'Bocchi'
            ],
            [
                'genre_id' => 1,
                'title' => 'The Notebook',
                'photo' =>  'notebook.jpg',
                'publish_date' => '2004-6-25',
                'description' => 'The Notebook Desc'
            ],
            [
                'genre_id' => 1,
                'title' => 'Titanic',
                'photo' =>  'titanic.jpg',
                'publish_date' => '1998-1-5',
                'description' => 'Titanic Desc'
            ],
            [
                'genre_id' => 2,
                'title' => 'Avengers End Game',
                'photo' =>  'avengers.jpg',
                'publish_date' => '2019-4-24',
                'description' => 'Avengers: Endgame Desc'
            ],
            [
                'genre_id' => 2,
                'title' => 'John Wick',
                'photo' =>  'johnWick.jpg',
                'publish_date' => '2014-10-24',
                'description' => 'John Wick Desc'
            ],
            [
                'genre_id' => 1,
                'title' => 'The Fault in Our Stars',
                'photo' =>  'romance2.jpg',
                'publish_date' => '2014-6-6',
                'description' => 'The Fault in Our Stars Desc'
            ]
        ];

        DB::table('movies')->insert($datas);
    }
}
