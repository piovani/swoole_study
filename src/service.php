<?php

require 'vendor/autoload.php';

use Swoole\Http\Server;
use Swoole\Http\Request;
use Swoole\Http\Response;

$server = new Server('0.0.0.0', 8080);

$server->on('request', function (Request $request, Response $response) {
    $response->header('Content-Type', 'text/html');
    $response->end('<h1>Hello, World 1</h1>');
});

$server->start();
