<?php
$a=$_POST['n1'];
$b=$_POST['n2'];

print "La suma es". (number_format($a +$b. 4, ",".",".",".",")). "<BR>";
    print "La RESTA es". (number_format($a - $b. 4, ",".",".",".",")) . "<BR>";
    print "La multiplicacion es". (number_format($a *$b. 4, ",".",".",".",")) . "<BR>";
    print "La division es". (number_format($a / $b. 4, ",".",".",".",")) . "<BR>";

    print "La potencia cuarta de la suma es". ceil(pow(($a + $b),4)) . "<BR>";
    print "La potencia cuarta de la suma es". ceil(pow(pow(($a + $b),3) ,(1 / 5))) . "<BR>";