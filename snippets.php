<?php include 'includes/helpers.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>JEMX | Snippets</title>
    <?php include 'includes/meta-links.php'; ?>
  </head>
  <body class="">
    <!-- start navbar -->
    <?php include 'includes/menu.php' ?>
    <!-- end navbar -->

    <div class="masthead h-25">
      <?=mastheadSnipTutImg('snippets')?>
      <div class="content bg-c-3">
        <h2 class="txt-dark"><?=(isset($_GET['lang']) ? $_GET['lang'] : 'Snippets')?></h2>
      </div>
    </div>
    <?php
      $snipDir = scandir('snippets');
      $output = '';
      $cI = 1;
      foreach($snipDir as $lang) {
        if (strpos($lang, '.') === false ) {

          $output .= '<section class="bg-c-'.$cI.'">';
          $output .= '<div class="row">';
          $output .= '<div class="col-12">';
          $output .= '<h2 class="mt-0 mb-2 txt-dark">'.$lang.'</h2>';
          if ($cI < 5) $cI++;
          else $cI = 1;
          $langDir = scandir('snippets/'.$lang);

          foreach($langDir as $file) {
            if ( strpos($file, '.') !== 0 ) {
              $name = substr($file, 0, strrpos($file, "."));
              $title = str_replace('-', ' ', $name);
              $output .= snippet(strtolower($lang), $name, $title);
            }
          }

          $output .= '</section>';
        }
      }

      echo $output;

    ?>

    <!-- start footer -->
    <?php include 'includes/footer.php' ?>
    <!-- end footer -->
    <!-- start scripts and links -->
    <?php include 'includes/scripts-links.php' ?>
    <!-- end scripts and links -->
  </body>
</html>
