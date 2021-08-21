<?php

require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

$fileWriter = new \App\NonFileWriter();

$processor = new \App\RandomProcessor($fileWriter);
$processor->process(['foo' => 'bar']);