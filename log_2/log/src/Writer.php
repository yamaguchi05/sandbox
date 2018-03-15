<?php

namespace Log;

use Log\Logger\LoggerInterface;

class Writer
{
    /**
     * @var LoggerInterface[]
     */
    private $loggers = [];

    public function addLogger(LoggerInterface $logger)
    {
        $this->loggers[] = $logger;
    }

    public function info($message)
    {
        $this->write($message, 'info');
    }

    public function warning($message)
    {
        $this->write($message, 'warning');
    }

    public function error($message)
    {
        $this->write($message, 'error');
    }
    
    private function write($message, $level)
    {
        foreach ($this->loggers as $logger) {
            $logger->output($message, $level);
        }
    }
}