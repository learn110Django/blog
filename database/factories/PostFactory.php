<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    

    $title = $this->faker->sentence;
    return [
        'title' => $title,
        'body' => implode(",",$this->faker->sentences),
        'status' => rand(0,1),
        // 'tag' => $this->faker->title,
        // 'category' => $this->faker->title,
        'slug' => str_replace(" ","-", $title)
    ];
});
