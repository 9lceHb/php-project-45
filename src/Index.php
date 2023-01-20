<?php

namespace BrainGames\Index;

use function cli\line;
use function cli\prompt;
use function BrainGames\BrainEven\brainEven;

function game($name)
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $correctAnswerCount = 0;
    while ($correctAnswerCount < 3) {
        [$question, $correctAnswer] = brainEven();
        line("Question: %s", $question);
        $userAnswer = prompt('Your answer');
        if ($userAnswer === $correctAnswer) {
            line("Correct!");
            $correctAnswerCount += 1;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);
            break;
        }
    }
    if ($correctAnswerCount === 3) {
        line('Congratulations, %s!', $name);
    }
}
