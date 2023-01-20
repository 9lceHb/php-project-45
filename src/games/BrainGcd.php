<?php

namespace BrainGames\BrainGcd;

function getGcd($num1, $num2)
{
    return $num1 % $num2 === 0 ? $num2 : getGcd($num2, $num1);
}

function brainGcd()
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $question = "{$num1} {$num2}";
    $correctAnswer = getGcd($num1, $num2);
    return [$question, $correctAnswer];
}
