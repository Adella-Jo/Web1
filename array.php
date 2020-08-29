<!doctype html>
<html>
  <title>Array</title>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Array></h1>
      <?php
        $myname = array('조', '은', '영', '짱');
        echo $myname[2].'<br>';
        echo $myname[0].'<br>';
        echo count ($myname).'<br>';
        var_dump(count($myname));
        array_push($myname, '최고');
        var_dump($myname);
        echo '바보';
      ?>

  </body>
</html>
