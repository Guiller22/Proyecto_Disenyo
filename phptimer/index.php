<?php

require __DIR__ . '/vendor/autoload.php';
use SebastianBergmann\Timer\Timer;
use Carbon\Carbon;

Timer::start();
foreach (range(0, 100000) as $i) {
    //echo $i;
}
$duracion = Timer::stop();
var_dump($duracion);
print Timer::secondsToTimeString($duracion);
echo '<br>';
$tomorrow = Carbon::now()->addDay();
echo $tomorrow->locale('es')->isoFormat('dddd, MMMM Do YYYY, h:mm');
printf("Now: %s", Carbon::now());


?>