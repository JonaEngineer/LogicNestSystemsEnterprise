<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Conexión a la base de datos (cambia las credenciales según tu configuración)
    $servername = "localhost";
    $dbname = "logicNestProyect";
    $dbusername = "INGJADE";
    $dbpassword = "JADE2023.";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Comprueba la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta SQL para verificar las credenciales del administrador
    $sql_admin = "SELECT * FROM Register WHERE username = 'admin' AND password = 'admin123'";
    $result_admin = $conn->query($sql_admin);

    // Verifica si el usuario es admin
    if ($result_admin->num_rows > 0 && $username == 'admin' && $password == 'admin123') {
        // Redirige al admin.php si el usuario es admin
        header("Location: ../admin.php");
        exit(); // Termina la ejecución del script después de la redirección
    }

    // Consulta SQL para verificar las credenciales del usuario en la base de datos
    $sql_user = "SELECT * FROM Register WHERE username = '$username' AND password = '$password'";
    $result_user = $conn->query($sql_user);

    // Verifica si las credenciales coinciden con algún usuario registrado
    if ($result_user->num_rows > 0) {
        // Redirige a index.html y muestra mensaje de inicio exitoso
        header("Location: ../index.html?msg=Inicio%20correctamente");
        exit(); // Termina la ejecución del script después de la redirección
    } else {
    // Establece el mensaje de error para mostrar en la página
    $errorMsg = "Usuario o contraseña incorrecta. Por favor, inténtalo de nuevo o regístrate.";
    echo "<script>alert('$errorMsg'); window.location.href = 'login.html';</script>";
    }

    $conn->close(); // Cierra la conexión a la base de datos
}

