<?php

namespace App;

class CsvFileWriter extends FileWriter
{
    public function writeToFile($data): bool
    {
        // Open the file for writing..write to the file..close the file
        print PHP_EOL . 'Writing to csv file...' . PHP_EOL;

        sleep(2);

        return true;
    }
}