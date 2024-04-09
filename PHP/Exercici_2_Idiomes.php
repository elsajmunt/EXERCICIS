<HTML>
<HEAD>
<TITLE>Mi primer programa en PHP</TITLE>
<h2>Apunts php part 1.pdf</h2>
<h1>EJERCICIO 2: Idiomes</h1>
</HEAD>
<BODY>

<?PHP
// IDIOMES:
$mensaje_es="ESP: Hola, Bienvenido!";
$mensaje_en="ENGLISH: Hello, Wellcome!";
$mensaje_cat="CATALÀ: Hola, Benvingut!";

$idioma= "cat"; //variable que decide el idioma de la pagina

$mensaje= "mensaje_" . $idioma;
print $$mensaje; //lo equivalente a print $mensaje_xx
?> 

</BODY>
</HTML>
