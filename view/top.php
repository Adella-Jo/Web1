<?php
require_once('lib/print.php');
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
