<?php

declare(strict_types=1);

namespace App;

class Product
{
    private float $price;

    public function getPrice(): int|float
    {
        return false;
    }


    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}