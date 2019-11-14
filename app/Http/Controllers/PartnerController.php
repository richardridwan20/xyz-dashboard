<?php

namespace App\Http\Controllers;

use App\Services\DashboardService;
use App\Services\RegisterService;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function __construct(DashboardService $service)
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
        $column = 'created_at';
        $typeOfSort = 'DESC';
        $append = ['sort_by' => $column, 'order_by' => $typeOfSort];

        $page = $request->page;

        $partners = $this->service->getPartners($page)->paginate();

        return view('partner.index', compact('partners', 'append'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showForm(Request $request)
    {
        $success = "failed";
        return view('partner.form', compact('success'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRoleForm(Request $request)
    {
        $partnerName = $this->registerService->partnerName()->get();
        return view('partner.form-role', compact('success', 'partnerName'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inputPartner(Request $request)
    {
        $inputPartner = $this->registerService->inputNewPartner()->post($request->toArray());

        if(array_key_exists("errors", $inputPartner->bodyResponse)){
            return redirect()->back()->withErrors($inputPartner->bodyResponse['errors'])->withInput();
        }else{
            return redirect('/partner')->with('success', 'success');
        }
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inputPartnerRole(Request $request)
    {
        $password = $request->password;
        $rules = [
            'role' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required|in:'.$password
        ];
        $customMessages = [
            'role.required' => 'please choose role',
            'required' => 'please fill the :attribute',
            'alpha' => ':attribute must be alphabet',
            'password_confirmation.in' => ':attribute must same with the password',
        ];
        $customAttributes = [
            'password_confirmation' => 'confirm password'
        ];
        $request->validate($rules, $customMessages, $customAttributes);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];
        $inputPartner = $this->service->inputPartner()->post($data);

        if($request->role == 'financial'){
            $user = User::find($inputPartner->bodyResponse['id']);
            $user->assignRole('partner financial');
        }else if ($request->role == 'operation'){
            $user = User::find($inputPartner->bodyResponse['id']);
            $user->assignRole('partner operation');
        }else if($request->role == 'viewer'){
            $user = User::find($inputPartner->bodyResponse['id']);
            $user->assignRole('partner viewer');
        }

        $notify = 'created';

        return redirect()->back()->with('notify','created');
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
