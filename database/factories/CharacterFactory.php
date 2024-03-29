<?php

use App\Cttools\Game;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Character::class, function (Faker\Generator $faker) {

    // determine sex - ISO/IEC 5218
    // NULL = 0 = not known,
    // M = 1 = male,
    // F = 2 = female,
    // X = 9 = not applicable.
    $sex = $faker->randomElement($array = [null, 'M', 'F', 'X']);

    // name and title depend on sex
    switch ($sex) {
      case 'M':
        $name = $faker->firstNameMale.' '.$faker->lastName;
        $title = $faker->titleMale;
        break;
      case 'F':
        $name = $faker->firstNameFemale.' '.$faker->lastName;
        $title = $faker->titleFemale;
        break;
      default:
        $name = $faker->lastName;
        $title = '';
    }

    // title modified if high social standing
    $social = Game::throwD6(2);

    if ($social > 10) {
        if ($sex = 'F') { //Female
            $title = [11 => 'Dame', 12 => 'Baronet', 13 => 'Marquesa', 14 => 'Countess', 15 => 'Duchess'][$social];
        } else {
            $title = [11 => 'Knight', 12 => 'Baron', 13 => 'Marquis', 14 => 'Count', 15 => 'Duke'][$social];
        }
    }

    return [
        'name' => $name,
        'title' => $title,
        'sex' => $sex,
        'strength' => $social = Game::throwD6(2),
        'dexterity' => $social = Game::throwD6(2),
        'endurance' => $social = Game::throwD6(2),
        'intelligence' => $social = Game::throwD6(2),
        'education' => $social = Game::throwD6(2),
        'social' => $social,
    ];
});
