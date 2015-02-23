<?php

class DP
{
    public static $instance = 'cool';
    
    public static function getInstance()
    {
        return self::$instance;
    }

}

var_dump(self::$instance);
