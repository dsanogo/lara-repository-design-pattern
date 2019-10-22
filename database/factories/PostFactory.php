<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min=1, $max=10),
        'title' => $faker->sentence(),
        'content' => $faker->paragraphs(rand(2, 5), true)
    ];
});
