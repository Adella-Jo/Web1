<?php
function print_title(){
  if(isset($_GET['id'])) {
    echo $_GET['id'];
  } else {
    echo "Welcome";
  }
}
function print_description(){
  if(isset($_GET['id'])) {
    echo file_get_contents("data/".$_GET['id']);
  } else {
    echo "Hello, PHP";
  }
}
function print_list(){
  $list = scandir('./data');
  $i = 0;
  while($i < count($list)){
    if($list[$i] != '.') {
      if($list[$i] != '..') {

    echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n"; } }
    $i = $i + 1;

  }
}
 ?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
        print_title();

       ?>


    </title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php

      print_list();

        /*
        echo "<li>$list[0]</li>\n";
        echo "<li>$list[1]</li>\n";
        echo "<li>$list[2]</li>\n";
        echo "<li>$list[3]</li>\n";
        echo "<li>$list[4]</li>\n";
        echo "<li>$list[5]</li>\n";
        */

       ?>
    </ol>
    <a href="create.php">create</a>
    <?php
      if(isset($_GET['id'])) { ?>
    <a href="update.php?id=<?=$_GET['id'] ?>">update</a>
    <a href="delete_process.php?id=<?=$_GET['id'] ?>">delete</a>
    <form action="delete_process.php" method="psot">
      <input type="hidden" name="id" value="<?=$GET['id']?>">
      <input type="submit" value-="delete">

  <?php  }  ?>


    <h2>
      <?php
        print_title();
      ?>
    </h2>

    <?php
      print_description();
     ?>


  </body>
</html>
