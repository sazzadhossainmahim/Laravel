<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as faker;

class postTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('posts')->insert([

        $faker = Faker::create();
        DB::table('posts')->insert([
            'title' => $faker->sentence(5),
            'body' => $faker->paragraph(4)
        ]);
        // 'title' => 'First Post',
        // 'body' => 'First Post Title',
        // ]);
    }
}
