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

    public function inputNewPartner(Request $request)
    {
        $inputPartner = $this->service->inputNewPartner()->post($request->toArray());

        if(array_key_exists("errors", $inputPartner->bodyResponse)){
            return redirect()->back()->withErrors($inputPartner->bodyResponse['errors'])->withInput();
        }else{
            return redirect()->back()->with('success', 'success');
        }
    }

    public function inputPartner(Request $request)
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
