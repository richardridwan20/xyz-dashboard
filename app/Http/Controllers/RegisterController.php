<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RegisterService;
use App\User;

class RegisterController extends Controller
{

    public function __construct(RegisterService $service)
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
        //
    }

    public function register()
    {
        $success = "failed";
        $partnerName = $this->service->partnerName()->get();
        return view('register.register_partner', compact('success', 'partnerName'));
    }

    public function registerPartner()
    {
        $success = "failed";
        return view('register.register_new_partner', compact('success'));
    }

    public function inputNewPartner(Request $request)
    {
        $rules = [
            'pname' => 'required',
            'cname' => 'required',
            'address' => 'required',
            'commision' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'body' => 'required',
            'asdata' => 'required',
            'sender' => 'required',
            'ptype' => 'required',
            'npinduk' => 'required',
        ];
        $customMessages = [
            'asdata.required' => 'please choose :attribute',
            'sender.required' => 'please choose :attribute',
            'ptype.required' => 'please choose :attribute',
            'required' => 'please fill the :attribute',
        ];
        $customAttributes = [
            'pname' => 'Partner Name',
            'cname' => 'Company Name',
            'address' => 'Partner Address',
            'commision' => 'Commision',
            'email' => 'Partner Email',
            'subject' => 'Email Subject',
            'body' => 'Email Body',
            'asdata' => 'Allow Send Data',
            'sender' => 'Email Sender',
            'ptype' => 'Payment Type',
            'npinduk' => 'Nomor Polis Induk'
        ];
        $request->validate($rules, $customMessages, $customAttributes);
        if($request->ptype == "Monthly"){
            $duration = 1;
        }else{
            $duration = 12;
        }
        $data = [
            'name' => $request->pname,
            'company_name' => $request->cname,
            'company_address' => $request->address,
            'commision' => $request->commision,
            'allow_send_data' => $request->asdata,
            'sender' => $request->sender,
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->body,
            'no_polis_induk' => $request->npinduk,
            'payment_type' => $request->ptype,
            'duration' => $duration,
        ];
        $inputPartner = $this->service->inputNewPartner()->post($data);

        return redirect()->back()->with('success', 'success');
    }

    public function inputPartner(Request $request)
    {
        $password = $request->password;
        $rules = [
            'role' => 'required',
            'name' => 'required',
            'email' => 'required|email',
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

        $success = 'success';

        return redirect()->back()->with('success', 'Partner Account Has Been Created');
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
