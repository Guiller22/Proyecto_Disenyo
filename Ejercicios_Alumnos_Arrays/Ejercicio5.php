<!DOCTYPE html>
<html lang="en">
<?php
include 'head.php';                   
include 'pie.php';
$encontrar=false;
$ingles="";
if(isset($_REQUEST['traducir']))
{
    $palabra=$_REQUEST['palabra'];
    $encontrar=true;
}
 echo '<body>


    <form method="post" action="ejemplo.php" name="signup-form">
            <p>Introduce la palabra a traducir:<input type="palabra" name="palabra" required /></p>
            <button type="submit" name="Traducir" value="Traducir">Traducir</button>
            <button type="delete" name="borrar" value="borrar">Borrar</button>
            <p>La traduccion al ingles es: <input type="palabra" name="traduccion" value="' .$ingles.'" </p>
        
    </form>
</body>

</html>';
?>




