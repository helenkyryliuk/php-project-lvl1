<?php

namespace BrainGames\Prime;

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
        $temp = $num - 1;
    for ($i = $temp; $i > 1; $i -= 1) {
        if ($num % $i === 0) {
                return false;
        }
    }
    return true;
}
$description = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function prime()
{
    $result = [];
    for ($i = 0; $i < 3; $i += 1) {
        $randomNumber = rand(1, 99);
        $correctAnswer = isPrime($randomNumber) ? 'yes' : 'no';
        $item = [$randomNumber, $correctAnswer];
        $result[] = $item;
    }
    return [$description, $result];
}
