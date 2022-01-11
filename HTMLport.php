<?php

//
// foreach(getMenuStructure() as $label => $value) {
//   getPageContent($value);exit;
// }

$dir = __DIR__;

foreach (scandir($dir) as $PHPfile) {
  //var_dump($file); continue;
  if (strpos($PHPfile, '.php') !== false && $PHPfile != 'HTMLport.php') {
    $html = getPageOutput($PHPfile);
    $html = formatHtml($html);
    $fileName = substr($PHPfile, 0, strrpos($PHPfile, ".")).'.html';

    writeNewFile($fileName, $html);
  }
}
//
// function getPageContent( $url = 'index.php') {
//   $cUrl = 'http://jemx.local.nl:81/'.$url;
//   var_dump($cUrl);
//   $ch = curl_init();
//
//   // set URL and other appropriate options
//   curl_setopt($ch, CURLOPT_URL, $cUrl);
//   curl_setopt($ch, CURLOPT_HEADER, 0);
//   curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//
//   // grab URL and pass it to the browser
//   $content = curl_exec($ch);
//   if(curl_error($ch)) {
//     echo 'ow nee';
//     var_dump(curl_error($ch));
//   }
//   var_dump($content);
//   // close cURL resource, and free up system resources
//   curl_close($ch);
//   exit;
// }

function getPageOutput( $src ) {
  ob_start();

  include $src;

  $output = ob_get_clean();

  ob_flush();

  return $output;
}

function formatHtml( $content ) {
  require_once 'includes/menu-structure.php';
  $menuStructure = getMenuStructure();

  foreach($menuStructure['Tutorials']['subs'] as $label => $url) {
    $content = str_replace($url, '#', $content);
  }

  foreach($menuStructure['Snippets']['subs'] as $label => $url) {
    $content = str_replace($url, '#', $content);
  }

  $content = str_replace('.php"', '.html"', $content);

  return $content;
}

function writeNewFile( $fileName, $content ) {
  $newFile = fopen($fileName, 'w');
  fwrite($newFile, $content);
  fclose($newFile);
}
