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
for ($i=1; $i < 91; $i++) {
  // $name = $i. '\''. $i;
  array_push($tab9000, $i);
}


echo '<!DOCTYPE html>';
echo '<html lang="fr">';
    echo '<head>';
        echo '<meta charset="UTF-8">';
        echo '<title>Formulaire</title>';

      /**********  jquery *********/
        echo '<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>';
        echo '<script type="text/javascript" src="test.js"></script>';
    echo '</head>';
    echo '<body>';
        echo '<form method="POST" action="form.php">';
            echo '<table>';
                echo '<tr>';
                    echo '<td>Cle</td>';
                    echo '<td>Libelle1</td>';
                    echo '<td>Action</td>';
                echo '</tr>';

                $i = 0;
                foreach ($tabABC as $keyABC => $dataABC)
                {
                    echo '<tr>';
                        echo '<td>'.$keyABC.'</td>';
                        echo '<td>'.$dataABC.'</td>';
                        echo '<td>';
                            echo '<input id="'.$i.'" class="chgtcle" list="'.$i.'_xx" type="text">';
                            // l'attribut multiple ne fonctionne qu'avec type="email" ou "file"
                            echo '<datalist id="'.$i.'_xx">';
                            echo '</datalist>';
                        echo '</td>';
                    echo '</tr>';
                    $i++;
                }
            echo '</table>';
            //echo '<input type="submit" name="submit" value="Envoyer">';
        echo '</form>';
    echo '</body>';
echo '</html>';
?>
