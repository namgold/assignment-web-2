<?php
include_once 'Request.php';
include_once 'Router.php';
include_once 'connect_database.php';

$router = new Router(new Request);

$router->get('/user', function () {
    header('Location: user');
});

$router->post('/user', function () {
    header('Location: user');
});

$router->get('/admin', function() {
    header('Location: admin');
});

$router->post('/admin', function() {
    header('Location: admin');
});

// $router->get('/', function() {
//     return json_encode(array(
//         "name" => array("ok" => "123"),
//         "email" => "TheHalfHeart@gmail.com",
//         "website" => "freetuts.net" 
//     ));
// });

// $router->get('/profile', function($request) {
//   return <<<HTML
//   <h1>Profile</h1>
// HTML;
// });

// $router->post('/data', function($request) {
//   return json_encode($request->getBody());
// });
?>