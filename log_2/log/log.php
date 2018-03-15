<?php

require_once './vendor/autoload.php';

$mode = $argv[1];

$write = new \Log\Writer();

if ($mode === '0' || $mode === '2') {
    $write->addLogger(new \Log\Logger\DisplayLogger());
}
if ($mode === '1' || $mode === '2') {
    $write->addLogger(new \Log\Logger\FileLogger());
}

$write->info("info log");
$write->warning("Warning log");
$write->error("error log");