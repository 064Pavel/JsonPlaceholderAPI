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

// // Получение заданий по id пользователя
// $todos = $api->getTodosByUser(1);
// var_dump($todos);

// // Получение поста по id 
// $post = $api->getPost(5);
// var_dump($post);

// // Создание нового поста
// $post = [
//     'userId' => 5,
//     'title' => 'New Post Title',
//     'body' => 'This is the body of the new post.',
// ];
// $res = $api->addPost($post);
// print_r($res);

// // Обновление поста
$post = [
    'title' => 'Updated Post Title',
    'body' => 'This is the updated body of the post.'
];

$res = $api->updatePost(10, $post);
print_r($post);
