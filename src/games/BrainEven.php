<?php

namespace BrainGames\BrainEven;

function brainEven()
{
    $question = rand(1, 100);
    $correctAnswer = $question % 2 === 0 ? 'yes' : 'no';
    return [$question, $correctAnswer];
}
