<?php

//aqui le modificas por si las dudas
 $miconexion = new mysqli("localhost", "desarrollador", "", "login");
 if ($miconexion->connect_errno) {
     echo "Fallo al conectar con MySQL";
 }
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    // Usar consultas preparadas para evitar inyecciones SQL
    $stmt = $miconexion->prepare("INSERT INTO usuarios (nombre,correo,usuario) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $username);
    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Redirigir a la página principal
        header("Location: estiloplantilla.html");
    }
    $stmt->close();
    $conn->close();
}
?>
