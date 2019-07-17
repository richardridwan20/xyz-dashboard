<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DashboardService;
use Carbon\Carbon;
use PDF;

class CertificateController extends Controller
{
    public function __construct(DashboardService $service)
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
        $locale = 'id';

        $transactionData = $this->service->getTransactionById($request->id)->get();

        $data = $this->data($transactionData);

        $pdf = PDF::loadView('pdf.certificate', compact('locale', 'data'));
        return $pdf->stream('test.pdf');
    }

    private function data($transactionData)
    {
        //Age
        $dob = $transactionData['customer_id']['dob'];

        $age = Carbon::parse($dob)->age;

        return [
            'data' => $transactionData,
            'age' => $age
        ];
    }

    public function downloadCertificate(Request $request)
    {
        $certificateNumber = $request->certificate_number;

        // return Storage::download('transaction_report_'.$request->id.$request->month.$request->year.'.xlsx');
        return response()->download(storage_path('app/public/files/'.$certificateNumber.'.pdf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }
}
