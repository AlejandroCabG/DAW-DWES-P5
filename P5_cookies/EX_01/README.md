### Ejercicio 1
Determino con un bucle if-else si la variable **$_Cookie** está definida y no es null y uso la función:

    setcookie( 'visitas', $_COOKIE[ 'visitas' ] + 1, time() + 3600); 
Establezco que las visitas se vayan incrementando con un +1, y que mediante la función time()+3600 tarde una hora para 
volver a contar. Muestro el valor de la cookie:
        
    $mensaje = 'Numero de visitas: '.$_COOKIE[ 'visitas' ];
En el caso que haya ya una visita, que muestre la visita y un mensaje informando que es la primera vez que se visita.

    setcookie( 'visitas', 1, time() + 3600 );
    $mensaje = 'Bienvenido por primera vez a nuesta web';

Para mostrar el texto con las visitas en HTML, añado <?php echo $mensaje;?> dentro del tag <body> para que se visualice. 