<?php
// Crear conexió a la Base de Dades
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
$sql_consulta = "SELECT id, dni, nom, cognoms, telefon FROM personas ORDER BY ID"; 
?>

<TABLE border="1">
<?php
if ($result = mysqli_query($conexio_bd, $sql_consulta)) { 
    //Fetch one and one row
    while ($row = mysqli_fetch_row($result)) {
?>
   <tr>
        <td>id:<?=$row[0]?></td>
        <td>DNI: <?=$row[1]?></td>
        <td>NOM:<?=$row[2]?></td>
        <td>COGNOMS:<?=$row[3]?></td>
        <td>TELÈFON:<?=$row[4]?></td>
    </tr>

<?php
    }        
    mysqli_free_result($result);  // Tanca la consulta (SELECT).
}
mysqli_close($conexio_bd); // Tanca la conexió de l'usuari, a la Base de Dades.
?>
</TABLE>