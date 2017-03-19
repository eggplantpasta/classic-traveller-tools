<?php

namespace App\Cttools;

class Game
{
    public static function throwD6(int $count=2)
    {
        $sum = 0;
        for ($i = 1; $i <= $count; $i++) {
            $sum += rand(1, 6);
        }
        return $sum;
    }
}
