<?php

namespace App\Services;

use App\Services\ApiService;

class InvoiceLogService extends ApiService
{
    public function __construct()
    {
        parent::__construct();
        $this->pageHeaderEndPoint = '';
    }

    public function allTransaction($page)
    {
        $this->endPoint = 'invoicelog/?page='.$page;

        return $this;
    }

    public function getTransactionById($id)
    {
        $this->endPoint = 'invoicelog/'.$id;

        return $this;
    }
}
