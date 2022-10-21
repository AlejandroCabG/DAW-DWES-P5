<?php
/*Configure una base de datos para tener usuarios. Los usuarios tendrán un nombre, un correo (identificador de la plataforma),una contraseña, fecha de nacimiento, permisos (si son o no administradores) y una imagen (que, por el momento, no tendrá ningún valor).*/
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
VALUES ('Alejandro', 'Cabrera', 'alex@example.com')");

$resultados = $conexion->query("INSERT INTO acabrera8_users (firstname, lastname, email,password)
VALUES ('Alex', 'Gonzalez', 'alexg@example.com','admin1')");

$resultados = $conexion->query("SELECT * FROM acabrera8_users");
foreach($resultados as $fila){
    echo $fila['email'] . " - " .$fila['firstname'] . '</br>';
    echo $fila['email'] . " - " .$fila['lastname'] . '</br>';
    echo $fila['email'] . " - " .$fila['password'] . '</br>';
    echo $fila['email'] . " - " .$fila['fecha_nacimiento'] . '</br>';
    echo $fila['email'] . " - " .$fila['permisos'] . '</br>';
    echo $fila['email'] . " - " .$fila['imagen'] . '</br>';
}

