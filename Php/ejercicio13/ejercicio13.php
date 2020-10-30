<?php
$explicacionBody= <<<Body
El elemento &#60;BODY&#62  body poseía varios atributos presentacionales en versiones previas de HTML. Estos atributos han sido desaprobados previamente en 
favor de las hojas de estilo, y son ahora obsoletos en HTML5. Se recomienda a los autores evitar su uso.
Body;

$explicacionHead= <<<Head
La &#60;HEAD&#62 es la primera de las dos partes en que se estructura un documento HTML.

Head;

$expliaccionHtml= <<<etiqueta
La &#60;HTML&#62 es la primera de las dos partes en que se estructura un documento HTML.

etiqueta;

echo $expliaccionHtml,"<br>"; 
echo $explicacionHead,"<br>"; 
echo $explicacionBody,"<br>"; 
echo $expliaccionHtml,"<br>"; 
?>