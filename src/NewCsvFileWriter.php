<?php

namespace App;

class NewCsvFileWriter implements NewFileWriter
{
    public function write($data)
    {
        // Open the file for writing..write to the file..close the file
        print PHP_EOL . 'Writing to csv file...' . PHP_EOL;

        sleep(2);
    }
}