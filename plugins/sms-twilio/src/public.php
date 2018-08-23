<?php
ini_set('display_errors', '1');

file_put_contents(__DIR__ .'/data/plugin.log',date('Y-m-d H:i:s')  . ' ' . $_SERVER['REQUEST_METHOD']. ' '. $_SERVER['REQUEST_URI']. "\n",FILE_APPEND);

ob_start();
require_once 'main.php';

$data = ob_get_flush();

if ($data) {
    file_put_contents(__DIR__ .'/data/plugin.log',$data,FILE_APPEND);
    file_put_contents(__DIR__ .'/data/plugin.log',"\n".date('Y-m-d H:i:s')  . "\n",FILE_APPEND);
}

