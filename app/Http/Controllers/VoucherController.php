<?php

namespace App\Http\Controllers;

use App\Services\DashboardService;
use App\Services\ProductOfPartnerService;
use App\Services\RegisterService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoucherController extends Controller
{
    public function __construct(DashboardService $service)
    {
        $this->service = $service;
        $this->registerService = new RegisterService;
        $this->PpService = new ProductOfPartnerService;
    }

    public function index(Request $request)
    {
        $page = $request->page;

        $column = 'created_at';
        $typeOfSort = 'DESC';
        $append = ['sort_by' => $column, 'order_by' => $typeOfSort];

        $vouchers = $this->service->getVoucher($page)->paginate();

        return view('voucher.index', compact('vouchers', 'append'));
    }

    public function showForm()
    {
        $name = Auth::user()->name;
        $partnerName = $this->registerService->partnerName()->get();
        $productOfPartners = $this->PpService->ProductOfPartnerByPartnerName($name)->get();
        return view('voucher.form', compact('notify', 'partnerName', 'productOfPartners'));
    }

    public function download(Request $request)
    {
        $voucherExcel = $this->service->createVoucherExcel($request->voucher_code)->fetch();
        if(array_key_exists("errors", $voucherExcel->bodyResponse)){
            return redirect()->back()->withErrors($voucherExcel->bodyResponse['errors'])->with('notify', 'voucherNotFound');
        }else{
            return response()->download(storage_path('app/public/files/vouchers/'.$voucherExcel->bodyResponse['file_name']));
        }
    }

    public function create(Request $request)
    {
        $data = [
            'voucher_code' => $request->voucher_code,
            'voucher_quantity' => $request->voucher_quantity,
            'expiry_date' => $request->expiry,
            'partner_name' => $request->partner_name,
            'plan_id' => $request->plan_id,
            'protection_duration' => $request->duration
        ];

        $inputVoucher = $this->service->createVoucher()->post($data);

        if($inputVoucher->bodyResponse['code'] == 201){
            return redirect()->back()->with('notify', 'add');
        }
    }

    public function deleteVoucher($id)
    {
        $deleteVoucher = $this->service->deleteVoucher($id)->get();

        return redirect()->back()->with('notify', 'delete');
    }
}
