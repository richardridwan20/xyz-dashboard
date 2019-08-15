<?php

namespace App\Services;

use App\Services\ApiService;
use App\Models\Partner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductOfPartnerService extends ApiService
{
    public function __construct()
    {
        parent::__construct();
        $this->pageHeaderEndPoint = '';
    }

    public function allProductOfPartner()
    {
        $this->endPoint = 'productofpartner/';

        return $this;
    }

    public function getTransactionById($id)
    {
        $this->endPoint = 'productofpartner/'.$id;

        return $this;
    }

    public function product()
    {
        $this->endPoint = 'product';

        return $this;
    }

    public function plan()
    {
        $this->endPoint = 'plan';

        return $this;
    }

    public function createProductPartner()
    {
        $this->endPoint = 'productofpartner/create';

        return $this;
    }

    public function ProductOfPartnerByPartnerName($name)
    {
        $this->endPoint = 'productofpartner/partner/name?pname='.$name;

        return $this;
    }

    public function PpDelete($id)
    {
        $this->endPoint = 'productofpartner/delete/'.$id;

        return $this;
    }
}
