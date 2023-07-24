<?php

require '../vendor/autoload.php'; 

use App\JsonPlaceholderAPI;

$api = new JsonPlaceholderAPI();

$users = $api->getUsers();
var_dump($users);