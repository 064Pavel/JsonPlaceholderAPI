<?php

namespace App;

use Exception;
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
        try {

            $res = $this->client->get('/users');
            if ($res->getStatusCode() === 200) {
                return json_decode($res->getBody()->getContents(), true);
            } else {
                return ['message' => 'API error: ' . $res->getStatusCode()];
            }

        } catch (GuzzleHttp\Exception\RequestException $e) {
            return ['message' => $e->getMessage()];
        } catch (Exception $e) {
            return ['message' => $e->getMessage()];
        }
    }
    
    public function getPostsByUser(int $userId): array
    {
        try{

            $res = $this->client->get('/posts', ['query' => ['userId' => $userId]]);
            if($res->getStatusCode() === 200){
                return json_decode($res->getBody()->getContents());
            } else {
                return ['message' => 'API error: ' . $res->getStatusCode()];
            }
            
        } catch (GuzzleHttp\Exception\RequestException $e) {
            return ['message' => $e->getMessage()];
        } catch (Exception $e) {
            return ['message' => $e->getMessage()];
        }
    }

    public function getTodosByUser(int $userId): array
    {

        try{

            $res = $this->client->get('/todos', ['query' => ['userId' => $userId]]);

            if($res->getStatusCode() === 200){
                return json_decode($res->getBody()->getContents());
            } else {
                return ['message' => 'API error: ' . $res->getStatusCode()];
            }

        } catch (GuzzleHttp\Exception\RequestException $e) {
            return ['message' => $e->getMessage()];
        } catch (Exception $e) {
            return ['message' => $e->getMessage()];
        }

    }

    public function getPost(int $postId)
    {
        try{

            $res = $this->client->get('/posts/' . $postId);

            if($res->getStatusCode() === 200){
                return json_decode($res->getBody()->getContents());
            } else {
                return ['message' => 'API error: ' . $res->getStatusCode()];
            }

        } catch (GuzzleHttp\Exception\RequestException $e) {
            return ['message' => $e->getMessage()];
        } catch (Exception $e) {
            return ['message' => $e->getMessage()];
        }

    }


    public function addPost(array $data)
    {
        try{

            $res = $this->client->post('/posts', ['json' => $data]);

            if($res->getStatusCode() === 201){
                return json_decode($res->getBody()->getContents());
            } else {
                return ['message' => 'API error: ' . $res->getStatusCode()];
            }

        } catch (GuzzleHttp\Exception\RequestException $e) {
            return ['message' => $e->getMessage()];
        } catch (Exception $e) {
            return ['message' => $e->getMessage()];
        }
    }

    public function updatePost(int $postId, array $data): object
    {
        try{

            $res = $this->client->put('/posts/' . $postId, ['json' => $data]);

            if($res->getStatusCode() === 200){
                return json_decode($res->getBody()->getContents());
            } else {
                return ['message' => 'API error: ' . $res->getStatusCode()];
            }

        } catch (GuzzleHttp\Exception\RequestException $e) {
            return ['message' => $e->getMessage()];
        } catch (Exception $e) {
            return ['message' => $e->getMessage()];
        }

    }

    public function deletePost(int $postId): array
    {
        try {

            $res = $this->client->delete('/posts/' . $postId);

            if($res->getStatusCode() === 200){
                return ['message' => 'success'];
            } else {
                return ['message' => 'API error: ' . $res->getStatusCode()];
            }

        } catch (GuzzleHttp\Exception\RequestException $e) {
            return ['message' => $e->getMessage()];
        } catch (Exception $e) {
            return ['message' => $e->getMessage()];
        }

    }
}

