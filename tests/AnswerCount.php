<?php

use Bootcamp\Demo\Options;

class answerTest extends PHPUnit_Framework_TestCase {

  public function testAnswerCount() {

    $option = new Options();
    $count = count($options);
    $this->assertEquals(4, $option->AnswerCount());
  }

}
