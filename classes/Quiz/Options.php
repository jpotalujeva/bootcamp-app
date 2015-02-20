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

    public function __construct($isCorrect = 'false')
    {
        $this->isCorrect = $isCorrect;
    }
}
