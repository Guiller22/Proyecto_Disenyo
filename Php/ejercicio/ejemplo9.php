<HTML>

<HEAD> </HEAD>

<BODY>
    <? # Definimos la variable $pepe como vacía $pepe="";
# Definimos las variables $Pepe y $Pepa (ojo con mayúsculas y minúsculas) $Pepe="Me llamo Pepe y soy serio y formal"; $Pepa="Me llamo Pepa y también soy seria y formal";
?>
    <!-- esto es HTML, hemos cerrado el script -->
    <center><b>Vamos a ver el contenido de las variables</b></center>
    <!--   un nuevo script PHP -->
    <? echo "<br> El valor de la variable pepe es: ",$pepe; echo "<br> No ha puesto nada porque $pepe esta vacía"; echo "<br> El valor de la variable Pepe es: ",$Pepe; ?>
    <center><b><br>Invocando la variable desde una función</b></center>
    <? /* Escribiremos una function llamada vervariable   Observa la sintaxis. La palabra function delante   y el () al final seguidos de la llave.   Hasta que no cerremos la llave todas las líneas   serán consideradas parte de la función */
function vervariable(){ echo "<br> Si invoco la variable Pepe desde una función"; echo "<br>me aparecerá en blanco"; echo "<br>El valor de la variable Pepe es: ",$Pepe; } /* esta llave de arriba señala el final de la función.   Los contenidos que hay en adelante ya no pertenecen a ella */
/* Haremos una llamada a la funcion vervariable.   Las funciones no se ejecutan hasta que no se les ordena   y se hace de esta forma que ves aquí debajo:   nombre de la funcion seguido de los famosos paréntesis */
vervariable(); ?>
    <!-- mas HTML puro  -->
    <center><b><br>Ver la variable desde la función poniendo <i>global</i></b></center>
    <? # una nueva funcion