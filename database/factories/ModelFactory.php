<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Article::class, function (Faker\Generator $faker) {
    $title = $faker->sentence();
    $dateTime = $faker->dateTimeBetween();

    return [
        'title' => $title,
        'slug' => str_slug($title),
        'short_description' => $faker->text(),
        'body' => $faker->text(2000),
        'created_at' => $dateTime,
        'updated_at' => $dateTime,
        'user_id' => factory(App\User::class)->create()->id
    ];
});
