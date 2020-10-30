
    <?php
    /*Escribe un script (guárdalo como ejercicio6.php) que construya una pequeña página web en la que aparezca 
    el texto "Estás utilizando la versión: 4.4.0 de PHP" (incluidas las comillas y extrayendo el número de versión de la constante
    predefinida correspondiente). Trata de que todas las etiquetas HTML que utilices estén recogidas en variables PHP, 
    de manera que no exista ninguna línea en el código fuente de la página que esté fuera de las etiquetas <? ... ?> Anterior*/
    echo "<br>\"Estamos utilizando la versión: ",PHP_VERSION, " de PHP\" "; 
    echo "<br>PHP SE ESTA EJECUTANDO DESDE EL SO: ",PHP_OS; 

    $saludo= "hola muchachos";
    $e1= "<center>";
    $e2= "<b>";
    $e3= "<i>";
    $e6= "</center>";
    $e5= "</b>";
    $e4= "</i>";

    echo "$e1 $e2 Este es el saludo: $e3 $saludo $e6 $e4 $e5";
    



    ?>