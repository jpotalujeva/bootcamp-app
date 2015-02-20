<?php

namespace Bootcamp\Demo;

class Cilinder extends Circle{
  public $height;
  public function __construct($radius, $height) {
    $this->height=$height;
    parent:: __construct($radius);
  }

  public function getArea() {
    return (2 * pi() * $this->height) + (2 * pi() * ($this->radius**2));
  }
}
