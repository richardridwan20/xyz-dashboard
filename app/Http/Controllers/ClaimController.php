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
        if($request->event_date != null){
            $eventDate = Carbon::createFromFormat("d/m/Y", $request->event_date)->format("Y-m-d");
            $request->merge([
                "event_date" => $eventDate,
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
        if($request->decision_date != null){
            $decisionDate = Carbon::createFromFormat("d/m/Y", $request->decision_date)->format("Y-m-d");
            $request->merge([
                "decision_date" => $decisionDate,
            ]);
        }

        $data = [
            'transaction_id' => $request->transaction_id,
            'cause_of_claim' => $request->cause_of_claim,
            'claim_date' => $request->claim_date,
            'event_date' => $request->event_date,
            'decision_date' => $request->decision_date,
            'claim_decision' => $request->claim_decision,
            'hospital_in' => $request->hospital_in,
            'hospital_out' => $request->hospital_out,
            'diagnose' => $request->diagnose,
            'claim_amount' => $request->claim_amount,
        ];

        $claimAdded = $this->service->createClaim()->post($data);

        if(array_key_exists("errors", $claimAdded->bodyResponse)){
            return redirect()->back()->withErrors($claimAdded->bodyResponse['errors'])->withInput()
            ->with('notify', 'error');
        } else {
            return redirect()->route('claim.index')->with('notify', 'created');
        }
    }

    public function downloadReport(Request $request)
    {
        $date = $request->input('daterange');
        $formatedDate = explode('-', $date);

        if ($date != null){
            $startDate = Carbon::parse($formatedDate[0])->format('Y-m-d');
            $endDate = Carbon::parse($formatedDate[1])->endOfDay()->format('Y-m-d');
        } else {
            $startDate = Carbon::now()->subDays(29)->format('Y-m-d');
            $endDate = Carbon::now()->endOfDay()->format('Y-m-d');
        }

        $claimReport = $this->service->downloadReport($startDate, $endDate)->fetch();

        return response()->download(storage_path('app/public/files/reports/claim/claim_report_'.$startDate.'_'.$endDate.'.xlsx'));
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
