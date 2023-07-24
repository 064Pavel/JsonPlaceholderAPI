<?php

namespace App;

use GuzzleHttp\Client;

class JsonPlaceholderAPI{

    private $uri = 'https://jsonplaceholder.typicode.com';
    private $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => $this->uri]);
    }

    public function getUsers(): array
    {
        $res = $this->client->get('/users');
        return json_decode($res->getBody()->getContents());
    }
    
    public function getPostsByUser(int $userId): array
    {
        $res = $this->client->get('/posts', ['query' => ['userId' => $userId]]);
        return json_decode($res->getBody()->getContents());
    }

    public function getTodosByUser(int $userId): array
    {
        $res = $this->client->get('/todos', ['query' => ['userId' => $userId]]);
        return json_decode($res->getBody()->getContents());
    }

    public function getPost(int $postId): object
    {
        $res = $this->client->get('/posts/' . $postId);
        return json_decode($res->getBody()->getContents());
    }

    public function addPost(array $data): object
    {
        $res = $this->client->post('/posts', ['json' => $data]);
        return json_decode($res->getBody()->getContents());
    }
}

