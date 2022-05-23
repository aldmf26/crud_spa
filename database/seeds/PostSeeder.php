<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Post;
use Illuminate\Support\Str;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        foreach(range(1,7000) as $i) {
            Post::create([
                'title' => Str::random(5),
                'content' => Str::random(20),
            ]); 
        }
    }
}
