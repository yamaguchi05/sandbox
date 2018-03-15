<?php

require_once ('../File/FileOutput.php');

class FileAdapter implements AdapterInterface
{
    public function output()
    {
        $file = new FileOutput();
        $file->write();
    }
}
