<?php

namespace App\Services;

use App\Repositories\ApiRepository;
use Illuminate\Pagination\LengthAwarePaginator;

class ApiService
{
    protected $api;
    protected $endPoint;
    protected $pageHeaderEndPoint;
    protected $statusCode;
    protected $bodyResponse;
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
        $postApi = $this->api->setUrl($this->endPoint.'&lang='.$this->lang)->post($data);
        $this->statusCode = $postApi->statusCode();
        $this->bodyResponse = $postApi->response();
        return $this;
    }

    protected function fetch()
    {
        $fetchApi = $this->api->setUrl($this->endPoint)->get();

        // dd($fetchApi);

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
