<HTML>
<HEAD>
<TITLE>Ejercicio 3</TITLE></HEAD>
<BODY>
<?php
/*Escribe un script (guárdalo como ejercicio4.php) en el que se definan dos constantes, una
numérica y otra de cadena y en el que –mediante la las opciones print y echo– aparezca en la
página web resultante un comentario sobre el tipo de cada una de ellas seguido de su valor.
Intenta conseguir que los elementos concatenados aparezcan en la presentación separados
por un espacio. ¡Observa el código fuente! */
define("rupias",1/2);
define("Cadena","1 Cadenilla");
print ("Valor de la constante rupias: " . rupias . "<BR>"); 
print ("Valor de la constante rupias: " . Cadena . "<BR>"); 
echo "Valor de la variable cadena: ", Cadena, "<BR>"; 
echo "Valor de la variable cadena: ", rupias, "<BR>"; 
?>
</body>
</html>