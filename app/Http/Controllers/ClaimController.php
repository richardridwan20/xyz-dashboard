<?php

namespace App\Http\Controllers;

use App\Services\ClaimService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClaimController extends Controller
{

    public function __construct(ClaimService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $column = 'created_at';
        $typeOfSort = 'DESC';
        $append = ['sort_by' => $column, 'order_by' => $typeOfSort];

        $page = $request->page;

        $claims = $this->service->getClaim($page)->paginate();

        return view('claim.index', compact('claims', 'append'));
    }

    public function showForm($id)
    {
        $notify = '';
        $transactionId = $id;
        $productOfPartners = $this->service->getProductOfPartner()->get();
        $claims = $this->service->getClaim()->get();
        return view('claim.form', compact('notify', 'productOfPartners', 'claims', 'transactionId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->claim_date != null){
            $claimDate = Carbon::createFromFormat("d/m/Y", $request->claim_date)->format("Y-m-d");
            $request->merge([
                "claim_date" => $claimDate,
            ]);
        }
        if($request->hospital_in != null){
            $hospitalIn = Carbon::createFromFormat("d/m/Y", $request->hospital_in)->format("Y-m-d");

            $request->merge([
                "hospital_in" => $hospitalIn,
            ]);
        }
        if($request->hospital_out != null){
            $hospitalOut = Carbon::createFromFormat("d/m/Y", $request->hospital_out)->format("Y-m-d");

            $request->merge([
                "hospital_out" => $hospitalOut,
            ]);
        }

        $data = [
            'transaction_id' => $request->transaction_id,
            'claim_type' => $request->claim_type,
            'claim_date' => $request->claim_date,
            'claim_decision' => $request->claim_decision,
            'hospital_in' => $request->hospital_in,
            'hospital_out' => $request->hospital_out,
            'claim_reason' => $request->claim_reason,
            'claim_amount' => $request->claim_amount,
        ];

        $claimAdded = $this->service->createClaim()->post($data);

        if(array_key_exists("errors", $claimAdded->bodyResponse)){
            return redirect()->back()->withErrors($claimAdded->bodyResponse['errors'])->withInput()
            ->with('notify', 'error');
        } else {
            return redirect()->back()->with('notify', 'success');
        }
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

    public function deleteDetailLimitation($id)
    {
        $deleteLimitation = $this->service->deleteDetail($id)->get();

        return redirect()->back()->with('notify', 'delete');
    }
}
