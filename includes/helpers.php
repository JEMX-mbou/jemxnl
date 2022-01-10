<?php

function svg( $name ) {
  return file_get_contents('images/svg/'.$name.'.svg');
}

function snippet( string $lang, string $name, string $title, int $lines = 0, bool $showLang = false ) {
  $file = 'snippets/'.$lang.'/'.$name.'.'.$lang;

  $snippetHtml = '<div class="snippet '.($lines>0?'l-'.$lines:'').'">
    <h5 class="title">'.($showLang?'<strong>'.$lang.': </strong>':'').'[sniptitle]</h5>
    <pre class="line-numbers language-[sniplang]" data-dependencies="[sniplang]" lang="[sniplang]" name="[snipname]"><code></code><i class="bx bxs-copy copy-snippet"></i><div class="notification alert c-success">Snippet copied!</div></pre>
  </div>';

  if (file_exists($file)) {
    $snippetHtml = str_replace('[sniptitle]', $title, $snippetHtml);
    $snippetHtml = str_replace('[sniplang]', $lang, $snippetHtml);
    $snippetHtml = str_replace('[snipname]', $name, $snippetHtml);
    return $snippetHtml;
  } else {
    return '<em>File: "'.$file.'" doesn\'t exist.';
  }
}

function getTutorialInfo( string $dir, string $fileSrc ) {
  $url = substr($fileSrc, 0, strrpos($fileSrc, "."));
  $title = str_replace('-', ' ', $url);
  //$content = file_get_contents($dir.'/'.$fileSrc);

  $docHTML = new DOMDocument();
  $docHTML->loadHTMLFile($dir.'/'.$fileSrc);
  $intro = $docHTML->getElementById('intro')->textContent;

  return array('url'=>$url, 'title'=>$title, 'intro'=>$intro);//, 'content'=>$content);
}

function mastheadSnipTutImg( $name = null ) {
  if (isset($_GET['lang'])) {
    $img = 'images/'.strtolower($_GET['lang']).'.jpg';
    $title = $_GET['lang'];
  } else {
    $img = 'images/'.$name.'.jpg';
    $title = $name;
  }

  if (file_exists($img)) {
    return '<img src="'.$img.'" alt="'.$title.'">';
  }
}
