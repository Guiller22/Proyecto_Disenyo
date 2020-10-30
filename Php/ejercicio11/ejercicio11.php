<!DOCTYPE html>
<html>
<head>

</head>
<body>
    
    <?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    $a = $_REQUEST["num1"];     
    $b = $_REQUEST["num2"];
    print "La suma es". ($a + $b) . "<BR>";
    print "La RESTA es". ($a - $b) . "<BR>";
    print "La multiplicacion es". ($a * $b) . "<BR>";
    print "La division es". ($a / $b) . "<BR>";

    print "La potencia cuarta de la suma es". ceil(pow(($a + $b),4)) . "<BR>";
    print "La potencia cuarta de la suma es". ceil(pow(pow(($a + $b),3) ,(1 / 5))) . "<BR>";
    ?>
    



    <form method="post" name="prueba" action="">
        Introduce un numero: <br>
        <input type="text" name="num1" value='' required><br>
        Introduce otro numero: <br>
        <input type="text"  name="num2" value='' required><br>
        <input type="submit" value="enviar">
        <input type="reset" value="borrar">
    </form>


</body>

</html>