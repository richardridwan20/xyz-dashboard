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

    public function allTransaction($page, $month, $year)
    {
        $this->endPoint = 'transaction/?page='.$page.'&month='.$month.'&year='.$year;

        return $this;
    }

    public function allTransactionByName($page, $name)
    {
        $this->endPoint = 'transaction/search_name?page='.$page.'&name='.$name;

        return $this;
    }

    public function allTransactionWP()
    {
        $this->endPoint = 'transaction/all';

        return $this;
    }

    public function checkCustomer($partnerId, $customerCitizenId)
    {
        $this->endPoint = 'transaction/partner/checkcustomer/'.$partnerId.'/'.$customerCitizenId;

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

    public function partnerTransaction($page, $month, $year)
    {
        $user = Auth::user()->name;

        $this->endPoint = 'transaction/partner?name='.$user.'&page='.$page.'&month='.$month.'&year='.$year;;
        return $this;
    }

    public function partnerTransactionByName($page, $name)
    {
        $user = Auth::user()->name;
        $this->endPoint = 'transaction/partner/search_name?user='.$user.'&page='.$page.'&name='.$name;
        return $this;
    }

    public function partnerTransactionWP()
    {
        $user = Auth::user()->name;
        $partnerId = DB::table('partners')->select('id')->where('name', $user)->first();
        $this->endPoint = 'transaction/partner/'.$partnerId->id.'/all';

        return $this;
    }

    public function getTransactionById($id)
    {
        $this->endPoint = 'detail_transaction/?id='.$id;

        return $this;
    }

    public function updateTransactionById($id, $data, $value)
    {
        $this->endPoint = 'transaction/update/'.$id.'?'.$data.'='.$value;

        return $this;
    }

    public function downloadReport($id, $name, $month, $year)
    {
        $this->endPoint = 'export?id='.$id.'&name='.$name.'&month='.$month.'&year='.$year;

        return $this;
    }

    public function import(array $data)
    {
        $this->endPoint = 'import?filename='.$data['file_name'];

        return $this;
    }
}
