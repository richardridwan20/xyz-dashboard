<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DashboardService;
use Illuminate\Support\Facades\Log;

class PaymentProofController extends Controller
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
        $page = $request->page;
        $column = 'created_at';
        $typeOfSort = 'DESC';
        $append = ['sort_by' => $column, 'order_by' => $typeOfSort];

        $transactions = $this->service->partnerPendingTransaction($page)->paginate();

        return view('payment-proof.index', compact('transactions', 'append'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->file('image');
        $notes = $request->input('notes');
        $transactionId = $request->input('id');
        $total = $request->input('total');
        $file_name = rand().$file->getClientOriginalName();

        $path = $file->storeAs('public/files/uploads', $file_name);

        $transactionData = $this->service->getTransactionById($transactionId)->fetch();
        $data = [
            'transaction_id' => $transactionId,
            'file_name' => $file_name,
            'path' => $path,
            'notes' => $notes,
            'total_paid' => $total,
            'plan_id' => $transactionData->bodyResponse['data']['plan']['id']
        ];

        Log::info($data);

        $upload = $this->service->uploadPaymentProof($data)->upload($data);

        $error = $upload->bodyResponse;

        if (!empty($error['errors'])) {
            return back()
            ->withErrors($error['errors']);
        } else {
            return back()
            ->with('notify','uploaded');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadInvoicePayment(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->file('image');
        $notes = $request->input('notes');
        $invoice_number = $request->input('invoice_number');
        $total = $request->input('total');
        $paid_at = $request->input('paid_at');
        $file_name = rand().$file->getClientOriginalName();

        $path = $file->storeAs('public/files/uploads', $file_name);

        $data = [
            'invoice_number' => $invoice_number,
            'file_name' => $file_name,
            'path' => $path,
            'notes' => $notes,
            'paid_at' => $paid_at,
            'total_paid' => $total
        ];

        $uploadInvoice = $this->service->invoicePayment($data)->upload($data);

        $error = $uploadInvoice->bodyResponse;

        if (!empty($error['errors'])) {
            return back()
            ->withErrors($error['errors']);
        } else {
            return back()
            ->with('notify', 'success');
        }
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
