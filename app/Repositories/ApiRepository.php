<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class ApiRepository implements RepositoryInterface
{
    protected $model;
    protected $url;
    protected $arrayData = [];
    protected $response;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri'    => 'http://sequis-b2b-api.test/api/v1/',
            'http_errors' => false,
            'verify' => false,
        ]);
    }

    public function get()
    {
        $this->response = $this->client->get($this->url);

        return $this;
    }

    public function post(array $data)
    {
        $this->response = $this->client->post($this->url, [
                'headers' => ['Accept' => 'application/json'],
                'json' => $data,
            ]);
        return $this;
    }

    public function put(array $data)
    {
        $this->response = $this->client->put($this->url, [
                'headers' => ['Accept' => 'application/json'],
                'json' => $data,
            ]);
        return $this;
    }

    public function upload(array $data)
    {
        $this->response = $this->client->post($this->url, [
                'headers' => ['Accept' => 'application/json'],
                'json' => $data,
            ]);
        return $this;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function statusCode()
    {
        return $this->response->getStatusCode();
    }

    public function response()
    {
        return json_decode($this->response->getBody(), true);
    }

}

