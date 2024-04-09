<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset=UTF8>
	</head> 

    <body>
        <h1>PHP</h1>
        <h2>Ejercicio 2. Calculadora1</h2>

        <!-- <form action="desti_calculs.php" method="post"> esto funciona con archivos separados (desti_calculs.php)-->
        <form action="" method="post"> <!-- misma página-->
            <label>Número 1</label>
            <input type="number" name="numero1"/>
            <label>Número 2</label>
            <input type="number" name="numero2"/>

            <input type="submit" name= "send" value="Calcula >>"/> 
        </form>

        <?php
       if (isset($_POST["send"])){

        $num1= $_POST ["numero1"];
        $num2= $_POST ["numero2"];
        echo "la suma de $num1 y $num2 es: ". suma ($num1,$num2);
        }
        
        function suma ($num1, $num2) {
            if ($num1 && $num2)
                return $num1+$num2;
            else
                return "no se puede";
            }           
        ?>



    </body>
</html>