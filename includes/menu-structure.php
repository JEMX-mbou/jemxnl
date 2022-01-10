<?php

function generate_menu() {

  $menu = array(
    'Home' => 'index.php',
    'About me' => 'aboutme.php',
    'Tutorials' => array(
      'url' => 'tutorials.php',
      'subs' => array(
        'HTML' => 'tutorials.php?lang=HTML',
        'CSS' => 'tutorials.php?lang=CSS',
        'JavaScript' => 'tutorials.php?lang=JS',
        'PHP' => 'tutorials.php?lang=PHP',
        'Git' => 'tutorials.php?lang=Git'
      )
    ),
    'Snippets' => array(
      'url' => 'snippets.php',
      'subs' => array(
        'HTML' => '#',
        'CSS' => '#',
        'SCSS' => '#',
        'JavaScript' => '#',
        'PHP' => '#',
      )
    ),
    'FAQ' => 'faq.php'
  );

  $structureStr = '<ul>';

  foreach ($menu as $label => $value) {

    if (is_string($value)) {

      $structureStr .= '<li><a href="'.$value.'">'.$label.'</a></li>';

    } else {

      $structureStr .= '<li><a href="'.$value['url'].'">'.$label.'</a>';
      $structureStr .= '<ul>';

      foreach ($value['subs'] as $subLabel => $subUrl) {
        $structureStr .= '<li><a href="'.$subUrl.'">'.$subLabel.'</a></li>';
      }

      $structureStr .= '</ul>';
      $structureStr .= '</li>';

    }
  }

  $structureStr .= '</ul>';

  return $structureStr;
}
