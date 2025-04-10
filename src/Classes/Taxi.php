<?php 
namespace App\Classes;

use App\Contracts\TaxiInterface;

 class Taxi implements TaxiInterface

 {
    public function conduire(): void
    {
        echo "<br>le taxi conduit le client";
    }

    public function transporter(): void
    {
        echo "<br>le taxi transporte le client";
    }

    public function servir(): void
    {
        echo "<br>le taxi est au service du client";
    }
 }