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
$usuari = $_POST['nom'];
$password = $_POST['password'];
$email = $_POST['email'];

// Preparar i executar la consulta SQL
$sql = "INSERT INTO usuaris (Nom, Password, Email) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);    // Statment
$stmt->bind_param("sss", $usuari, $password, $email); // "sss" vol dir 3 Strings (Nom, Password, Email)

if ($stmt->execute()) {
    echo "Benvingut, Benvinguda!";
} else {
    echo "Error: " . $stmt->error;
}

// Tanca la conexió
$stmt->close(); // Tanca la consulta (Statment, INSERT).
$conn->close(); // Tanca la conexió de l'usuari, a la Base de Dades.
?>