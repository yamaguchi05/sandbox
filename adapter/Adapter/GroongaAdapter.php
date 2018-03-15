<?php

class GroongaAdapter implements AdapterInterface
{
    public function output()
    {
        $groonga = new Groonga();
        $groonga->send();
    }
}