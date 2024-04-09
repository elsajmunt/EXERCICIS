<!DOCTYPE html>
<html> 
	<head>
		<title>DATES PHP</title>
        <meta charset="UTF-8">
	</head> 
	<body>
    <h1>DATES PHP</h1>

    <?php
$date=date_create_from_format("j-M-Y","22-Mar-2024");
echo date_format($date,"d/m/Y");
?>




    </body>
</html>