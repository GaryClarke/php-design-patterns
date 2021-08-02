<?php

namespace App;

class NullFileWriter extends FileWriter
{
    public function writeToFile($data): bool
    {
        // DO NOTHING
        print PHP_EOL . 'null file writer...not writing to file' . PHP_EOL;

        return true;
    }
}