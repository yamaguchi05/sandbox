<?php

require_once ('../File/Csv.php');

class CsvAdapter implements AdapterInterface
{
    public function output()
    {
        $csv = new Csv();
        $csv->toCsv();
    }
}
