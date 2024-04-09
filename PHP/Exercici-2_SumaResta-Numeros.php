<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset=UTF8>
	</head> 
    <body>
        <h1>PHP</h1>
        <h2>Ejercicio 2. Calculadora1</h2>
        <h2>SUMA i RESTA</h2>

   <!-- <form action="desti_calculs.php" method="post"> esto funciona con archivos separados (desti_calculs.php)-->
        <form action="" method="post"> <!-- misma pagina-->
            <label>Número 1</label>
            <input type="number" name="numero1"/>
            <label>Número 2</label>
            <input type="number" name="numero2"/><br>

            <input type="submit" name= "send_suma" value="Calcula Suma >>"/> <br>
            <input type="submit" name= "send_resta" value="Calcula Resta >>"/> <br>
        </form>

        <?php
       if (isset($_POST["send_suma"])){ /* SUMA */
        $num1= $_POST ["numero1"];
        $num2= $_POST ["numero2"];
        echo "La suma de $num1 y $num2 es: ". suma ($num1,$num2); /* Resultat*/
        }

        if (isset($_POST["send_resta"])){ /* RESTA */
            $num1= $_POST ["numero1"];
            $num2= $_POST ["numero2"];
            echo "La resta de $num1 y $num2 es: ". resta ($num1,$num2); /* Resultat */
            }
       
        
        function suma ($num1, $num2) {  /* SUMA */
            if ($num1 && $num2)
                return $num1+$num2;
            else
                return "Has d'introduir un Número.";
            }      
            
        function resta ($num1, $num2) {  /* RESTA */
            if ($num1 && $num2)
                return $num1-$num2;
            else
                return "Has d'introduir un Número.";
                } 
        ?>

    </body>
</html>