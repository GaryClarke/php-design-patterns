<?php

require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

$newCsvFileWriter = new \App\NewCsvFileWriter();
$fileWriter = new \App\NewFileWriterAdapter($newCsvFileWriter);

$processor = new \App\RandomProcessor($fileWriter);
$processor->process(['foo' => 'bar']);

