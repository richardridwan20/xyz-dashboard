<?php

namespace App\Services;

use App\Services\ApiService;
use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LimitationService extends ApiService
{
    public function __construct()
    {
        parent::__construct();
        $this->pageHeaderEndPoint = '';
    }

    public function getAllDataPaginated($page)
    {
        $this->endPoint = 'detail-limitation?page='.$page;

        return $this;
    }

    public function deleteDetail($id)
    {
        $this->endPoint = 'detail-limitation/destroy/'.$id;

        return $this;
    }

    public function createDetail()
    {
        $this->endPoint = 'detail-limitation/create';

        return $this;
    }

    public function getProductOfPartner()
    {
        $this->endPoint = 'productofpartner';

        return $this;
    }

    public function getLimitation()
    {
        $this->endPoint = 'limitation';

        return $this;
    }


}
