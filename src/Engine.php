<?php

namespace BrainGames\Index;

use function cli\line;
use function cli\prompt;

function defineGameLogic($game)
{
    if ($game === 'calc') {
        $text = 'What is the result of the expression?';
        $gameLogic = "BrainGames\BrainCalc\brainCalc";
    } elseif ($game === 'even') {
        $text = 'Answer "yes" if the number is even, otherwise answer "no".';
        $gameLogic = "BrainGames\BrainEven\brainEven";
    }
    return [$text, $gameLogic];
}

function game($name, $game)
{
    [$text, $gameLogic] = defineGameLogic($game);
    line($text);
    $correctAnswerCount = 0;
    while ($correctAnswerCount < 3) {
        [$question, $correctAnswer] = $gameLogic();
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
