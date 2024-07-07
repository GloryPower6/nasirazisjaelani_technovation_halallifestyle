<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Example data
        $data = [
            [
                'title' => 'Judul 1',
                'slug' => 'judul-1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Judul 2',
                'slug' => 'judul-2',
                'content' => 'Praesentium repudiandae possimus odit repellat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more data as needed
        ];

        // Insert data into the table
        DB::table('news')->insert($data);
    }
}
