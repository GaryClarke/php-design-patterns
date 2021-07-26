<?php

namespace App;

abstract class FileWriter
{
    abstract public function writeToFile($data): bool;
}