<?php

namespace Bootcamp\Demo\Quiz;

class Questions
{
/**
*Create Questions instance
*@param is a string $id
*@param is a string for $title
*@param is a integer for $type
*/
    protected $id;
    protected $title;
    protected $type;

    public function __construct($title)
    {
        $this->title = $title;
    }
    public function addOption($options)
    {
        $this->options = $options;
    }
}
