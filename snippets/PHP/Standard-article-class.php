<?php

class Article {

  public $title, $content, $author;

  public function __construct( string $title, string $content, string $author )
  {
    $this->title = $title;
    $this->content = $content;
    $this->author = $author;
  }

  public function html()
  {
    $output = '<article>';
    $output .= '<h1>'.$this->title.'</h1>';
    $output .= '<span>Written by: '.$this->author.'</span>';
    $output .= '<div class="content">'.$this->content.'</div>';
    $output .= '</article>';
  }
}

$title = 'Lorem Ipsum';
$content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
$author = 'Jesse Malotaux';

$article = new Article($title, $content, $author);
