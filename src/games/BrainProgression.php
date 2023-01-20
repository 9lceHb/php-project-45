<?php

namespace BrainGames\BrainProgression;

function brainProgression()
{
    $progressionStart = rand(1, 100);
    $progressionMultiplicator = rand(-10, 10);
    $emptyPosition = rand(0, 9);
    $progressionList = [$progressionStart];
    foreach (range(1, 9) as $i) {
        $progressionList[$i] = $progressionList[$i - 1] + $progressionMultiplicator;
    }
    $correctAnswer = (string) $progressionList[$emptyPosition];
    $progressionList[$emptyPosition] = "..";
    $question = implode(' ', $progressionList);
    return [$question, $correctAnswer];
}
