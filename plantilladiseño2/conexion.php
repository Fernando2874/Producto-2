<!-- <?php
$servername = "localhost";
$username = "root";
$password = ""; // Asume que no hay contraseña. Si hay una, colócala aquí.
$dbname = "login";

// Habilitar la visualización de errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "todo esta correcto";
// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];

    // Usar consultas preparadas para evitar inyecciones SQL
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, correo, usuario) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $username);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Redirigir a la página principal
        header("Location: estiloplantilla.html");
        exit();
    } else {
        //Para que muestre error en la pagina
        $error_message= 
        echo "Error: " . $stmt->error;
    }

    // Hacer la consulta
    $stmt->close();
}

$conn->close();
?> -->