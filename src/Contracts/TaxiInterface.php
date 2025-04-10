<?php
namespace App\Contracts;

interface TaxiInterface
{
    public function conduire(): void;

    public function transporter(): void;

    public function servir(): void;
}
