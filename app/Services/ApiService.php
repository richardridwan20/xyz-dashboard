<?php

namespace App\Services;

use App\Repositories\ApiRepository;
use Illuminate\Pagination\LengthAwarePaginator;

class ApiService
{
    protected $api;
    protected $endPoint;
    protected $pageHeaderEndPoint;
    public $statusCode;
    public $bodyResponse;
    protected $lang = 'id';
    public $hasError = false;
    public $errors = [];

    public function __construct()
    {
        $this->api = new ApiRepository;
        $this->lang = \App::getLocale();
    }

    public function get()
    {
        return $this->fetch()->responseData()['data'];
    }

    public function paginate()
    {
        $response = $this->fetch()->responseData();

        $dataPerPage = $response['meta']['per_page'];
        $totalData = $response['meta']['total'];
        $currentPage = $response['meta']['current_page'];
        $currentPageData = collect($response['data']);

        $paginatedData = new LengthAwarePaginator($currentPageData, $totalData, $dataPerPage);

        return $paginatedData->setPath(request()->url());
    }

    public function pageHeader()
    {
        $this->endPoint = $this->pageHeaderEndPoint;
        return $this;
    }

    public function post(array $data)
    {
        $postApi = $this->api->setUrl($this->endPoint)->post($data);
        $this->statusCode = $postApi->statusCode();
        $this->bodyResponse = $postApi->response();
        return $this;
    }

    public function put(array $data)
    {
        $postApi = $this->api->setUrl($this->endPoint)->put($data);
        $this->statusCode = $postApi->statusCode();
        $this->bodyResponse = $postApi->response();

        return $this;
    }

    public function upload(array $data)
    {
        $postApi = $this->api->setUrl($this->endPoint)->upload($data);
        $this->statusCode = $postApi->statusCode();
        $this->bodyResponse = $postApi->response();

        return $this;
    }

    public function fetch()
    {
        $fetchApi = $this->api->setUrl($this->endPoint)->get();

        $this->statusCode = $fetchApi->statusCode();
        $this->bodyResponse = $fetchApi->response();

        return $this;
    }

    public function responseData()
    {
        return $this->bodyResponse;
    }

    public function responseStatus()
    {
        return $this->statusCode;
    }

    public function redirectWithError()
    {
        if ($this->hasError) {
            return redirect($this->errors['redirect_to'])->withInput()->with('status', $this->errors['status']);
        }
    }
}
