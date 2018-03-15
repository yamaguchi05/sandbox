<?php

require_once '../vendor/autoload.php';

if (!isset($argv[1])) {
    echo 'ˆø”‚ðÝ’è‚µ‚Ä‚­‚¾‚³‚¢B0: file, 1: display, 2:debug(file & display)';
    exit;
}

$display_flg = $argv[1];
if ($display_flg === '1') {
    $log = new \Log\Writer\DisplayLog();
} else {
    $log = new \Log\Writer\FileLog();
}

$log->warn('warning log');
$log->info('info log');
$log->error('error log');

if ($display_flg === '2') {
    $log = new \Log\Writer\DisplayLog();

    $log->warn('warning log');
    $log->info('info log');
    $log->error('error log');
}

exit;
