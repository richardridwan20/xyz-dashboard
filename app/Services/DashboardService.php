<?php

namespace App\Services;

use App\Services\ApiService;

class DashboardService extends ApiService
{
    public function __construct()
    {
        parent::__construct();
        $this->pageHeaderEndPoint = '';
    }

    public function allTransaction($page)
    {
        $this->endPoint = 'transaction/?page='.$page;

        return $this;
    }

    public function getTransactionById($id)
    {
        $this->endPoint = 'transaction/'.$id;

        return $this;
    }
}
