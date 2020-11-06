<?php

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