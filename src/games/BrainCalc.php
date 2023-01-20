<?php

namespace BrainGames\BrainCalc;

function brainCalc()
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $operation = rand(1, 3);
    if ($operation === 1) {
        $question = "{$num1} + {$num2}";
        $correctAnswer = (string) ($num1 + $num2);
    } elseif ($operation === 2) {
        $question = "{$num1} - {$num2}";
        $correctAnswer = (string) ($num1 - $num2);
    } else {
        $question = "{$num1} * {$num2}";
        $correctAnswer = (string) ($num1 * $num2);
    }
    return [$question, $correctAnswer];
}
