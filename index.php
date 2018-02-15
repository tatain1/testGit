<?php
function debug($array, $die = 0) {
  echo '<pre>';
  print_r($array);
  echo '</pre>';

  if ($die == 1) {
    die();
  }
}

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




$tabABC = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
                'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

$tab9000 = array();
for ($i=1; $i < 9701; $i++) {
  // $name = $i. '\''. $i;
  array_push($tab9000, $i);
}


foreach ($tabABC as $dataABC) {
  echo $dataABC. ' <input list="descrip" type="text">
        <datalist id="descrip">';
  foreach ($tab9000 as $data9000) {
    $genFuck = $data9000.'é ë'.$data9000;
    $genFuck = slugify($genFuck);
    echo '<option value="'.$data9000.'a">'.$genFuck.'</option>';
  }
  echo '</datalist><br>';
   // print_r($tab9000);
}


 ?>
