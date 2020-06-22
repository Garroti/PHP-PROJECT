<?php

$app->addMiddlewares('before', function ($c) {
    session_start();
});
$app->addMiddlewares('before', function ($c) {
    header('Content-Type: text/plain');
});

$app->addMiddlewares('after', function ($c) {
    echo 'after';
});
$app->addMiddlewares('after', function ($c) {
    echo 'after 2';
});
