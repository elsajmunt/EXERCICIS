<?php    // REGISTRE a la Xarxa Social
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xarxa_social"; // Nom de la Base de Dades

// Crear conexió a la Base de Dades
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexió
if ($conn->connect_error) {
    die("Conexió fallida: " . $conn->connect_error);
}

// Obtenir dades del Formulari
$id_usuari = 3;
$missatge = $_POST['missatge'];
//$data = 31/05/2024;

// Preparar i executar la consulta SQL
$sql = "INSERT INTO missatges (id_usuari, Missatge, Data) VALUES (?, ?, NOW())"; // NOW() fa que surti la data actual a la BD
$stmt = $conn->prepare($sql);    // Statment
$stmt->bind_param("ss", $id_usuari, $missatge); // "ss" vol dir 2 Strings (id_usuari i Missatge)

if ($stmt->execute()) {
    echo "El teu missatge s'ha enviat correctament. <br> Gràcies!!";
} else {
    echo "Error: " . $stmt->error;
}

// Tanca la conexió
$stmt->close(); // Tanca la consulta (Statment, INSERT).
$conn->close(); // Tanca la conexió de l'usuari, a la Base de Dades.
?>