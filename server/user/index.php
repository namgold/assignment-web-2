<?php
include_once '../Request.php';
include_once '../Router.php';
include("../models/UserModel.php");


$router = new Router(new Request);

$router->post('/user/info', function () {

    $userModel = new UserModel();

    return json_encode($userModel->list($_POST['id']));
    // return json_encode([]);

});


?>