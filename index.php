<?php

require __DIR__ . '/vendor/autoload.php';

use src\Curl;

$curl = new Curl('http://ya.ru');
echo $curl->getResponse();