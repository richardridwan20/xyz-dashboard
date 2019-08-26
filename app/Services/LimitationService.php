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
        $this->endPoint = 'detail_limit?page='.$page;

        return $this;
    }


}
