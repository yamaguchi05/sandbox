<?php

namespace Log\Logger;

class FileLogger implements LoggerInterface
{
    public function output($message, $level)
    {
        file_put_contents(__DIR__ . '/../../log.log', "[{$level}]{$message}\n", FILE_APPEND);
    }
}