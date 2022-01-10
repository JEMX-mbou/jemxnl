<?php
  $lang = $_GET['lang'];
  $dir = 'tutorials/'.$lang;

  if (!isset($_GET['file'])) {
    $output = '';

    foreach(scandir($dir) as $tutorial) {
      if ( strpos($tutorial, '.') !== 0 ) {
        $tutArray = getTutorialInfo($dir, $tutorial);
        $output .= '<div class="col-12">';
        $output .= '<div class="card link tutorial">';
        $output .= '<a href="tutorials.php?lang='.$lang.'&file='.$tutArray['url'].'">';
        $output .= '<h3><strong>'.$lang.': </strong>'.$tutArray['title'].'</h3>';
        $output .= '<p>'.$tutArray['intro'].'</p>';
        $output .= '</a>';
        $output .= '</div></div>';
      }
    }

    echo $output;
  } else {
    echo '<a href="tutorials.php?lang='.$lang.'" class="btn c-3">Terug</a>';
    $title = str_replace('-', ' ', $_GET['file']);
    echo '<h1>'.$title.'</h1>';
    echo file_get_contents($dir.'/'.$_GET['file'].'.html');
  }
 ?>
