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

    public function downloadFailReport($fileName)
    {
        return response()->download(storage_path('app/public/files/reports/fail/'.$fileName));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:2000', // max 2MB
        ]);

        $extensions = array("xlsx");

        $result = array($request->file('file')->getClientOriginalExtension());

        if(in_array($result[0],$extensions)){

            $file = $request->file('file');
            $file_name = rand().$file->getClientOriginalName();

            $path = $file->storeAs('public/files/uploads', $file_name);

            $data = ['file_name' => $file_name, 'path' => $path];

            $upload = $this->service->import($data)->upload($data);

            $error = $upload->bodyResponse;

            if ($error['code'] == 422){
                return back()
                    ->with("error", $error);
            }else{
                return back()
                    ->with('notify','uploaded');
            }

        }else{
            return back()
                ->with('notify','extension');
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
