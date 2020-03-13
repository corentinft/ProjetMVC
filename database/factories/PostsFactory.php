<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'object' => $faker->text,
        'text' => $faker->paragraph,
        'url_image' => $faker->url,
        'user_id' => $faker->numberBetween($min=1,$max=10),
    ];
});
