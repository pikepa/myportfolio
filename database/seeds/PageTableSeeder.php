<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'name' => "About Me",
            'slug' => "about-me",
            'title' => 'Hellen Dutch',
        ]);    
    }
}