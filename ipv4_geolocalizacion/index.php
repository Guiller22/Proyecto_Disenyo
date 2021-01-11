<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
 <p>Introduce la ip: <input type="text" name="nombre" /></p>
 <p>Su edad: <input type="text" name="edad" /></p>
 <p><input type="submit" /></p>
</form>
</body>
</html>
';

require __DIR__ . '/vendor/autoload.php';
use Foolz\Inet\Inet;
use ipinfo\ipinfo\IPinfo;


$numeroDecimal=1223242321;
$ip = \Foolz\Inet\Inet::dtop($numeroDecimal);

$client = new IPinfo();
$details = $client->getDetails($ip);
$details->country;

echo "En decimal $numeroDecimal  y transformado $ip";
echo ("<pre>");
var_dump($details);
echo ("</pre>");


?>