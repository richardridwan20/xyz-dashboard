<?php

namespace App\Http\Controllers;

use App\Services\ClaimService;
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
        $data = [
            'product_of_partner_id' => $request->select_product,
            'limitation_id' => $request->select_limitation,
        ];

        $createDetail = $this->service->createDetail()->post($data);

        if($createDetail->bodyResponse['code'] == 201){
            $notify = 'add';
        } else if ($createDetail->bodyResponse['code'] == 401) {
            $notify = 'exist';
        }

        $productOfPartners = $this->service->getProductOfPartner()->get();
        $limitations = $this->service->getLimitation()->get();

        return view('claim.form', compact('notify', 'productOfPartners', 'limitations'));
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
