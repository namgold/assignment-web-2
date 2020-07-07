<?php
include_once '../Request.php';
include_once '../Router.php';

$router = new Router(new Request);

$router->get('/admin', function () {
    return json_encode([1,2,3]);
});

?>