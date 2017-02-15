<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Character::class, function (Faker\Generator $faker) {
    
    // title depends upon social standing
    $social = $faker->numberBetween($min = 1, $max = 15);
    $title = '';
    if ($social > 10)
        $title = [11 => 'Knight', 12 => 'Baron', 13 => 'Marquis', 14 => 'Count', 15 => 'Duke'][$social];

    return [
        'name' => $faker->name,
        'title' => $title,
        'strength' => $faker->numberBetween($min = 1, $max = 15),
        'dexterity' => $faker->numberBetween($min = 1, $max = 15),
        'endurance' => $faker->numberBetween($min = 1, $max = 15),
        'intelligence' => $faker->numberBetween($min = 1, $max = 15),
        'education' => $faker->numberBetween($min = 1, $max = 15),
        'social' => $social,
    ];
});
