<?php

class testRectangle extends PHPUnit_Framework_TestCase {

  public function testGetArea() {

    $rectangle = new Bootcamp\Demo\Rectangle(2, 4);
    $this->assertEquals(8, $rectangle->getArea());
  }

}
