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

    public function allTransaction($page, $startDate, $endDate, $name)
    {
        $this->endPoint = 'transaction/?page='.$page.'&start_date='.$startDate.'&end_date='.$endDate.'&name='.$name;

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

    public function PartnerDelete($id)
    {
        $this->endPoint = 'partner/delete/'.$id;

        return $this;
    }

    public function checkCustomer($partnerId, $customerCitizenId)
    {
        $this->endPoint = 'transaction/partner/check-customer?partner_id='.$partnerId.'&customer_citizen_id='.$customerCitizenId;

        return $this;
    }

    public function checkVoucherStatusByCode($code)
    {
        $this->endPoint = 'voucher/status?code='.$code;

        return $this;
    }

    public function inputTransaction()
    {
        $this->endPoint = 'transaction/create';

        return $this;
    }

    public function inputVoucherTransaction()
    {
        $this->endPoint = 'transaction/voucher/create';

        return $this;
    }

    public function getPartners()
    {
        $this->endPoint = 'partner/paginate';

        return $this;
    }

    public function getPartnerDataByName($name)
    {
        $this->endPoint = 'partner/getDataByName?name='.$name;

        return $this;
    }

    public function getPartnerDataById($id)
    {
        $this->endPoint = 'partner/'.$id;

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

    public function partnerTransaction($page, $startDate, $endDate, $name)
    {
        $user = Auth::user()->name;

        $this->endPoint = 'transaction/partner?partner_name='.$user.'&page='.$page.'&start_date='.$startDate.'&end_date='.$endDate.'&name='.$name;
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

    public function downloadReport($id, $name, $startDate, $endDate)
    {
        $this->endPoint = 'export?id='.$id.'&name='.$name.'&start_date='.$startDate.'&end_date='.$endDate;

        return $this;
    }

    public function downloadJournal($startDate, $endDate)
    {
        $this->endPoint = 'export_journal?start_date='.$startDate.'&end_date='.$endDate;

        return $this;
    }

    public function getVoucher($page)
    {
        $this->endPoint = 'voucher?page='.$page;

        return $this;
    }

    public function changeName()
    {
        $this->endPoint = 'product/change_name';

        return $this;
    }

    public function createVoucher()
    {
        $this->endPoint = 'voucher/create';

        return $this;
    }

    public function createProduct()
    {
        $this->endPoint = 'product/create';

        return $this;
    }

    public function createPlan()
    {
        $this->endPoint = 'plan/create';

        return $this;
    }

    public function checkPlan($plan_name, $product_id, $duration)
    {
        $this->endPoint = 'plan/check?product_id='.$product_id.'&plan_name='.$plan_name.'&duration='.$duration;

        return $this;
    }

    public function deletePlan($id)
    {
        $this->endPoint = 'plan/destroy/'.$id;

        return $this;
    }

    public function deleteProduct($id)
    {
        $this->endPoint = 'product/destroy/'.$id;

        return $this;
    }

    public function getPlanDataById($id)
    {
        $this->endPoint = 'plan/'.$id;

        return $this;
    }

    public function editPlan()
    {
        $this->endPoint = 'plan/edit';

        return $this;
    }

    public function getPaymentProof($id)
    {
        $this->endPoint = 'payment-proof/get_data_by_id?transaction_id='.$id;

        return $this;
    }

    public function getAllPlan()
    {
        $this->endPoint = 'plan';

        return $this;
    }

    public function storeSms()
    {
        $this->endPoint = 'transaction/store_sms_excel';

        return $this;
    }

    public function getDataByProductId($id)
    {
        $this->endPoint = 'plan/search/product_id?product_id='.$id;

        return $this;
    }

    public function checkPpPlan($id)
    {
        $this->endPoint = 'productofpartner/plan/id?plan_id='.$id;

        return $this;
    }

    public function createVoucherExcel($voucherCode)
    {
        $this->endPoint = 'voucher/create_excel?voucher_code='.$voucherCode;

        return $this;
    }

    public function getAllProduct()
    {
        $this->endPoint = 'product/get_all';

        return $this;
    }

    public function getAllProductPaginated()
    {
        $this->endPoint = 'product/get_all_paginated';

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
