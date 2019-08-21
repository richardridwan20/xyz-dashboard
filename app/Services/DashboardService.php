<?php

namespace App\Services;

use App\Services\ApiService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardService extends ApiService
{
    public function __construct()
    {
        parent::__construct();
        $this->pageHeaderEndPoint = '';
    }

    public function login()
    {
        $this->endPoint = 'login';
        return $this;
    }

    public function createAgent()
    {
        $this->endPoint = 'agent/create';
        return $this;
    }

    public function deleteAgent($id)
    {
        $this->endPoint = 'agent/destroy/'.$id;
        return $this;
    }

    public function allTransaction($page, $month, $year)
    {
        $this->endPoint = 'transaction/?page='.$page.'&month='.$month.'&year='.$year;

        return $this;
    }

    public function allTransactionByName($page, $name)
    {
        $this->endPoint = 'transaction/search-name?page='.$page.'&insured_name='.$name;

        return $this;
    }

    public function allTransactionWP()
    {
        $this->endPoint = 'transaction/all';

        return $this;
    }

    public function checkCustomer($partnerId, $customerCitizenId)
    {
        $this->endPoint = 'transaction/partner/check-customer?partner_id='.$partnerId.'&customer_citizen_id='.$customerCitizenId;

        return $this;
    }

    public function inputTransaction()
    {
        $this->endPoint = 'transaction/create';

        return $this;
    }

    public function getPartnerDataByName($name)
    {
        $this->endPoint = 'partner/getDataByName?name='.$name;

        return $this;
    }

    public function changeQuota()
    {
        $this->endPoint = 'partner/change-quota';

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

    public function getPartnerDataPaginated()
    {
        $this->endPoint = 'partner/paginate';
        return $this;
    }

    public function getPartnerDataPaginatedByName($name)
    {
        $this->endPoint = 'partner/paginate/'.$name;

        return $this;
    }

    public function partnerTransaction($page, $month, $year)
    {
        $user = Auth::user()->name;

        $this->endPoint = 'transaction/partner?partner_name='.$user.'&page='.$page.'&month='.$month.'&year='.$year;
        return $this;
    }

    public function partnerPendingTransaction($page)
    {
        $user = Auth::user()->name;

        $this->endPoint = 'transaction/partner/pending?partner_name='.$user.'&page='.$page.'';
        return $this;
    }

    public function allAgent($page)
    {
        $this->endPoint = 'agent/all?page='.$page;
        return $this;
    }

    public function partnerAgent($page, $partnerName)
    {
        $this->endPoint = 'agent/partner/'.$partnerName.'?page='.$page;
        return $this;
    }

    public function partnerTransactionByName($page, $name)
    {
        $user = Auth::user()->name;
        $this->endPoint = 'transaction/partner/search-name?partner_name='.$user.'&page='.$page.'&insured_name='.$name;
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
        $this->endPoint = 'detail-transaction/?id='.$id;

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

    public function getVoucher($page)
    {
        $this->endPoint = 'voucher?page='.$page;

        return $this;
    }

    public function createVoucher()
    {
        $this->endPoint = 'voucher/create';

        return $this;
    }

    public function deleteVoucher($id)
    {
        $this->endPoint = 'voucher/destroy/'.$id;
        return $this;
    }

    public function createInvoice($invoiceNumber)
    {
        $this->endPoint = 'invoice?invoice_number='.$invoiceNumber;

        return $this;
    }

    public function import(array $data)
    {
        $this->endPoint = 'import?filename='.$data['file_name'];

        return $this;
    }

    public function uploadPaymentProof(array $data)
    {
        $this->endPoint = 'payment-proof?filename='.$data['file_name'].'&transaction_id='.$data['transaction_id'].'&notes='.$data['notes'].'&total_paid='.$data['total_paid'];

        return $this;
    }

    public function invoicePayment(array $data)
    {
        $this->endPoint = 'invoice-payment?filename='.$data['file_name'].'&invoice_number='.$data['invoice_number'].'&notes='.$data['notes'].'&total_paid='.$data['total_paid'].'&paid_at='.$data['paid_at'];

        return $this;
    }
}
