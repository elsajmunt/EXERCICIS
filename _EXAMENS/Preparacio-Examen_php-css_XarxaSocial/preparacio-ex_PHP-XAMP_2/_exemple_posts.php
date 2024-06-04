<?php // Contingut PUBLICACIONS -----
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
        Hola - ordenardor ELSA!!!

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
        </table> 

    </BODY>
</HTML>