<?php

namespace Bootcamp\Demo\Quiz;

class Quiz
{
/**
*Create a Quiz instance
*@param is a string $name
*@param is an integer $id
*
**/
    protected $name;
    protected $id;

    public function addQuestion($question)
    {
        $this->question = $question;
    }
}
