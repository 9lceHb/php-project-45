<?php

namespace BrainGames\BrainGcd;

function getGcd(int $num1, int $num2)
{
    return $num1 % $num2 === 0 ? $num2 : getGcd($num2, $num1 % $num2);
}

function brainGcd()
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $question = "{$num1} {$num2}";
    $correctAnswer = (string) getGcd($num1, $num2);
    return [$question, $correctAnswer];
}
