<?php

use Bootcamp\Demo\Quiz\Quiz;

class QuizTest extends PHPUnit_Framework_TestCase
{
    public function testAddQuestion()
    {
        $quiz = new Quiz();
        $this->assertEquals(null,$quiz->addQuestion('WTF?'));
    }
}
