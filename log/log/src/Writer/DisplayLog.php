<?php
/**
 * Created by PhpStorm.
 * User: yui
 * Date: 2018/02/04
 * Time: 22:31
 */

namespace Log\Writer;

class DisplayLog
{
    public function warn($message)
    {
        $this->write('WARN', $message);
    }

    public function info($message)
    {
        $this->write('INFO', $message);
    }

    public function error($message)
    {
        $this->write('ERROR', $message);
    }

    private function write($level, $message)
    {
        echo("{$level} : {$message} \r\n");
    }
}