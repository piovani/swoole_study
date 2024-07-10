<?php

require 'vendor/autoload.php';

use Swoole\Http\Server;
use Swoole\Http\Request;
use Swoole\Http\Response;

$server = new Server('0.0.0.0', 8080);

$server->on('request', function (Request $request, Response $response) {
    $response->header('Content-Type', 'application/json');
    $response->end(json_encode(["status" => fibonacci(10)]));
});

function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$server->start();
