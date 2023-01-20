<?php

namespace BrainGames\BrainPrime;

function isPrime($num)
{
    if ($num % 2 === 0) {
        return false;
    }
    foreach (range(3, sqrt($num)) as $i) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function brainPrime()
{
    $num = rand(1, 1000);
    $question = "{$num}";
    $correctAnswer = isPrime($num) ? 'yes' : 'no';
    return [$question, $correctAnswer];
}
