<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 5</h1>
<h2>Registro</h2>
<form method="post" action="" name="signup-form">
    <div class="form-element">
        <label>Id: </label>
        <input type="text" name="id"/>
    </div>
    <br>
    <div class="form-element">
        <label>Nombre: </label>
        <input type="text" name="firstname" />
    </div>
    <br>
    <div class="form-element">
        <label>Apellido: </label>
        <input type="text" name="lastname"/>
    </div>
    <br>
    <div class="form-element">
        <label>Email: </label>
        <input type="text" name="email"/>
    </div>
    <br>
    <div class="form-element">
        <label>Password: </label>
        <input type="text" name="password"/>
    </div>
    <br>
    <div class="form-element"n>
        <label>Fecha de nacimiento: </label>
        <input type="text" name="fecha_nacimiento"/>
    </div>
    <br>
    <button type="submit" name="registrar" value="registrar">Registrar</button>
</form>
<?php
// Comprobamos si nos llega los datos por POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        /* Verificar que no existe en la base de datos el mismo email */
        // Conecta con base de datos
        $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
        // Cuenta cuantos emails existen
        $miConsulta = $conexion->prepare('SELECT COUNT(*) as length FROM acabrera8_users WHERE email = :email;');
        // Ejecuta la busqueda
        $miConsulta->execute([
            'email' => $email
        ]);
        // Recoge los resultados
        $resultado = $miConsulta->fetch();
        // Comprueba si existe
        if ((int)$resultado['length'] > 0) {
            $errores[] = 'La dirección de email ya esta registrada.';
        }

        //-----------------------------------------------------
        // Crear cuenta
        //-----------------------------------------------------
        if (count($errores) === 0) {
            /* Registro En La Base De Datos */

            // Prepara INSERT
            $token = bin2hex(openssl_random_pseudo_bytes(16));
            $miNuevoRegistro = $conexion->prepare('INSERT INTO acabrera8_users (id,firstname, lastname, email,password) VALUES (:id,:firstname,:lastname,:email, :password);');
            // Ejecuta el nuevo registro en la base de datos
            $miNuevoRegistro->execute([
                'id' => $id,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'password' => $password,
            ]);
            /* Redirección a login.php con GET para informar del envio del email */
        }

}