<?php

use Bootcamp\Demo\Circle;

class CircleTest extends PHPUnit_Framework_TestCase {

  public function testGetArea() {

    $circle = new Circle(4);
    $this->assertEquals(50.26548245743669, $circle->getArea());
  }

}
