<?php 
// $elems=array(2,11,9,8,-1,5);

$elems=array(5,22,8,14,-5,6,60);
print_r($elems);

// VARIABLES definides:
$max = 0; 
$min = 9999;
$total = 0; // <<<<< PENDENT FER! 

$suma = 0+$elements; // PROVA ???

foreach($elems as $element){ // Crida cada Element de l'Array elems (els números...)
  echo("element actual: $element <br>");
  echo("<BR>");

  if ($max < $element) {  // CALCULA MAXIMS
    echo ("$element és més gran que $max !!!! <br>");
    $max = $element;
  }
  else  {
    echo ("$element NO és més gran que $max !!!! <br>");   
  } 

  if ($min > $element) { // CALCULA MMÍNIMS
    echo ("$element és més petit que $min !!!! <br>");
    $min = $element;
  }
  else  {
    echo ("$element NO és més petit que $min !!!! <br>");   
  }

  $total = $total+$element;
}

echo("El màxim és $max <br>"); // Ensenya Número MÀXIM
echo("El mínim és $min <br>"); // Ensenya Número MÍNIM 
echo("El Total és $total <br>");  // Ensenya Número TOTAL <<<<< PENDENT FER!

?>