<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    // Hashea la contraseña antes de guardarla por seguridad
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Conectar a la base de datos
    $servername = "localhost";
    $username = "root";
    $password_db = ""; // Corrige el nombre de la variable
    $dbname = "proyectointegrador2";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Verificar si el usuario ya está registrado
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Este correo electrónico ya está registrado.";
    } else {
        // Preparar y enlazar
        $stmt = $conn->prepare("INSERT INTO usuarios (email, password, phone) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $hashed_password, $phone);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Registro exitoso!";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    // Cerrar conexiones
    $stmt->close();
    $conn->close();
} else {
    echo "Método de solicitud no permitido.";
}
?>
