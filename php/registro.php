<?php

include("con_db.php");

if (isset($_POST['submit'])) {
    if (strlen($_POST['name']) >= 1 & strlen($_POST['email']) >= 1) {
        $name = trim($_POST ['name']);
        $email = trim($_POST ['email']);
        $mensaje =trim($_POST ['mensaje']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, email, mensaje, fecha_reg) VALUES ('$name','$email','$mensaje','$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">¡DATOS REGISTRADOS CORRECTAMENTE!</h3>
            <?php
        }   else {
        ?>
            <h3 class="bad">DATOS REGISTRADOS INCORRECTAMENTE. INTENTE DE NUEVO</h3>
        <?php
    } }
        else {
        ?>
            <h3 class="bad">POR FAVOR COMPLETE LOS CAMPOS</h3>
        <?php
    }
}
?>