<?php // Contingut Usuaris
$usuaris = 
array(
    array("dni" => 1, "username"=>"Elsa" , "cognom"=>"zzzz", "password"=>"1234"),
    array("dni" => 2, "username"=>"Laura" , "cognom"=>"3333", "password"=>"4321"),
    array("dni" => 3, "username"=>"Jaume" , "cognom"=>"3333",  "password"=>"1234"),
    array("dni" => 4, "username"=>"Paula" , "cognom"=>"dddd",  "password"=>"1234"),
    array("dni" => 5, "username"=>"Josep" , "cognom"=>"dddddd" ,"password"=>"1234"),
    array("dni" => 5, "username"=>"Josep2" , "cognom"=>"dddddd", "password"=>"1234"),
    array("dni" => 5, "username"=>"Josep3" , "cognom"=>"dddddd", "password"=>"1234"),
    array("dni" => 5, "username"=>"Josep4" , "cognom"=>"dddddd", "password"=>"1234"),
    array("dni" => 5, "username"=>"Josep5" , "cognom"=>"dddddd", "password"=>"1234"),
    array("dni" => 5, "username"=>"Josep6" , "cognom"=>"dddddd", "password"=>"1234"),
);


$username = $_POST['username'];
$password = $_POST['password'];

echo " Hola $username - $password"; // Mostra Nom Usuari (Benvinguda...)
$existeixUsuariIPass = false;

foreach ($usuaris as $usuari) {  // Mostra Usuaris i dades...
    if (     ($usuari['username'] == $username)  and  ($usuari['password']== $password)) {
        $existeixUsuariIPass = true;
?>

<?php
    }
}
?>

<HTML>
    <BODY>
   <!-- Pàgina per tractar Login i mostrar llista de Publicacions...-->

        <?php  // VALIDACIÓ PASSWORD -------
            if ($existeixUsuariIPass) {
        ?>
        <p> LOGIN OK </p>

        <?php 
            }
            else {
        ?>
            <p> LOGIN NO VALID!! </p>
        <?php
            }
        ?> 

    <!-- LLISTA DE PUBLICACIONS aquí: ------>
    <a>Nova Publicació >></a> <!-- Enllaça amb Pàgina novaPublicacio.html ------->
    <p>llista de Publicacions...</p>
        
    </BODY>
</HTML>