<?php
    $http = new swoole_http_server("0.0.0.0", 8811);

    $http->on('request', function ($request, $response) {
        $response->end("<h1>HTTPSERVERS</h1>");
    });

    $http->start();
?>