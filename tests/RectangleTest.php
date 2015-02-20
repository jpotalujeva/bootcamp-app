<?php

use Bootcamp\Demo\Rectangle;

class RectangleTest extends PHPUnit_Framework_TestCase {

  public function testGetArea() {

    $rectangle = new Rectangle(2, 4);
    $this->assertEquals(8, $rectangle->getArea());
  }

}
