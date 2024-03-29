<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min=1, $max=10),
        'post_id' => $faker->numberBetween($min=1, $max=50),
        'content' => $faker->paragraphs(rand(2,3), true)
    ];
});
