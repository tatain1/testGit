<?php

function slugify($text)
{
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  $text = preg_replace('~[^-\w]+~', '', $text);
  $text = trim($text, '-');
  $text = preg_replace('~-+~', '-', $text);
  $text = strtolower($text);
  if (empty($text)) {
    return 'n-a';
  }
  return $text;
}

$tab9000 = array();
for ($i=1; $i < 91; $i++) {
  array_push($tab9000, $i);
}

// Manque le like...

$options = '';

  foreach ($tab9000 as $data9000) {
    $genFuck = $data9000.'é-é-é'.$data9000;
    $genFuck = slugify($genFuck);
    // echo '<option value="'.$data9000.'a">'.$genFuck.'</option>';
    $options = $options. '<option value="'.$genFuck.'">'.$genFuck.'</option>';

  }
  // echo '</datalist><br>';
   // print_r($tab9000);
echo $options;


?>
