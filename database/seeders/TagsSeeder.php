<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            ['name' => 'Pria', 'slug' => 'pria'],
            ['name' => 'Wanita', 'slug' => 'wanita'],
            ['name' => 'Anak-Anak', 'slug' => 'anak-anak'],
        ];

        foreach ($tags as $tag) {
            DB::table('tags')->insert($tag);
        }
    }
}
