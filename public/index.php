<?php 

use App\Classes\Taxi;



 require __DIR__ ."/../vendor/autoload.php";

$taxi=new Taxi;

$taxi->conduire();
$taxi->transporter();
$taxi->servir();