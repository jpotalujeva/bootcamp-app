<?php

class Comment {

  private $author;
  private $txt;

  public function __construct($author,$txt) {
    $this->txt = $txt;
    $this->author = $author;
    echo 'Hello<br/>';

  }
  public function getAuthor(){

    return $this->author;

  }


}
$comment = new Comment('John', 'qaz');
$comment1 = new Comment('Maggy', 'wsx');
$comment2 = new Comment('Mary', 'edc');


var_dump($comment->getAuthor());
var_dump($comment, $comment1, $comment2);
