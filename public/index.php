<?php

require '../vendor/autoload.php'; 

use App\JsonPlaceholderAPI;

$api = new JsonPlaceholderAPI();

// // Получение всех пользователей
// $users = $api->getUsers();
// var_dump($users);

// // Получение постов по id пользователя
// $posts = $api->getPostsByUser(1);
// var_dump($posts);

// // Получение постов по id пользователя
$todos = $api->getTodosByUser(1);
var_dump($todos);