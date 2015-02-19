<?php

namespace Bootcamp\Demo;

class Rectangle extends Shape {
  public $width;
  public $height;
  public function __construct($width, $height){
    $this->width = $width;
    $this->height = $height;
  }
  public function getArea() {
    return $this->width * $this->height;
    }


}
