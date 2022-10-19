### Ejercicio 2

Creo un formulario en HTML en un archivo **index.php** con el método GET para obtener el nombre y el idioma introducidos en dos campos de texto. Uso 
el atributo action para definir a qué documento envío los datos, en este caso **cookies.php**.
En éste uso un condicional con el método GET para que obtenga los datos del nombre y idiomas, que son los que he introducido 
en el archivo index.php, y que guardo en dos variables nuevas. Uso la función set cookie para pasarle los dos parámetros
nombre yla variable creada.

    if (isset($_GET['enviar'])) {

    $var_nombre = $_GET['nombre'];
    $var_idiomas = $_GET['idiomas'];
    }
    setcookie('nombre', $var_nombre);
    setcookie('idiomas', $var_idiomas);
Para que los valores de las cookies se visualicen dentro de los campos de texto,lo hago mediante el atributo value seguido 
de un echo de la cookie que quiero que se muestre:

    value=<?php echo $_COOKIE['nombre']; ?>