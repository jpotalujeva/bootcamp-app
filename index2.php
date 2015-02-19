<!DOCTYPE html>
<link rel='stylesheet' href='stylesheet.css' type='text/css'>

<html>
<body>
  <h1><?php echo "World, leave your message" ?></h1>

  <script src="script.js" type='text/javascript'></script>
  <form action='index1.php' method='POST'>
    <p>Name</p><input type='text' name='name'>
    <p>Message</p><textarea type='text' name='msg'></textarea><br/>
    <button type='submit' value='submit'>SEND</button></br>
    <p>Look here</p><a href='other_index.php'>BOOTCAMP</a>
    <p>Nice</p><img src='http://cs543108.vk.me/v543108859/223f/DPtPZoK9NL4.jpg' />
  </form>
  <?php

  $db = mysqli_connect("localhost","homestead","secret","bootcamp");
  if (!$db) {
    echo 'Not connected';
  }
    echo 'Connected';
  $query = "SELECT * FROM comments" or die("Error in the consult.." . mysqli_error($db));
  $result = $db->query($query);
  var_dump($result);


   ?>
  </body>
</html>
