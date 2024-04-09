<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset=UTF8>
	</head> 

    <body>
        <h1>Formulari</h1>
        <h2>Exemple PHP. Ejercicio 1.5</h2>

        if (isset(&_POST["send"])){
            for each (_POST as $element)
            echo($element)
        }

        <form action="destino.php" method="get">

        <label>name</label>
        <input type="text" name="nom"/>
        <label>cognoms</label>
        <input type="text" name="cognoms"/>
        <label>Email</label>
        <input type="email" name="email"/>

        <input type="radio" name="sexo"value="femeni" /> Femení
        <input type="radio" name="sexo"value="masculi" /> Masculí

        <input type="checkbox" name="extras[]" value="garaje">Garaje
        <input type="checkbox" name="extras[]" value="jardin">Jardín
        <input type="checkbox" name="extras[]" value="piscina">Piscina

        <input type="submit" name= "send"/> Femení
        </form>



    </body>
</html>