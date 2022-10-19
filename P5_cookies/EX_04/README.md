### Ejercicio 4

Creo una conexión con el servidor a partir de unPDO paándole los parámetros correspondientes al nombre de usuario y su contraseña:

    $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

Creo una tabla a partir de una query, mysql, con todos los datos que debe tener un usuario: ID,nombre, apellido, email (PK)
contraseña,fecha de nacimiento, permisos y una imagen:

    $resultados = $conexion->query("CREATE TABLE acabrera8_users (
                                       id INT(6),
                                      firstname VARCHAR(30),
                                       lastname VARCHAR(30),
                                      email VARCHAR(50) PRIMARY KEY,
                                       password VARCHAR(50),
                                       fecha_nacimiento DATE,
                                       permisos BIT,
                                       imagen text
                                       )");
Introduzco valores en la tabla que he creado de la siguiente manera:

    $resultados = $conexion->query("INSERT INTO acabrera8_users (firstname, lastname, email)
                                VALUES ('Alejandro', 'Cabrera', 'alex@example.com')");

Para mostrar los valores vuelvo a hacerlo mediante una query donde selecciono todos los valores de la tabla y los muestro
en una fila haciendo uso de la función foreach:

    $resultados = $conexion->query("SELECT * FROM acabrera8_users");
    foreach($resultados as $fila){
    echo $fila['email'] . " - " .$fila['firstname'] . '</br>';
    echo $fila['email'] . " - " .$fila['lastname'] . '</br>';
    echo $fila['email'] . " - " .$fila['password'] . '</br>';
    echo $fila['email'] . " - " .$fila['fecha_nacimiento'] . '</br>';
    echo $fila['email'] . " - " .$fila['permisos'] . '</br>';
    echo $fila['email'] . " - " .$fila['imagen'] . '</br>';
    }