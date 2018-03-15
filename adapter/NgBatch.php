<?php

require_once ('./DB/DatabaseConnection.php');
require_once ('./File/FileOutput.php');
require_once ('./File/Csv.php');


/**
 * NGパターン
 */

if ($argv[1] === 'file') {
    $file = new FileOutput();
    $file->write();
} elseif ($argv[1] === 'database') {
    $database = new DatabaseConnection();
    $database->insert();
} elseif ($argv[1] === 'csv') {
    $database = new Csv();
    $database->toCsv();
}

