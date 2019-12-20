<?php

namespace App\Http\Controllers;

use App\Services\LimitationService;
use Illuminate\Http\Request;

class LimitationController extends Controller
{

    public function __construct(LimitationService $service)
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

        $detailLimitations = $this->service->getAllDataPaginated($page)->paginate();

        return view('limitation.index', compact('detailLimitations', 'append'));
    }

    public function showForm()
    {
        $notify = '';
        $productOfPartners = $this->service->getProductOfPartner()->get();
        $limitations = $this->service->getLimitation()->get();
        return view('limitation.form', compact('notify', 'productOfPartners', 'limitations'));
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

        return view('limitation.form', compact('notify', 'productOfPartners', 'limitations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createFromModal(Request $request)
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

        return redirect()->back()->with('notify', 'limitationCreated');
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
