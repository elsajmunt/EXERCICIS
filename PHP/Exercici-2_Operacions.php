<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset=UTF8>
	</head> 
    <body>
        <h1>PHP</h1>
        <h2>Ejercicio 2. Calculadora1</h2>
        <h2>OPERACIONS: SUMA, RESTA, MULTIPICACIÓ, DIVISIÓ</h2>
        
        <form method="post"> <!-- misma pagina-->
            <label>Número 1</label>
            <input type="number" name="numero1"/>
            <label>Número 2</label>
            <input type="number" name="numero2"/><br>

            <p>Escull l'operació que vols fer:</p>
            <input type="radio" name="operacio" value="suma">
            <label>SUMA</label><br>

            <input type="radio" name="operacio" value="resta">
            <label>RESTA</label><br>

            <input type="radio" name="operacio" value="multiplicacio">
            <label>MULTIPICACIÓ</label><br>  

            <input type="radio" name="operacio" value="divisio">
            <label>DIVISIÓ</label><br>

            <input type="submit" name= "send" value="Calcula  >>"/> <br>
        </form> 

        <?php
       if (isset($_POST["send"])){ /* SUMA */
            $num1= $_POST ["numero1"];
            $num2= $_POST ["numero2"];
            $operacio= $_POST ["operacio"]; 
            echo "La operacio es ".$operacio."<br>";

            if($operacio == "suma") {
                    echo "la suma de $num1 + $num2 es = ".suma($num1,$num2);
            }   else if($operacio == "resta") {
                    echo "la resta de $num1 - $num2 es = ".resta($num1,$num2);
            }   else if($operacio == "multiplicacio") {
                    echo "la multiplicció de $num1 x $num2 es = ".multiplicacio($num1,$num2);
            }   else if($operacio == "divisio") {
                    echo "la divisió de $num1 / $num2 es = ".divisio($num1,$num2);
            }
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

        function multiplicacio ($num1, $num2) {  /* MULTIPLICACIÓ */
                if ($num1 && $num2)
                     return $num1*$num2;
                else
                    return "Has d'introduir un Número.";
                    } 

         function divisio ($num1, $num2) {  /* DIVISIÓ */
                if ($num1 && $num2)
                    return $num1/$num2;
                else
                    return "Has d'introduir un Número.";
                            }         
        ?>

    </body>
</html>