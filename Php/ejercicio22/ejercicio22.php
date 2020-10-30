<!DOCTYPE html>
<html>
<head>
</head>
<body>


<?php
$a=255;
$x=0;$y=0;$z=0;
print ("<table width=300 border=2>");
while ($a>=0){
    echo "<tr><td align=center style='background:RGB($x,$y,$z)'>";
    print $a;
    $a-=5;
    $x+=5;$y+=5;$z+=5;
    print("</td></tr>");
}    
print "</table>";
?>
</body>
</html>