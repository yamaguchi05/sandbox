<?php

require_once ('../DB/DatabaseConnection.php');

class DatabaseAdapter implements AdapterInterface
{
    public function output()
    {
        $database = new DatabaseConnection();
        $database->insert();
    }
}
