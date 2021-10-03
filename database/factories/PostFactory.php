<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=> $faker->name,
        'description'=> $faker->paragraph,
        'content'=> $faker->paragraph,
        'image'=> 'img/Logic.jpg',
        'published_at' => now(),
        'category_id' => rand(1,10),
    ];
});
