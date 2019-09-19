<?php

namespace App\Services;

use App\Services\ApiService;
use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RegisterService extends ApiService
{
    public function __construct()
    {
        parent::__construct();
        $this->pageHeaderEndPoint = '';
    }

    public function inputPartner()
    {
        $this->endPoint = 'partner/create-account';

        return $this;
    }

    public function inputNewPartner()
    {
        $this->endPoint = 'partner/create';

        return $this;
    }

    public function partnerName()
    {
        $this->endPoint = 'partner/name';

        return $this;
    }


}
