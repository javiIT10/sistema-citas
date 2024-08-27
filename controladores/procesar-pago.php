<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents("php://input"), true);

  if ($data) {
    $status = $data['status'];
    $citaDescripcion = $data['citaDescripcion'];
    $idEspecialista = $data['idEspecialista'];
    $idTransaccion = $data['idTransaccion'];
    $codigoCita = $data['codigoCita'];
    $fechaCita = $data['fechaCita'];
    $idUsuario = $data['idUsuario'];
    $pagoCita = $data['pagoCita'];

    if ($status === 'COMPLETED') {
      // Conectar a la base de datos y guardar los datos
      $conn = new mysqli('localhost', 'root', '', 'sistema-citas');

      if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
      }

      $sql = "INSERT INTO citas (idEspecialista, idUsuario, idTransaccion, pagoCita, codigoCita, citaDescripcion, fechaCita) VALUES ('$idEspecialista', '$idUsuario', '$idTransaccion', '$pagoCita', '$codigoCita', '$citaDescripcion', '$fechaCita')";
      if ($conn->query($sql) === true) {
        echo json_encode([
          'status' => 'success',
          'message' => 'Datos recibidos y guardados correctamente'
        ]);
      } else {
        echo json_encode([
          'status' => 'error',
          'message' => 'Error al guardar los datos: ' . $conn->error
        ]);
      }
      $conn->close();
    }
  } else {
    echo json_encode([
      'status' => 'error',
      'message' => 'No se recibieron datos'
    ]);
  }
} else {
  echo json_encode([
    'status' => 'error',
    'message' => 'Método no permitido'
  ]);
}
