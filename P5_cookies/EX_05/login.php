<h2>Login</h2>
<form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Email: </label>
        <input type="text" name="email"/>
    </div>
    <br>
    <div class="form-element">
        <label>Password: </label>
        <input type="password" name="password" required />
    </div>
    <br>
    <button type="submit" name="login" value="login">Log In</button>
</form>

<?php
// Comprobamos que nos llega los datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Base de datos ficticia que se usará en el ejemplo.
    $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

    // Variables del formulario
    $emailFormulario = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
    $contrasenyaFormulario = isset($_REQUEST['contrasenya']) ? $_REQUEST['contrasenya'] : null;

    // Comprobamos si los datos son correctos
    if ($conexion['email'] == $emailFormulario && password_verify($contrasenyaFormulario, $conexion['password'])) {
        // Si son correctos, creamos la sesión
        session_start();
        $_SESSION['email'] = $_REQUEST['email'];
        die();
    } else {
        // Si no son correctos, informamos al usuario
        echo '<p style="color: red">El email o la contraseña es incorrecta.</p>';
    }
}

