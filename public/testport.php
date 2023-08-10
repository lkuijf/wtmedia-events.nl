<?php
$fp = fsockopen('127.0.0.1', 25, $errno, $errstr, 5);
if (!$fp) {
    // port is closed or blocked
    echo 'port is closed or blocked';
} else {
    // port is open and available
    echo 'port is open and available';
    fclose($fp);
}