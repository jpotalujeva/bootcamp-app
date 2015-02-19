<?php
if (isset($_POST['name'])) {
 echo $_POST['name'];
}
if (isset($_POST['msg'])) {
  echo $_POST['msg'];
}
var_dump($_POST);
$name = $_POST['name'];
$msg = $_POST['msg'];
$str = $name . $msg;
$e = explode("/", $str);
/*while ($i<10){
$i=$i+2;
echo $i;
}*/
