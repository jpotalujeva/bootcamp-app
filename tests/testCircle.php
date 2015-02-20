<?php

class testCircle extends PHPUnit_Framework_TestCase {

  public function testGetArea() {

    $circle = new Bootcamp\Demo\Circle(4);
    $this->assertEquals(50.26548245743669, $circle->getArea());
  }

}
