<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Imports\TransactionImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Services\DashboardService;

class UploadController extends Controller
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
    public function index()
    {
        return view('upload.index');
    }

    public function upload(Request $request)
    {
        $request->validate([
            // 'title' => 'nullable|max:100',
            'file' => 'required|file|max:2000|mimes:xlsx,csv', // max 2MB
        ]);

        $file = $request->file('file');
        $file_name = rand().$file->getClientOriginalName();

        $path = $file->storeAs('public/files', $file_name);

        $data = ['file_name' => $file_name, 'path' => $path];

        $upload = $this->service->import($data)->upload($data);

        $error = $upload->bodyResponse;

        if (!empty($error['errors'])) {
            return back()
            ->withErrors($error['errors']);
        }

        // Excel::import(new TransactionImport, request()->file('file'));

        return back()
            ->with('success','File berhasil diupload.');
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
