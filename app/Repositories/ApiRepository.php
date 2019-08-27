<?php

namespace App\Repositories;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class ApiRepository implements RepositoryInterface
{
    protected $model;
    protected $url;
    protected $arrayData = [];
    protected $response;
    public $token;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri'    => 'http://sovera-api.sequis.co.id/api/v1/',
            'http_errors' => false,
            'verify' => false,
        ]);
    }

    public function get()
    {
        $this->token = Session::get('token');
        $this->response = $this->client->get($this->url, [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '.$this->token
            ],
        ]);

        return $this;
    }

    public function post(array $data)
    {
        $this->token = Session::get('token');
        $this->response = $this->client->post($this->url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer '.$this->token
                    ],
                'json' => $data,
            ]);
        return $this;
    }

    public function put(array $data)
    {
        $this->token = Session::get('token');
        $this->response = $this->client->put($this->url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer '.$this->token
                ],
                'json' => $data,
            ]);
        return $this;
    }

    public function upload(array $data)
    {
        $this->token = Session::get('token');
        $this->response = $this->client->post($this->url, [
                'headers' =>[
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer '.$this->token
                ],
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

