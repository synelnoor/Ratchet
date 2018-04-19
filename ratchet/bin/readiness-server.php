<?php
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use ratchet\Readiness;

    require dirname(__DIR__) . '/vendor/autoload.php';
$server = IoServer::factory(
        new HttpServer(
            new WsServer(
                new Readiness()
            )
        ),
        8181
    );

    $server->run();