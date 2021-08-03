<?php

namespace App;

class NewFileWriterAdapter extends FileWriter
{
    private NewFileWriter $fileWriter;

    public function __construct(NewFileWriter $fileWriter)
    {
        $this->fileWriter = $fileWriter;
    }

    public function writeToFile($data): bool
    {
        $this->fileWriter->write($data);

        return true;
    }
}







