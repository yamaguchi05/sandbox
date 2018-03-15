<?php
require_once('./DB/DatabaseConnection.php');
require_once('./File/FileOutput.php');
require_once('./File/Csv.php');

/**
 * 想像でやってみたパターン
 */
class adapter
{

    public function connection($destination)
    {
        if ($destination === 'file') {
            $file = new FileOutput();
            return $file->write();
        } elseif ($destination === 'database') {
            $database = new DatabaseConnection();
            return $database->insert();
        } elseif ($destination === 'csv') {
            $database = new Csv();
            return $database->toCsv();
        }
    }
}