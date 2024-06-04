<?php // Contingut USUARIS -----------------------------------
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

<?php // Contingut PUBLICACIONS -----------------------------
$posts = 
array(
    array("id" => 1, "title"=>"l'entrada d'Elsa" , "descripcio"=>"zzzz", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
    array("id" => 2, "title"=>"l'entrada d' Laura" , "descripcio"=>"3333", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
    array("id" => 3, "title"=>"l'entrada d' Jaume" , "descripcio"=>"3333", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
    array("id" => 4, "title"=>"l'entrada d'Paula" , "descripcio"=>"dddd", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
    array("id" => 5, "title"=>"l'entrada d'Josep" , "descripcio"=>"dddddd", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
    array("id" => 5, "title"=>"l'entrada d'Josep2" , "descripcio"=>"dddddd", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
    array("id" => 5, "title"=>"l'entrada d'Josep3" , "descripcio"=>"dddddd", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
    array("id" => 5, "title"=>"l'entrada d'Josep4" , "descripcio"=>"dddddd", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
    array("id" => 5, "title"=>"l'entrada d'Josep5" , "descripcio"=>"dddddd", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
    array("id" => 5, "title"=>"l'entrada d'Josep6" , "descripcio"=>"dddddd", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
)
?>

<HTML>
    <BODY>
   <!-- Pàgina per tractar Login i mostrar llista de Publicacions...-->

        <?php  // VALIDACIÓ PASSWORD --------------------
            if ($existeixUsuariIPass) {
        ?>
        <p> LOGIN VALID! </p>

        <?php 
            }
            else {
        ?>
            <p> LOGIN NO VALID!! </p>
        <?php
            }
        ?> 

    <!-- LLISTA DE PUBLICACIONS aquí: ---------------------------->
    <a>Nova Publicació >></a> <!-- Enllaça amb Pàgina novaPublicacio.html ------->
    <h2>Llista de Publicacions</h2>

    <?php 
           foreach ($posts as $post) {  // Mostra PUBLICACIONS i dades...           
        ?>          
           <div>
              <?=$post['title']?> <br><?=$post['descripcio']?>
                <img src="<?=$post['image'] ?>" width="100px"> <a onclick="" href="#">LIKE</a>
            </div>
        <?php
           }
        ?>
        
    </BODY>
</HTML>