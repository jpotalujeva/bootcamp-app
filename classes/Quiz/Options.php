<?php

namespace Bootcamp\Demo\Quiz;

class Options
{
/**
*Create a Options instance
*@param is an integer $id
*@param is boolean $isCorrect
*@param is a string $option
*/
    protected $id;
    protected $isCorrect;
    protected $option;

    public function __construct($option, $isCorrect = false)
    {
        $this->option = $option;
        $this->isCorrect = $isCorrect;
    }
    public function AnswerCount($option)
    {
        $this->option = $option;
    }
}
