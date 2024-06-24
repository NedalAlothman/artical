<?php

namespace Database\Seeders;
use App\Models\post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // post::factory()->create([
        //     'title' => 'Title1',
        //     'body' => 'body 1',

       // ]
    //);
    post::factory(20)->create();
    }
}
