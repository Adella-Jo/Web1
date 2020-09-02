<?php
file_put_contents('data/'.$_POST['title'], $_POST['description']);
/* 이거 하다가 머리 터지면 어떻게 하지ㅎㅎ */

header('Location: /index.php?id='.$_POST['title']);
 ?>
