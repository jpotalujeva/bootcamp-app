<?php

require 'vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hello/{name}', function ($name) use ($app) {
  return 'Hello '.$app->escape($name);
});

$app->get('/rec', function () use ($app) {
  $rec = new \Bootcamp\Demo\Rectangle(3, 8);
  return 'afdwc '. $rec->getArea();
});

$app->run();
