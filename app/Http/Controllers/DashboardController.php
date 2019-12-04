<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App\Models\Agent;
use App\Rules\CheckVoucherStatus;
use Illuminate\Support\Facades\Session;
use App\Services\DashboardService;
use App\Services\InvoiceLogService;
use App\Services\ProductOfPartnerService;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public $accessToken;

    public function __construct(DashboardService $service)
    {
        $this->service = $service;
        $this->invoiceService = new InvoiceLogService;
        $this->PpService = new ProductOfPartnerService;
    }

    public function index(Request $request)
    {
        $this->accessToken = Session::get('token');
        if(Role::count() == 0){
            // Create Role
            Role::create(['name'=>'supadmin']);//1
            Role::create(['name'=>'treasury']);//2
            Role::create(['name'=>'financial']);//3
            Role::create(['name'=>'operation']);//4
            Role::create(['name'=>'viewer']);//5
            Role::create(['name'=>'partner financial']);//6
            Role::create(['name'=>'partner operation']);//7
            Role::create(['name'=>'partner viewer']);//8
            Role::create(['name'=>'agent']);//9
            Role::create(['name'=>'claim']);//10

            //Create Permission
            Permission::create(['name'=>'view all transaction']);//1
            Permission::create(['name'=>'view all transaction by partner name']);//2
            Permission::create(['name'=>'view report']);//3
            Permission::create(['name'=>'update status paid']);//4
            Permission::create(['name'=>'update status cancel']);//5
            Permission::create(['name'=>'input invoice number']);//6
            Permission::create(['name'=>'create certificate']);//7
            Permission::create(['name'=>'view upload form']);//8
            Permission::create(['name'=>'download report']);//9
            Permission::create(['name'=>'view by search']);//10
            Permission::create(['name'=>'input transaction data']);//11
            Permission::create(['name'=>'register partner']);//12

            $permission1 = Permission::findById(1);
            $permission2 = Permission::findById(2);
            $permission3 = Permission::findById(3);
            $permission4 = Permission::findById(4);
            $permission5 = Permission::findById(5);
            $permission6 = Permission::findById(6);
            $permission7 = Permission::findById(7);
            $permission8 = Permission::findById(8);
            $permission9 = Permission::findById(9);
            $permission10 = Permission::findById(10);
            $permission11 = Permission::findById(11);
            $permission12 = Permission::findById(12);

            //Giving Role Permission
            //supadmin
            $role = Role::findById(1);
            $role->givePermissionTo($permission1);
            $role->givePermissionTo($permission2);
            $role->givePermissionTo($permission3);
            $role->givePermissionTo($permission4);
            $role->givePermissionTo($permission5);
            $role->givePermissionTo($permission6);
            $role->givePermissionTo($permission7);
            $role->givePermissionTo($permission8);
            $role->givePermissionTo($permission9);
            $role->givePermissionTo($permission10);
            $role->givePermissionTo($permission11);
            $role->givePermissionTo($permission12);

            //treasury
            $role = Role::findById(2);
            $role->givePermissionTo($permission1);
            $role->givePermissionTo($permission3);
            $role->givePermissionTo($permission6);
            $role->givePermissionTo($permission9);
            $role->givePermissionTo($permission10);

            //financial
            $role = Role::findById(3);
            $role->givePermissionTo($permission1);
            $role->givePermissionTo($permission5);
            $role->givePermissionTo($permission6);
            $role->givePermissionTo($permission8);
            $role->givePermissionTo($permission10);
            $role->givePermissionTo($permission12);

            //operation
            $role = Role::findById(4);
            $role->givePermissionTo($permission1);
            $role->givePermissionTo($permission5);
            $role->givePermissionTo($permission6);
            $role->givePermissionTo($permission8);
            $role->givePermissionTo($permission10);
            $role->givePermissionTo($permission12);

            //viewer
            $role = Role::findById(5);
            $role->givePermissionTo($permission10);

            //partner financial
            $role = Role::findById(6);
            $role->givePermissionTo($permission2);
            $role->givePermissionTo($permission4);
            $role->givePermissionTo($permission7);
            $role->givePermissionTo($permission10);

            //partner operation
            $role = Role::findById(7);
            $role->givePermissionTo($permission4);
            $role->givePermissionTo($permission7);
            $role->givePermissionTo($permission10);

            //partner viewer
            $role = Role::findById(8);
            $role->givePermissionTo($permission10);

            //agent
            $role = Role::findById(9);
            $role->givePermissionTo($permission11);

            //Assign Account to Role
            $user = User::find(1);
            $user->assignRole('supadmin');

            $user = User::find(2);
            $user->assignRole('treasury');

            $user = User::find(3);
            $user->assignRole('financial');

            $user = User::find(4);
            $user->assignRole('operation');

            $user = User::find(5);
            $user->assignRole('viewer');

            $user = User::find(6);
            $user->assignRole('partner financial');

            $user = User::find(7);
            $user->assignRole('partner operation');

            $user = User::find(8);
            $user->assignRole('partner viewer');

            $user = User::find(9);
            $user->assignRole('partner financial');

            $user = User::find(10);
            $user->assignRole('partner operation');

            $user = User::find(11);
            $user->assignRole('partner viewer');

            $user = User::find(12);
            $user->assignRole('partner financial');

            $user = User::find(13);
            $user->assignRole('partner operation');

            $user = User::find(14);
            $user->assignRole('partner viewer');

            $user = User::find(15);
            $user->assignRole('partner financial');

            $user = User::find(16);
            $user->assignRole('partner operation');

            $user = User::find(17);
            $user->assignRole('partner viewer');

            $user = User::find(18);
            $user->assignRole('claim');

            $user = Agent::find(1);
            $user->assignRole('agent');
        }

        $column = 'created_at';
        $typeOfSort = 'DESC';

        $append = ['sort_by' => $column, 'order_by' => $typeOfSort];

        $page = $request->page;

        $date = $request->input('daterange');
        $formatedDate = explode('-', $date);

        if ($date != null){
            $startDate = Carbon::parse($formatedDate[0])->format('Y-m-d');
            $endDate = Carbon::parse($formatedDate[1])->endOfDay()->format('Y-m-d');
        } else {
            $startDate = Carbon::now()->subDays(29)->format('Y-m-d');
            $endDate = Carbon::now()->endOfDay()->format('Y-m-d');
        }

        $name = $request->input('text-name');
        $name = strtolower($name);
        $name = ucwords($name);

        if ($request->status == null) {
            // $startDate = Carbon::now()->subDays(29)->format('Y-m-d');
            // $endDate = Carbon::now()->format('Y-m-d');
        } else{
            $request->session()->flash('start_date', $startDate);
            $request->session()->flash('end_date', $endDate);
            $request->session()->flash('name', $name);
            $request->session()->flash('date', $date);
        }

        $data = ['name' => $name, 'date' => $date, 'start_date' => $startDate, 'end_date' => $endDate];

        $user = User::find(Auth::id());

        $sumcommission = 0;
        $sumPpncommission = 0;
        $sumTotalcommission = 0;
        $sumPphcommission = 0;
        $sumPartnerBill = 0;
        $sumTotalPartnerBill = 0;
        $totalTransaction = 0;

        $partnerName = Auth::user()->name;
        $partner = $this->service->getPartnerDataByName($partnerName)->get();
        $partnerId = $partner['id'];
        $countData = $this->service->countData($partnerId)->get();

        if($user->hasRole('supadmin') || $user->hasRole('treasury') || $user->hasRole('financial') || $user->hasRole('operation') || $user->hasRole('claim')){
            $transactions = $this->service->allTransaction($page, $startDate, $endDate, $name)->paginate();
            $transactionsCount = $this->service->allTransaction($page, $startDate, $endDate, $name)->get();
        }else if($user->hasRole('partner financial') || $user->hasRole('partner operation')){
            $transactions = $this->service->partnerTransaction($page, $startDate, $endDate, $name)->paginate();
            $transactionsCount = $this->service->partnerTransaction($page, $startDate, $endDate, $name)->get();
        }else if($user->hasRole('viewer')){
            $transactions = $this->service->allTransactionByName($page, $name)->paginate();
            $transactionsCount = $this->service->allTransactionByName($page, $name)->get();
        }else if($user->hasRole('partner viewer')){
            $transactions = $this->service->partnerTransactionByName($page, $name)->paginate();
            $transactionsCount = $this->service->partnerTransactionByName($page, $name)->get();
        }

        foreach ($transactionsCount as $transaction){

            if($transaction['status'] != "Canceled" && $transaction['status'] != "Waiting For Payment"){
                $commission = $transaction['partner_id']['commission'];
                $type = $transaction['plan_id']['duration'];
                $duration = $transaction['protection_duration'];

                if ($type == 'Yearly'){
                    $duration = $duration/12;
                    $premium = $transaction['plan_id']['premium'];
                    $grossPremium = $premium * $duration;
                }else if ($type == 'Monthly'){
                    $premium = $transaction['plan_id']['premium'];
                    $grossPremium = $premium;
                }

                $pcommission = ($grossPremium * $commission) * 0.9;
                $ppncommission = ($grossPremium * $commission) * 0.1;
                $totalcommission = ($grossPremium * $commission);
                $pphcommission = ($pcommission * 0.02);
                $partnerBill = ($totalcommission - $pphcommission);
                $totalPartnerBill = ($grossPremium - $partnerBill);
                $sumcommission += $pcommission;
                $sumPpncommission += $ppncommission;
                $sumTotalcommission += $totalcommission;
                $sumPphcommission += $pphcommission;
                $sumPartnerBill += $partnerBill;
                $sumTotalPartnerBill += $totalPartnerBill;
                $totalTransaction ++;
            }
        }

        return view('dashboard.index', compact('transactions', 'countData','append', 'data', 'sumcommission', 'sumPpncommission', 'sumTotalcommission', 'sumPphcommission', 'sumPartnerBill', 'sumTotalPartnerBill', 'name'));
    }

    public function inputTransaction(Request $request)
    {
        // $year = Carbon::today()->year;
        // $month = Carbon::today()->month;
        // $day = Carbon::today()->day;
        // $tz = "Asia/Jakarta";
        // $minAge = Carbon::createFromDate($year-18, $month, $day, $tz);
        // $minCustomerAge = Carbon::createFromDate($year-17, $month, $day, $tz);
        // $maxAge = Carbon::createFromDate($year-55, $month, $day, $tz);

        // $rules = [
        //     'plan_id' => 'required',
        //     'duration' => 'required',
        //     'phname' => 'required|regex:/^[\pL\s]+$/u',
        //     'phcitizen_id' => 'required|digits:16',
        //     'phdob' => 'required|before_or_equal:'.$minCustomerAge,
        //     'phemail' => 'required|email',
        //     'irelation' => 'required',
        //     'iname' => 'required|regex:/^[\pL\s]+$/u',
        //     'idob' => 'required|before_or_equal:'.$minAge.'|after_or_equal:'.$maxAge,
        //     'b1gender' => 'nullable',
        //     'b1relation' => 'required',
        //     'b1name' => 'required|regex:/^[\pL\s]+$/u',
        //     'b2relation' => 'nullable|required_with:b2name',
        //     'b2name' => 'nullable|required_with:b2relation|regex:/^[\pL\s]+$/u',
        //     'b3relation' => 'nullable|required_with:b3name',
        //     'b3name' => 'nullable|required_with:b3relation|regex:/^[\pL\s]+$/u',
        //     'b4relation' => 'nullable|required_with:b4name',
        //     'b4name' => 'nullable|required_with:b4relation|regex:/^[\pL\s]+$/u',
        // ];

        // $customMessages = [
        //     'plan_id.required' => 'please select the :attribute',
        //     'phgender.required' => 'please select the :attribute',
        //     'before_or_equal' => ':attribute should more than 18 years',
        //     'after_or_equal' => ':attribute should less than 55 years'
        // ];

        // $customAttributes = [
        //     'plan_id' => 'Product Plan',
        //     'duration' => 'Protection Duration',
        //     'phgender' => 'Policy Holder Gender',
        //     'phname' => 'Policy Holder Name',
        //     'phcitizen_id' => 'Policy Holder Citizen Id',
        //     'phdob' => 'Policy Holder Date of Birth',
        //     'phemail' => 'Policy Holder Email',
        //     'igender' => 'Insured Gender',
        //     'irelation' => 'Insured Relation',
        //     'iname' => 'Insured Name',
        //     'icitizen_id' => 'Insured Citizen Id',
        //     'idob' => 'Insured Date of Birth',
        //     'iemail' => 'Insured Email',
        //     'b1gender' => 'First Beneficiary Gender',
        //     'b1relation' => 'First Beneficiary Relation',
        //     'b1name' => 'First Beneficiary Name',
        //     'b2relation' => 'Second Beneficiary Relation',
        //     'b2name' => 'Second Beneficiary Name',
        //     'b3relation' => 'Third Beneficiary Relation',
        //     'b3name' => 'Third Beneficiary Name',
        //     'b4relation' => 'Fourth Beneficiary Relation',
        //     'b4name' => 'Fourth Beneficiary Name',
        // ];

        // $validator = Validator::make($request->all(),$rules, $customMessages, $customAttributes);

        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        if($request->has("plan_id")){
            $planContainer = $request->plan_id;
            $planArray = explode("|", $request->plan_id);
            $request->merge(["plan_id" => $planArray[0]]);
            $request->merge(["duration_type" => $planArray[1]]);
            $request->merge(["premium" => $planArray[2]]);
        }

        if($request->insured_dob != null){
            $insuredDob = Carbon::createFromFormat("d/m/Y", $request->insured_dob)->format("Y-m-d");
            $request->merge([
                "insured_dob" => $insuredDob,
            ]);
        }
        if($request->customer_dob != null){
            $PHDob = Carbon::createFromFormat("d/m/Y", $request->customer_dob)->format("Y-m-d");
            $request->merge([
                "customer_dob" => $PHDob,
            ]);
        }

        $name = Auth::user()->name;
        $partner = $this->service->getPartnerDataByName($name)->get();
        $request->merge(['partner_id' => $partner['id']]);
        if($request->has('duration_type')){
            if($request->duration_type == "Yearly"){
                $durationYear = $request->protection_duration/12;
                $total_paid = $durationYear*$request->premium;
            }else{
                $total_paid = $request->protection_duration * $request->premium;
            }
            $request->merge(['total_paid' => $total_paid]);
        }

        // $data = [
        //     'partner_id' => $partner["id"],
        //     'plan_id' => $request->plan_id,
        //     'insured_relation' => $request->irelation,
        //     'insured_name' => $request->iname,
        //     'insured_dob' => $request->idob,
        //     'protection_duration' => $request->duration,
        //     'customer_name' => $request->phname,
        //     'customer_dob' => $request->phdob,
        //     'customer_citizen_id' => $request->phcitizen_id,
        //     'customer_email' => $request->phemail,
        //     'total_paid' => $total_paid,
        //     'note' => $request->note,
        //     '1_bene_relation' => $request->b1relation,
        //     '1_bene_name' => $request->b1name,
        //     '1_bene_dob' => $request->b1dob,
        //     '1_bene_gender' => $request->b1gender,
        //     '1_bene_email' => $request->b1email,
        // ];


        // for($i=2;$i<=4;$i++){
        //     if($request['b'.$i.'name'] != null){
        //         $data = $data + [
        //             $i.'_bene_relation' => $request['b'.$i.'relation'],
        //             $i.'_bene_name' => $request['b'.$i.'name'],
        //             $i.'_bene_dob' => $request['b'.$i.'dob'],
        //             $i.'_bene_gender' => $request['b'.$i.'gender'],
        //             $i.'_bene_email' => $request['b'.$i.'email'],
        //         ];
        //     }
        // }

        $transactionAdded = $this->service->inputTransaction()->post($request->toArray());

        if($request->insured_dob != null){
            $insuredDob = Carbon::createFromFormat("Y-m-d", $request->insured_dob)->format("d/m/Y");
            $request->merge([
                "insured_dob" => $insuredDob,
            ]);
        }
        if($request->customer_dob != null){
            $PHDob = Carbon::createFromFormat("Y-m-d", $request->customer_dob)->format("d/m/Y");
            $request->merge([
                "customer_dob" => $PHDob,
            ]);
        }
        if(array_key_exists("errors", $transactionAdded->bodyResponse)){
            if(array_key_exists("plan_id", $transactionAdded->bodyResponse['errors'])){
                if($transactionAdded->bodyResponse['errors']['plan_id'][0] != "plan id harus diisi"){
                    return redirect()->back()->with('notify', '5 insurance')->withErrors($transactionAdded->bodyResponse['errors'])->withInput();
                }else{
                    return redirect()->back()->withErrors($transactionAdded->bodyResponse['errors'])->withInput();
                }
            }else{
                return redirect()->back()->withErrors($transactionAdded->bodyResponse['errors'])->withInput();
            }
        } else {
            return redirect()->back()->with('notify', 'success');
        }

    }

    public function inputVoucherTransaction(Request $request)
    {
        // dd($this->service->checkVoucherStatusByCode($request->voucher)->fetch()->bodyResponse['status']);
        // $year = Carbon::today()->year;
        // $month = Carbon::today()->month;
        // $day = Carbon::today()->day;
        // $tz = "Asia/Jakarta";
        // $minAge = Carbon::createFromDate($year-18, $month, $day, $tz);
        // $minCustomerAge = Carbon::createFromDate($year-17, $month, $day, $tz);
        // $maxAge = Carbon::createFromDate($year-55, $month, $day, $tz);
        // $rules = [
        //     'plan_id' => 'required',
        //     'duration' => 'required',
        //     'phname' => 'required|regex:/^[\pL\s]+$/u',
        //     'phcitizen_id' => 'required|digits:16',
        //     'phdob' => 'required|before_or_equal:'.$minCustomerAge,
        //     'phemail' => 'required|email',
        //     'irelation' => 'required',
        //     'iname' => 'required|regex:/^[\pL\s]+$/u',
        //     'idob' => 'required|before_or_equal:'.$minAge.'|after_or_equal:'.$maxAge,
        //     'b1gender' => 'nullable',
        //     'b1relation' => 'required',
        //     'b1name' => 'required|regex:/^[\pL\s]+$/u',
        //     'b2relation' => 'nullable|required_with:b2name',
        //     'b2name' => 'nullable|required_with:b2relation|regex:/^[\pL\s]+$/u',
        //     'b3relation' => 'nullable|required_with:b3name',
        //     'b3name' => 'nullable|required_with:b3relation|regex:/^[\pL\s]+$/u',
        //     'b4relation' => 'nullable|required_with:b4name',
        //     'b4name' => 'nullable|required_with:b4relation|regex:/^[\pL\s]+$/u',
        //     'voucher' => ['required','exists:reserved_vouchers,voucher_code', new CheckVoucherStatus()]
        // ];
        // $customMessages = [
        //     'plan_id.required' => 'please select the :attribute',
        //     'phgender.required' => 'please select the :attribute',
        //     'before_or_equal' => ':attribute should more than 18 years',
        //     'after_or_equal' => ':attribute should less than 55 years'
        // ];
        // $customAttributes = [
        //     'plan_id' => 'Product Plan',
        //     'duration' => 'Protection Duration',
        //     'phgender' => 'Policy Holder Gender',
        //     'phname' => 'Policy Holder Name',
        //     'phcitizen_id' => 'Policy Holder Citizen Id',
        //     'phdob' => 'Policy Holder Date of Birth',
        //     'phemail' => 'Policy Holder Email',
        //     'igender' => 'Insured Gender',
        //     'irelation' => 'Insured Relation',
        //     'iname' => 'Insured Name',
        //     'icitizen_id' => 'Insured Citizen Id',
        //     'idob' => 'Insured Date of Birth',
        //     'iemail' => 'Insured Email',
        //     'b1gender' => 'First Beneficiary Gender',
        //     'b1relation' => 'First Beneficiary Relation',
        //     'b1name' => 'First Beneficiary Name',
        //     'b2relation' => 'Second Beneficiary Relation',
        //     'b2name' => 'Second Beneficiary Name',
        //     'b3relation' => 'Third Beneficiary Relation',
        //     'b3name' => 'Third Beneficiary Name',
        //     'b4relation' => 'Fourth Beneficiary Relation',
        //     'b4name' => 'Fourth Beneficiary Name',
        // ];

        // $validator = Validator::make($request->all(),$rules, $customMessages, $customAttributes);

        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // if($request->has("plan_id")){
        //     $planArray = explode("|", $request->plan_id);
        //     $request->merge(["plan_id" => $planArray[0]]);
        //     $request->merge(["duration_type" => $planArray[1]]);
        //     $request->merge(["premium" => $planArray[2]]);
        // }

        // $name = Auth::user()->name;
        // $partner = $this->service->getPartnerDataByName($name)->get();
        // $request->merge(['partner_id' => $partner['id']]);
        // if($request->has('duration_type')){
        //     if($request->duration_type == "Yearly"){
        //         $durationYear = $request->protection_duration/12;
        //         $total_paid = $durationYear*$request->premium;
        //     }else{
        //         $total_paid = $request->protection_duration * $request->premium;
        //     }
        //     $request->merge(['total_paid' => $total_paid]);
        // }

        // $data = [
        //     'partner_id' => $partner["id"],
        //     'plan_id' => $request->plan_id,
        //     'insured_relation' => $request->irelation,
        //     'insured_name' => $request->iname,
        //     'insured_dob' => $request->idob,
        //     'protection_duration' => $request->duration,
        //     'customer_name' => $request->phname,
        //     'customer_dob' => $request->phdob,
        //     'customer_citizen_id' => $request->phcitizen_id,
        //     'customer_email' => $request->phemail,
        //     'total_paid' => $total_paid,
        //     'note' => $request->note,
        //     'voucher' => $request->voucher,
        //     '1_bene_relation' => $request->b1relation,
        //     '1_bene_name' => $request->b1name,
        //     '1_bene_dob' => $request->b1dob,
        //     '1_bene_gender' => $request->b1gender,
        //     '1_bene_email' => $request->b1email,
        // ];


        // for($i=2;$i<=4;$i++){
        //     if($request['b'.$i.'name'] != null){
        //         $data = $data + [
        //             $i.'_bene_relation' => $request['b'.$i.'relation'],
        //             $i.'_bene_name' => $request['b'.$i.'name'],
        //             $i.'_bene_dob' => $request['b'.$i.'dob'],
        //             $i.'_bene_gender' => $request['b'.$i.'gender'],
        //             $i.'_bene_email' => $request['b'.$i.'email'],
        //         ];
        //     }
        // }
        // dd($data);
        if($request->insured_dob != null){
            $insuredDob = Carbon::createFromFormat("d/m/Y", $request->insured_dob)->format("Y-m-d");
            $request->merge([
                "insured_dob" => $insuredDob,
            ]);
        }
        if($request->customer_dob != null){
            $PHDob = Carbon::createFromFormat("d/m/Y", $request->customer_dob)->format("Y-m-d");
            $request->merge([
                "customer_dob" => $PHDob,
            ]);
        }

        $transactionAdded = $this->service->inputTransaction()->post($request->toArray());

        if($request->insured_dob != null){
            $insuredDob = Carbon::createFromFormat("Y-m-d", $request->insured_dob)->format("d/m/Y");
            $request->merge([
                "insured_dob" => $insuredDob,
            ]);
        }
        if($request->customer_dob != null){
            $PHDob = Carbon::createFromFormat("Y-m-d", $request->customer_dob)->format("d/m/Y");
            $request->merge([
                "customer_dob" => $PHDob,
            ]);
        }

        if(array_key_exists("errors", $transactionAdded->bodyResponse)){
            if(array_key_exists("plan_id", $transactionAdded->bodyResponse['errors'])){
                if($transactionAdded->bodyResponse['errors']['plan_id'][0] != "plan id harus diisi"){
                    return redirect()->back()->with('notify', '5 insurance')->withErrors($transactionAdded->bodyResponse['errors'])->withInput();
                }else{
                    return redirect()->back()->withErrors($transactionAdded->bodyResponse['errors'])->withInput();
                }
            }else{
                return redirect()->back()->withErrors($transactionAdded->bodyResponse['errors'])->withInput();
            }
        } else {
            return redirect()->back()->with('notify', 'success');
        }

    }

    public function manageAgent(Request $request)
    {
        $column = 'created_at';
        $typeOfSort = 'DESC';
        $append = ['sort_by' => $column, 'order_by' => $typeOfSort];

        $user = User::find(Auth::id());
        $partnerName = Auth::user()->name;

        $page = $request->page;

        if($user->hasRole('supadmin') || $user->hasRole('treasury') || $user->hasRole('financial') || $user->hasRole('operation')){
            $agents = $this->service->allAgent($page)->paginate();
        }else if($user->hasRole('partner financial') || $user->hasRole('partner operation')){
            $agents = $this->service->partnerAgent($page, $partnerName)->paginate();
        }

        $quotaRemain = '';

        return view('agent.index', compact('agents','append','user','quotaRemain'));
    }

    public function agentForm()
    {
        $inputAgent = [
            'quota_remaining' => null
        ];
        $quotaRemain = '';
        $notify = '';
        return view('agent.form', compact('inputAgent','quotaRemain', 'notify'));
    }

    public function agentQuota(Request $request)
    {
        $column = 'created_at';
        $typeOfSort = 'DESC';
        $append = ['sort_by' => $column, 'order_by' => $typeOfSort];

        $name = $request->name;
        $page = $request->page;

        // dd($this->service->getPartnerDataPaginated()->paginate());

        if($name == null || $name == ''){
            $agents = $this->service->getPartnerDataPaginated()->paginate();
        }else{
            $agents = $this->service->getPartnerDataPaginatedByName($name)->paginate();
        }

        return view('agent.quotaIndex', compact('agents', 'append'));
    }

    public function changeQuota(Request $request)
    {
        $rules = [
            'quota' => 'required|numeric',
        ];
        $customMessages = [

        ];
        $customAttributes = [
            'quota' => 'agent quota'
        ];
        $request->validate($rules, $customMessages, $customAttributes);

        $data = [
            'id' => $request->id,
            'quota' => $request->quota
        ];

        $agentQuota = $this->service->changeQuota()->post($data);

        return back()
            ->with('notify','success');
    }

    public function addAgent(Request $request)
    {
        $rules = [
            'aname' => 'required_without:bname',
            'bname' => 'required_without:aname',
            'aemail' => 'required|unique:agents,email',
            'aphone' => 'required|numeric',
            'apassword' => 'required',
            'acpassword' => 'required|same:apassword',
            'adob' => 'required',
            'acitizen_id' => 'required|digits:16'
        ];
        $customMessages = [

        ];
        $customAttributes = [
            'aname' => 'Agent Name',
            'bname' => 'Branch Name',
            'ausername' => 'Agent Username',
            'aphone' => 'Agent Phone Number',
            'apassword' => 'Agent Password',
            'acpassword' => 'Confirm Password',
            'adob' => 'Agent Date of Birth',
            'acitizen_id' => 'Agent Citizen Id'
        ];

        $request->validate($rules, $customMessages, $customAttributes);

        $name = Auth::user()->name;
        $partner = $this->service->getPartnerDataByName($name)->get();

        $data = [
            'partner_id' => $partner['id'],
            'agent_name' => $request->aname,
            'branch_name' => $request->bname,
            'email' => $request->aemail,
            'password' => $request->apassword,
            'dob' => $request->adob,
            'phone_number' => $request->aphone,
            'citizen_id' => $request->acitizen_id
        ];


        $inputAgent = $this->service->createAgent()->post($data);
        // dd($inputAgent);
        $quotaRemain = $inputAgent->bodyResponse['quota_remaining'];
        if($inputAgent->bodyResponse['code'] == 201){
            $notify = 'add';
        }else{
            $notify = 'quota_full';
        }


        return view('agent.form',compact('notify', 'quotaRemain'));
    }

    public function deleteAgent($id)
    {
        $deleteAgent = $this->service->deleteAgent($id)->get();

        return redirect()->back()->with('notify', 'delete');
    }

    public function downloadReport(Request $request)
    {
        $id = $request->input('id');
        $name = Auth::user()->name;

        $date = $request->input('daterange');
        $formatedDate = explode('-', $date);

        if ($date != null){
            $startDate = Carbon::parse($formatedDate[0])->format('Y-m-d');
            $endDate = Carbon::parse($formatedDate[1])->endOfDay()->format('Y-m-d');
        } else {
            $startDate = Carbon::now()->subDays(29)->format('Y-m-d');
            $endDate = Carbon::now()->endOfDay()->format('Y-m-d');
        }

        $test = $this->service->downloadReport($id, $name, $startDate, $endDate)->fetch();

        // dd($test);

        return response()->download(storage_path('app/public/files/reports/transaction_report_'.$id.$startDate.'_'.$endDate.'.xlsx'));
    }

    public function downloadJournal(Request $request)
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

        try{
            return response()->download(storage_path('app/public/files/reports/journal_report_'.$startDate.'_'.$endDate.'.xlsx'));
        }catch(\Exception $e){
            $test = $this->service->downloadJournal($startDate, $endDate)->fetch();

            return response()->download(storage_path('app/public/files/reports/journal_report_'.$startDate.'_'.$endDate.'.xlsx'));
        }


    }

    public function createInvoice($invoiceNumber)
    {
        $invoice = $this->service->createInvoice($invoiceNumber)->get();

        return redirect()->back()->with('notify', 'created');
    }

    public function downloadInvoice($invoiceNumber)
    {
        $invoice = $this->service->createInvoice($invoiceNumber)->get();

        return response()->download(storage_path('app/public/files/invoices/Invoice_'.$invoice['name'].'_'.$invoice['month'].'_'.$invoice['year'].'.pdf'));
    }

    public function detail($id)
    {
        $detailTransaction = $this->service->getTransactionById($id)->get();
        $getPaymentProof = $this->service->getPaymentProof($id)->fetch();

        return view('dashboard.detail', compact('detailTransaction', 'getPaymentProof'));
    }

    public function update($id, $param, $value)
    {
        $data = [
            'parameter' => $param,
            'value' => $value
        ];

        $transaction = $this->service->updateTransactionById($id, $data['parameter'], $data['value'])->put($data);
    }

    public function changeStatus($id, $status, $reason)
    {
        $data = [
            'status' => $status
        ];
        $this->service->changeStatus($id)->post($data);

        return redirect('')->with('notify', 'canceled');
    }

    public function cancelTransaction($id, $status, $reason)
    {
        $data = [
            'status' => $status,
            'reason' => $reason
        ];
        $this->service->cancelTransaction($id)->post($data);

        return redirect('')->with('notify', 'canceled');
    }

    public function spaj()
    {
        $name = Auth::user()->name;
        $productOfPartners = $this->PpService->ProductOfPartnerByPartnerName($name)->fetch()->bodyResponse;
        return view('spaj.spaj', compact('name', 'productOfPartners'));
    }

    public function spajVoucher()
    {
        $name = Auth::user()->name;
        return view('spaj.spaj-voucher', compact('name'));
    }

    public function check(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'KTP' => 'required'
        ]);

        try{
            $data = $this->service->checkCustomer(1, $request->KTP);
            $info = $data->message;
        }catch(\Exception $e){
            $info = "failed to check";
        }

        return $data;
    }
}
