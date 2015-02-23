<?php

require __DIR__ . '/vendor/autoload.php';

use Bootcamp\Demo\Quiz\Options;
use Bootcamp\Demo\Quiz\Questions;
use Bootcamp\Demo\Quiz\Quiz;

$options = [];
$options[] = new Options('443');
$options[] = new Options('8', true);
$options[] = new Options('223');
$options[] = new Options('22');

$questions = [];
$questions[] = new Questions('What number?');
$questions[] = new Questions('What type?');
$questions[] = new Questions('What integer?');
$questions[] = new Questions('what?');

$quizes = [];
$quizes[] = new Quiz('my Quiz');

    foreach($quizes as $key => $quiz)
    {
        $quiz->addQuestion($questions);
    }
    foreach($questions as $key => $question)
    {
        $question->addOption($options);
    }
    // foreach($options as $key => $option)
    // {
    //     if($isCorrect = true)
    //     {
    //         echo "Correct";
    //     } else {
    //         echo "Not Correct";
    //     }
    // }



var_dump($options);
