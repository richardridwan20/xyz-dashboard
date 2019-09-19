<?php

namespace App\Http\Controllers;

use App\Services\DashboardService;
use App\Services\RegisterService;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function __construct(DashboardService $service)
    {
        $this->service = $service;
        $this->registerService = new RegisterService;
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
        $partnerName = $this->registerService->partnerName()->get();
        return view('voucher.form', compact('notify','partnerName'));
    }

    public function create(Request $request)
    {
        // $rules = [
        //     'aname' => 'required',
        //     'ausername' => 'required|unique:agents,username',
        //     'aphone' => 'required|numeric',
        //     'apassword' => 'required',
        //     'acpassword' => 'required|same:apassword',
        //     'adob' => 'required',
        //     'acitizen_id' => 'required|digits:16'
        // ];
        // $customMessages = [

        // ];
        // $customAttributes = [
        //     'aname' => 'Agent / b
        //     +ranch Name',
        //     'ausername' => 'Agent Username',
        //     'aphone' => 'Agent Phone Number',
        //     'apassword' => 'Agent Password',
        //     'acpassword' => 'Confirm Password',
        //     'adob' => 'Agent Date of Birth',
        //     'acitizen_id' => 'Agent Citizen Id'
        // ];

        // $request->validate($rules, $customMessages, $customAttributes);

        $data = [
            'voucher_code' => $request->voucher_code,
            'voucher_quantity' => $request->voucher_quantity,
            'expiry_date' => $request->expiry,
            'partner' => $request->partner_name,
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
