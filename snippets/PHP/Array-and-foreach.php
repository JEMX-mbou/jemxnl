<?php

$array = array(
  'key1' => 'value1',
  'key2' => 'value2',
  'key3' => 'value3',
  'key4' => 'value4',
  'key5' => 'value5'
);

$output = '<ul>';

foreach ( $array as $key => $value) {
  $output .= '<li><strong>'.$key.': </strong>';
  $output .= $value.'</li>';
}

$output .= '</ul>';

echo $output;

 ?>
