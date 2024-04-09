<?php 
// $elems=array(2,11,9,8,-1,5);

$elems=array(5,22,8,14,-5,6,60);

print_r($elems);

$max = 0;
$min = 9999;

// CALCULA MAXIMS
foreach($elems as $element){ // Crida cada Element de l'Array elems (els números...)
  echo("element actual: $element <br>");
  echo("<BR>");
  if ($max < $element) {
    echo ("$element és més gran que $max !!!! <br>");
    $max = $element;
  }
  else  {
    echo ("$element NO és més gran que $max !!!! <br>");   
  } 
}


// CALCULA MMÍNIMS
foreach($elems as $element){ // Crida cada Element de l'Array elems (els números...)
    echo("element actual: $element <br>");
    echo("<BR>");
    if ($min > $element) {
      echo ("$element és més petit que $min !!!! <br>");
      $min = $element;
    }
    else  {
      echo ("$element NO és més petit que $min !!!! <br>");   
    }
}

echo("El màxim és".$max); // Ensenya Número MÀXIM
echo("El mínim és".$min); // Ensenya Número MÍNIM
?>