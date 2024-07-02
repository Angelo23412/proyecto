<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root"; // Cambia esto si tu usuario de MySQL es diferente
$password_db = ""; // Cambia esto si tu contraseña de MySQL es diferente
$dbname = "proyectointegrador2"; // Nombre de tu base de datos


$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$edad = $_POST['edad'];
$cuello = $_POST['cuello'];
$cintura = $_POST['cintura'];
$cadera = $_POST['cadera'];
$genero = $_POST['genero'];
$imc = $_POST['imc'];
$icc = $_POST['icc'];
$ica = $_POST['ica'];
$masa_muscular = $_POST['masa_muscular'];
$tmb = $_POST['tmb'];
$gc = $_POST['gc'];

// Insertar los datos en la tabla
$sql = "INSERT INTO resultados (peso, altura, edad, cuello, cintura, cadera, genero, imc, icc, ica, masa_muscular, tmb, gc)
        VALUES ('$peso', '$altura', '$edad', '$cuello', '$cintura', '$cadera', '$genero', '$imc', '$icc', '$ica', '$masa_muscular', '$tmb', '$gc')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>