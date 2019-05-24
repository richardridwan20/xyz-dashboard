<?php

namespace App\Services;

use App\Services\ApiService;
use App\Models\Partner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

    public function allTransactionWP()
    {
        $this->endPoint = 'transaction/all';

        return $this;
    }

    public function viewerTransaction($page)
    {
        $this->endPoint = 'transaction/viewer?page='.$page;

        return $this;
    }

    public function changeStatus($id)
    {
        $this->endPoint = 'transaction/update/'.$id;

        return $this;
    }

    public function partnerTransaction($page)
    {
        $user = Auth::user()->name;
        $partnerId = DB::table('partners')->select('id')->where('name', $user)->first();

        $this->endPoint = 'transaction/partner/'.$partnerId->id.'/?page='.$page;

        return $this;
    }

    public function getTransactionById($id)
    {
        $this->endPoint = 'transaction/'.$id;

        return $this;
    }
}
