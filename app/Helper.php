<?php
namespace App;

use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class Helper{

public static function array_loop()
{
$array = [5, 6, 7, 8, 9, 10];

// Random number of iterations from 5-10 (random)
$randomloop = Arr::random($array);

// Random name (not alphanumeric? later)
$random = Str::random($randomloop);

// Random number of iterations from 5-10 (breakdown)
$breakdownloop = Arr::random($array);

// Random name (Alphanumeric)
$breakdown = Str::random('5');
}



}