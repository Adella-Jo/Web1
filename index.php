<?php
require_once('lib/print.php');
require_once('view/top.php');
 ?>

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


<?php
require('view/bottom.php');
 ?>
