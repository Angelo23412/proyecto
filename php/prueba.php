<?php
// Recibir los datos enviados por POST
$id = $_POST['id'];
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
$mm = $_POST['mm'];
$tmb = $_POST['tmb'];
$gc = $_POST['gc'];

// Aquí podrías realizar operaciones adicionales con los datos recibidos
// Por ejemplo, guardar en una base de datos, procesar y devolver una respuesta, etc.

// Ejemplo de respuesta (puedes adaptar según tus necesidades)
$response = array(
    'status' => 'success',
    'message' => 'Datos recibidos correctamente'
);

// Devolver la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
