<?php

require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

$product = new \App\Product();
$product->setPrice(100);
$price = $product->getPrice();

$subTotal = $price * 0.10;

dd($subTotal);

//$fileWriter = new \App\NonFileWriter();
//
//$processor = new \App\RandomProcessor($fileWriter);
//$processor->process(['foo' => 'bar']);