<?php
$tabABC = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
                'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

foreach ($tabABC as $dataABC) {
  echo $dataABC. '<br>';
}

$tab9000 = array();
for ($i=0; $i < 10; $i++) {
  array_push($tab9000, $i);
}

echo '<pre>';
print_r($tab9000);
echo '</pre>';

 ?>
