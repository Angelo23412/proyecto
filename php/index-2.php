<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectointegrador2";

// Obtener datos del formulario
$id = $_POST['id']; // Recibe el ID de usuario desde el formulario
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
$masa_muscular = $_POST['mm'];
$tmb = $_POST['tmb'];
$gc = $_POST['gc'];

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO resultados (id, peso, altura, edad, cuello, cintura, cadera, genero, imc, icc, ica, masa_muscular, tmb, gc)
        VALUES ('$id', '$peso', '$altura', '$edad', '$cuello', '$cintura', '$cadera', '$genero', '$imc', '$icc', '$ica', '$masa_muscular', '$tmb', '$gc')";

// Ejecutar la consulta y verificar si se realizó correctamente
if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
