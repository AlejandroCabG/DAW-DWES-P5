<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 5</h1>

<form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Usuario</label>
        <input type="text" name="username"/>
    </div>
    <div class="form-element">
        <label>Contraseña</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="login" value="login">Log In</button>
</form>
</body>
</html>

<?php


$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

//$resultados = $conexion->query("CREATE TABLE acabrera8_users (
//                                        id INT(6),
//                                        firstname VARCHAR(30),
//                                        lastname VARCHAR(30),
//                                        email VARCHAR(50) PRIMARY KEY,
//                                        password VARCHAR(50),
//                                        fecha_nacimiento DATE,
//                                        permisos BIT,
//                                        imagen text
//                                        )");

$resultados = $conexion->query("INSERT INTO acabrera8_users (firstname, lastname, email)
VALUES ('Alejandro', 'Cabrera', 'alex@example.com')")->fetch(PDO::FETCH_ASSOC);



?>