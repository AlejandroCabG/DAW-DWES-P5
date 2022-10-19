### Ejercicio 3

Creo dos archivos: index.php y pagina2.php. 
En la primera hago un formulario en HTML con el método POST, que está enlazado con el documento pagina2, donde me pida en un
campo de texto que introduzca mi nombre.
Llamo a las funciones session_start y session_destroy para que este archivo sea el inicio de la sesión y el final de la página.

    session_start();
    session_destroy();

Inicializo dos variables de sesión de nombre y número en el archivo **pagina2** donde nombre almacenará la variable del mismo nommbre,
que se le pasa por el formulario, y la variable número la inicializo a 0. Posteriormente hago un condicional que incremente en 10
el número y me muestre con un echo los nombres y los números de las sesiones:
    
    $_SESSION['nombre'] = $nombre;
    $_SESSION['numero'] = 0;

    if( $_SESSION) {
    $_SESSION['numero'] += 10;
    echo $_SESSION['nombre'];
    echo "<br>";
    echo $_SESSION['numero'];


