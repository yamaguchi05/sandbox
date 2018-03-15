<?php

namespace Log\Logger;

interface LoggerInterface
{
    public function output($message, $level);
}

