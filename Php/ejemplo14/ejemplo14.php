<?php
/* Modifiquemos la instrucción anterior   y utilicemos las variables predefinidas   
$HTTP_GET_VARS['a'], $HTTP_GET_VARS['b']   en vez de $a y $b que utilizabamos en el ejemplo anterior */
# Pongamos un comentario de advertencia. Recuerda que <br> # sirve para insertar un salto de línea en la salida 
/* Ahora trataremos de comprobar que también podemos     utilizar la superglobal $_GET como $_GET['a'] y $_GET['b']        con iguales resultados que las anteriores */
# Un comentario para identificar el origen del resultado 
print("<br>El resultado siguiente ha sido generado usando \$_GET <br>");
print ($_GET['a']." x ".$_GET['b']." = ".$_GET['a']*$_GET['b']);
?>
