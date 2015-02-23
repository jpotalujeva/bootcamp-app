<?php

require 'vendor/autoload.php';

$app = new Silex\Application();
use Bootcamp\Demo\Storage\FileStorage;
use Bootcamp\Demo\Storage\Controller;

$app->get('/hello/{name}', function ($name) use ($app) {
  return 'Hello '.$app->escape($name);
});

$app->get('/rec', function () use ($app) {
  $rec = new \Bootcamp\Demo\Rectangle(3, 8);
  return 'afdwc '. $rec->getArea();
});

$app->get('/', function () use ($app){

    $s = new FileStorage();

    $c = new Controller($s);

    $c->doSomething();

    return true;
});

$app->get('/', function () use ($app){

    $s = new FileStorage();

    $c = new Controller($s);

    $c->doSomething();

    return true;

});

$app->run();
