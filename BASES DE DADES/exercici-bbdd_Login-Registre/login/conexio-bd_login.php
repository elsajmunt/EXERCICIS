<?php  // LOGIN a la Xarxa Social
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xarxa_social";

// Crear conexió
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexió
if ($conn->connect_error) {
    die("Conexió fallida: " . $conn->connect_error);
}

// Obtenir Dades del Formulari
$usuari = $_POST['nom']; 
$password_form = $_POST['password'];

// Consulta SQL per obtenir el PASSWORD de la Base de Dades
$sql = "SELECT password FROM usuaris WHERE Nom = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuari);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $password = $row['password'];

    // Verificar el Password
    if ($password == $password_form) {
        echo "Benvingut, Benvinguda! Usuari registrat correctament ;)";
    } else {
        echo "Ho sentim, el Password, no és correcte.";
    }
} else {
    echo "Ho sentim, aquest usuari no està registrat.";
}

// Tancar la conexió
$stmt->close();
$conn->close();