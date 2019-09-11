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

    public function allInvoice($page)
    {
        $this->endPoint = 'invoicelog/?page='.$page;

        return $this;
    }

    public function getInvoiceLogs($page)
    {
        $this->endPoint = 'invoicelog/all?page='.$page;

        return $this;
    }

    public function getInvoiceById($id)
    {
        $this->endPoint = 'invoicelog/'.$id;

        return $this;
    }
}
