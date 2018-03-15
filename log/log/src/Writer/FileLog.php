<?php
/**
 * Created by PhpStorm.
 * User: yui
 * Date: 2018/02/04
 * Time: 22:31
 */

namespace Log\Writer;

class FileLog
{
    public function warn($message)
    {
        $this->fileOutput('WARN', $message);
    }

    public function info($message)
    {
        $this->fileOutput('INFO', $message);
    }

    public function error($message)
    {
        $this->fileOutput('ERROR', $message);
    }

    private function fileOutput($level, $message)
    {
        $data = "{$level} : file log : {$message} \r\n";
        $filePath = __DIR__ . '/../Output/log.txt';
        file_put_contents($filePath, $data, FILE_APPEND);
        return;
    }
}