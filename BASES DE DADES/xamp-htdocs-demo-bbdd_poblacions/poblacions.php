<?php
// Crear conexió
$conexio_bd = mysqli_connect("localhost", "root", "", "ciutats");

// Verificar conexió
if (mysqli_connect_errno()) {
    echo "Conexió fallida: " . mysqli_connect_error();
    exit();
}
else {
    echo "Connexió Correcta!<br>";
}

// Consulta contingut de la Base de Dades
$sql_consulta = "SELECT id, Codi_Postal, Localitat FROM localitats ORDER BY ID"; 
?>

<TABLE border="1">
<?php
if ($result = mysqli_query($conexio_bd, $sql_consulta)) { 
    //Fetch one and one row
    while ($row = mysqli_fetch_row($result)) {
?>
   <tr><td>id:<?=$row[0]?></td><td>Codi Postal: <?=$row[1]?></td><td>localitat:<?=$row[2]?></td></tr>

<?php
    }        
    mysqli_free_result($result);  // Tanca la consulta (SELECT).
}
mysqli_close($conexio_bd); // Tanca la conexió de l'usuari, a la Base de Dades.
?>
</TABLE>