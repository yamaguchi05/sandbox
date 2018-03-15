<?php

namespace Log\Logger;

class DisplayLogger implements LoggerInterface
{
    public function output($message, $level)
    {
        echo "[{$level}]{$message}\n";
    }
}