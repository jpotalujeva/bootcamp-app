<?php
echo "Your comments";
$name = $_POST['name'];
$txt = $_POST['txt'];
chmod('tests.txt', 0644);
$file = fopen('tests.txt', 'a+');
$date = date('Y-m-d H:i:s');

$str = [$name, $txt, $date];
var_dump($str);
$json = json_encode($str) . "/r/n";
fwrite($file, $json);
var_dump($json);
fread();
