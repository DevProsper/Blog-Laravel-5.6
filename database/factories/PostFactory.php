<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'user_id'  => rand(1,30),
        'category_id'  => rand(1,20),
        'name'  => $title,
        'slug'  => str_slug($title),
        'excerpt'  => $faker->text(500),
        'body'  => $faker->text(500),
        'file'  => $faker->imageUrl($width = 200, $eight= 400),
        'status'    => $faker->randomElement(['DRAFT', 'PUBLISHED'])
    ];
});
