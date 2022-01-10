<?php

if (isset($_GET['lang']) && isset($_GET['name']) && isset($_GET['encode'])) {
  $lang = $_GET['lang'];
  $name = $_GET['name'];
  $encode = ($_GET['encode'] == 'true' ? true : false);

  $file = $lang.'/'.$name.'.'.$lang;

  if (file_exists($file)) {
    $contents = file_get_contents($file);

    if ($encode) echo htmlspecialchars($contents);
    else echo $contents;
  }
}

 ?>
