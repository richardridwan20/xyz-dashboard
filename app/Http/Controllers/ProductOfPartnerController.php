<?php

namespace App\Http\Controllers;

use App\Rules\notExist;
use App\Services\DashboardService;
use Illuminate\Http\Request;

use App\Services\ProductOfPartnerService;
use App\Services\RegisterService;

class ProductOfPartnerController extends Controller
{
    public function __construct(ProductOfPartnerService $service)
    {
        $this->service = $service;
        $this->registerService = new RegisterService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productOfPartners = $this->service->allProductOfPartner()->get();
        $partnerName = $this->registerService->partnerName()->get();
        $plan = $this->service->plan()->fetch();
        $column = 'partner_id';
        $typeOfSort = 'DESC';
        $append = ['sort_by' => $column, 'order_by' => $typeOfSort];

        // dd($plan->bodyResponse['data']);

        return view('productofpartner.index', compact('productOfPartners', 'append', 'partnerName','plan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $rules = [
            'plan_id' => ['required', new notExist($request->partner_id)],
            'partner_id' => 'required',
            'quota' => 'required|numeric'
        ];

        $request->validate($rules);

        $data = [
            'plan_id' => $request->plan_id,
            'partner_id' => $request->partner_id,
            'quota' => $request->quota,
        ];

        $create = $this->service->createProductPartner()->post($data);

        return redirect()->back()->with('notify', 'created');
    }

    public function changeQuota(Request $request)
    {
        $rules = [
            'PpId' => 'required',
            'quota' => 'required|numeric'
        ];

        $request->validate($rules);

        $changeQuota = $this->service->changeQuota($request->PpId, $request->quota)->fetch();

        return redirect()->back()->with('notify', 'quotaChanged');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = $this->service->PpDelete($id)->fetch();

        return redirect()->back()->with('notify', 'deleted');
    }
}
