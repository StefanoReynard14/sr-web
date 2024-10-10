<?php
include("con_db.php");

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar que todos los campos estén llenos
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mensaje'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $mensaje = trim($_POST['mensaje']);
        $fechareg = date("Y-m-d H:i:s");

        // Validar el email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email inválido";
            exit;
        }

        // Preparar la consulta para evitar inyecciones SQL
        $consulta = $conex->prepare("INSERT INTO datos (nombre, email, mensaje, fecha_reg) VALUES ('$name', '$email', '$mensaje', '$fechareg')");
        $consulta->bind_param($name, $email, $mensaje, $fechareg);
    }
}
?>

