<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Partner;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App\Models\Agent;
use Illuminate\Support\Facades\Storage;

use App\Services\DashboardService;

class DashboardController extends Controller
{
    public function __construct(DashboardService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
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
            $role->givePermissionTo($permission10);
            $role->givePermissionTo($permission12);

            //operation
            $role = Role::findById(4);
            $role->givePermissionTo($permission1);
            $role->givePermissionTo($permission5);
            $role->givePermissionTo($permission6);
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
            $role->givePermissionTo($permission8);
            $role->givePermissionTo($permission10);

            //partner operation
            $role = Role::findById(7);
            $role->givePermissionTo($permission4);
            $role->givePermissionTo($permission7);
            $role->givePermissionTo($permission8);
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

            $user = Agent::find(1);
            $user->assignRole('agent');
        }

        $column = 'created_at';
        $typeOfSort = 'DESC';

        // if ($request->ajax()) {
        //     $id = $request->column;

        //     //If the link contains no parameters, then the default will be 'created_at' and 'DESC'
        //     if ($id == null) {
        //         $column = 'created_at';
        //         $typeOfSort = 'DESC';
        //     } else {
        //         $column = $request->column;
        //         $typeOfSort = $request->typeOfSort;
        //     }

        //     $table_data = '';

        //     $page = $request->page;

        //     $currentPage = $page;

        //     // Change current page when the paginate button is clicked.
        //     Paginator::currentPageResolver(function () use ($currentPage) {
        //         return $currentPage;
        //     });

        //     //Get the data from Model, order by and sort by with different parameters.
        //     if(Auth::user()->hasRole('partner')){
        //         $partner = Partner::where('name', $user)->first()->id;
        //         $transactions = Transaction::orderBy($column, $typeOfSort)
        //         ->where('partner_id', $partner)
        //         ->paginate(5);
        //     }else{
        //         $transactions = Transaction::orderBy($column, $typeOfSort)
        //         ->paginate(5);
        //     }

        //     $append = ['sort_by' => $column, 'order_by' => $typeOfSort];

        //     if (!empty($transactions)) {
        //         foreach ($transactions as $transaction) {
        //             $id = $transaction->id;
        //             $partner_name = $transaction->partner->name;
        //             $ph_name = $transaction->customer->name;
        //             $insured_name = $transaction->insured_name;
        //             $product_plan = $transaction->product->plan_id;
        //             $duration = $transaction->protection_duration;
        //             $certificate_number = $transaction->certificate_number;
        //             $status = $transaction->payment_status;

        //             //The URL to redirect to Details Page of Conversation Logs based on ID.
        //             $text = 'http://superyou-log.test/conversation-logs/:id/details';

        //             $url = str_replace(':id', $id, $text);

        //             $table_data .= '<tr><td>'.$id.'</td><td><a href='.$url.'>'.$partner_name.'</a></td><td>'.$ph_name.'</td><td>'.$insured_name.'</td><td>'.$product_plan.'</td><td>'.$duration.'</td><td>'.$certificate_number.'</td><td>'.$status.'</td></tr>';
        //         }

        //         $json['success'] = $table_data;
        //         $json['info'] = 'Showing '.$transactions->firstItem().' to '.$transactions->lastItem().' of '.$transactions->total().' entries';
        //         $json['pagi'] = ''.$transactions->appends($append)->links('pagination/simple-bootstrap-4').'';
        //     } else {

        //         //Show the error when no data is available to retrieve.
        //         $table_data .= '<tr><td>No data to be shown.</td></tr>';
        //         $json['success'] = $table_data;
        //     }

        //     return json_encode($json);
        // }

        // if(Auth::user()->hasRole('partner')){
        //     $partner = Partner::where('name', $user)->first()->id;
        //     $transactions = Transaction::where('partner_id', $partner)->paginate(5);
        // }else{
        //     $transactions = Transaction::paginate(5);
        // }

        $append = ['sort_by' => $column, 'order_by' => $typeOfSort];

        $page = $request->page;

        $month = $request->input('select-month');
        $year = $request->input('select-year');
        $name = $request->input('text-name');
        $name = strtolower($name);
        $name = ucwords($name);

        $date = Carbon::createFromDate($year, $month, 1);
        $date = Carbon::parse($date)->format('F Y');

        if (!empty($month) && !empty($year)) {
            $request->session()->flash('month', $month);
            $request->session()->flash('year', $year);
            $request->session()->flash('name', $name);
            $request->session()->flash('date', $date);
        } else if ($request->session()->get('month') == null || $request->session()->get('year') == null)
        {
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('Y');
            $date = Carbon::now()->format('F Y');
        } else {
            $request->session()->keep(['month', 'year', 'name', 'date']);
            $month = $request->session()->get('month');
            $year = $request->session()->get('year');
            $name = $request->session()->get('name');
            $date = $request->session()->get('date');
        }

        $data = ['name' => $name, 'date' => $date, 'month' => $month, 'year' => $year];

        $user = User::find(Auth::id());

        $sumCommision = 0;
        $sumPpnCommision = 0;
        $sumTotalCommision = 0;
        $sumPphCommision = 0;
        $sumPartnerBill = 0;
        $sumTotalPartnerBill = 0;

        if($user->hasRole('supadmin') || $user->hasRole('treasury') || $user->hasRole('financial') || $user->hasRole('operation')){
            $transactions = $this->service->allTransaction($page, $month, $year)->paginate();
            $transactionsCount = $this->service->allTransaction($page, $month, $year)->get();
        }else if($user->hasRole('partner financial') || $user->hasRole('partner operation')){
            $transactions = $this->service->partnerTransaction($page, $month, $year)->paginate();
            $transactionsCount = $this->service->partnerTransaction($page, $month, $year)->get();
        }else if($user->hasRole('viewer')){
            $transactions = $this->service->allTransactionByName($page, $name)->paginate();
            $transactionsCount = $this->service->allTransactionByName($page, $name)->get();
        }else if($user->hasRole('partner viewer')){
            $transactions = $this->service->partnerTransactionByName($page, $name)->paginate();
            $transactionsCount = $this->service->partnerTransactionByName($page, $name)->get();
        }

        foreach ($transactionsCount as $transaction){
            $commision = $transaction['partner_id']['commision'];
            $type = $transaction['partner_id']['payment_type'];
            $duration = $transaction['protection_duration'];

            if ($type == 'Yearly'){
                $premium = $transaction['product_id']['plan_id']['premium_yearly'];
                $grossPremium = $premium * $duration;
            }else if ($type == 'Monthly'){
                $premium = $transaction['product_id']['plan_id']['premium_monthly'];
                $grossPremium = $premium;
            }

            $pCommision = ($grossPremium * $commision) * 0.9;
            $ppnCommision = ($grossPremium * $commision) * 0.1;
            $totalCommision = ($grossPremium * $commision);
            $pphCommision = ($pCommision * 0.02);
            $partnerBill = ($totalCommision - $pphCommision);
            $totalPartnerBill = ($grossPremium - $partnerBill);
            $sumCommision += $pCommision;
            $sumPpnCommision += $ppnCommision;
            $sumTotalCommision += $totalCommision;
            $sumPphCommision += $pphCommision;
            $sumPartnerBill += $partnerBill;
            $sumTotalPartnerBill += $totalPartnerBill;
        }

        return view('dashboard.index', compact('transactions', 'append', 'data', 'sumCommision', 'sumPpnCommision', 'sumTotalCommision', 'sumPphCommision', 'sumPartnerBill', 'sumTotalPartnerBill'));
    }

    public function inputTransaction(Request $request)
    {
        $year = Carbon::today()->year;
        $month = Carbon::today()->month;
        $day = Carbon::today()->day;
        $tz = "Asia/Jakarta";
        $minAge = Carbon::createFromDate($year-18, $month, $day, $tz);
        $minCustomerAge = Carbon::createFromDate($year-17, $month, $day, $tz);
        $maxAge = Carbon::createFromDate($year-55, $month, $day, $tz);
        $rules = [
            'plan' => 'required',
            'duration' => 'required',
            'phgender' => 'required',
            'phname' => 'required|regex:/^[\pL\s]+$/u',
            'phcitizen_id' => 'required|digits:16',
            'phdob' => 'required|before_or_equal:'.$minCustomerAge,
            'phemail' => 'required|email',
            'igender' => 'required',
            'irelation' => 'required',
            'iname' => 'required|regex:/^[\pL\s]+$/u',
            'icitizen_id' => 'required|digits:16',
            'idob' => 'required|before_or_equal:'.$minAge.'|after_or_equal:'.$maxAge,
            'iemail' => 'required|email',
            'b1gender' => 'nullable',
            'b1relation' => 'required',
            'b1name' => 'required|regex:/^[\pL\s]+$/u',
            'b2relation' => 'nullable|required_with:b2name',
            'b2name' => 'nullable|required_with:b2relation|regex:/^[\pL\s]+$/u',
            'b3relation' => 'nullable|required_with:b3name',
            'b3name' => 'nullable|required_with:b3relation|regex:/^[\pL\s]+$/u',
            'b4relation' => 'nullable|required_with:b4name',
            'b4name' => 'nullable|required_with:b4relation|regex:/^[\pL\s]+$/u',
        ];
        $customMessages = [
            'plan.required' => 'please select the :attribute',
            'phgender.required' => 'please select the :attribute',
            'before_or_equal' => ':attribute should more than 18 years',
            'after_or_equal' => ':attribute should less than 55 years'
        ];
        $customAttributes = [
            'plan' => 'Product Plan',
            'duration' => 'Protection Duration',
            'phgender' => 'Policy Holder Gender',
            'phname' => 'Policy Holder Name',
            'phcitizen_id' => 'Policy Holder Citizen Id',
            'phdob' => 'Policy Holder Date of Birth',
            'phemail' => 'Policy Holder Email',
            'igender' => 'Insured Gender',
            'irelation' => 'Insured Relation',
            'iname' => 'Insured Name',
            'icitizen_id' => 'Insured Citizen Id',
            'idob' => 'Insured Date of Birth',
            'iemail' => 'Insured Email',
            'b1gender' => 'First Beneficiary Gender',
            'b1relation' => 'First Beneficiary Relation',
            'b1name' => 'First Beneficiary Name',
            'b2relation' => 'Second Beneficiary Relation',
            'b2name' => 'Second Beneficiary Name',
            'b3relation' => 'Third Beneficiary Relation',
            'b3name' => 'Third Beneficiary Name',
            'b4relation' => 'Fourth Beneficiary Relation',
            'b4name' => 'Fourth Beneficiary Name',
        ];

        $request->validate($rules, $customMessages, $customAttributes);

        $name = Auth::user()->name;
        $durationYear = $request->duration/12;
        $partner = $this->service->getPartnerDataByName($name)->get();
        if($request->plan == "Standard"){
            $product = 1;
            $total_paid = $durationYear * 75000;
        }else{
            $product = 2;
            $total_paid = $durationYear * 135000;
        }

        $data = [
            'partner_id' => $partner['id'],
            'product_id' => $product,
            'insured_relation' => $request->irelation,
            'insured_name' => $request->iname,
            'insured_gender' => $request->igender,
            'insured_dob' => $request->idob,
            'protection_duration' => $request->duration,
            'customer_name' => $request->phname,
            'customer_dob' => $request->phdob,
            'customer_citizen_id' => $request->phcitizen_id,
            'customer_gender' => $request->phgender,
            'customer_email' => $request->phemail,
            'total_paid' => $total_paid,
            '1_bene_relation' => $request->b1relation,
            '1_bene_name' => $request->b1name,
            '1_bene_dob' => $request->b1dob,
            '1_bene_gender' => $request->b1gender,
            '1_bene_email' => $request->b1email,
        ];

        for($i=2;$i<=4;$i++){
            if($request['b'.$i.'name'] != null){
                $data = $data + [
                    $i.'_bene_relation' => $request['b'.$i.'relation'],
                    $i.'_bene_name' => $request['b'.$i.'name'],
                    $i.'_bene_dob' => $request['b'.$i.'dob'],
                    $i.'_bene_gender' => $request['b'.$i.'gender'],
                    $i.'_bene_email' => $request['b'.$i.'email'],
                ];
            }
        }
        $transactionAdded = $this->service->inputTransaction()->post($data);
        if($transactionAdded->bodyResponse['data']['code'] == 101){
            return redirect()->back()->with('notify', '5 insurance');
        }else{
            return redirect()->back()->with('notify', 'success');
        }

    }

    public function manageAgent(Request $request)
    {
        $column = 'created_at';
        $typeOfSort = 'DESC';
        $append = ['sort_by' => $column, 'order_by' => $typeOfSort];

        $page = $request->page;

        $user = User::find(Auth::id());
        $partnerName = Auth::user()->name;

        if($user->hasRole('supadmin') || $user->hasRole('treasury') || $user->hasRole('financial') || $user->hasRole('operation')){
            $agents = $this->service->allAgent()->paginate();
        }else if($user->hasRole('partner financial') || $user->hasRole('partner operation')){
            $agents = $this->service->partnerAgent($partnerName)->paginate();
        }

        return view('agent.index', compact('agents','append','user'));
    }

    public function agentForm()
    {
        return view('agent.form');
    }

    public function addAgent(Request $request)
    {
        $rules = [
            'aname' => 'required',
            'ausername' => 'required|unique:agents,username',
            'aphone' => 'required|numeric',
            'apassword' => 'required',
            'acpassword' => 'required|same:apassword',
            'adob' => 'required',
            'acitizen_id' => 'required|digits:16'
        ];
        $customMessages = [

        ];
        $customAttributes = [
            'aname' => 'Agent / branch Name',
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
            'partner_id' => 1,
            'agent_branch_name' => $request->aname,
            'username' => $request->ausername,
            'password' => $request->apassword,
            'dob' => $request->adob,
            'phone_number' => $request->aphone,
            'citizen_id' => $request->acitizen_id
        ];


        $inputAgent = $this->service->createAgent()->post($data);

        return redirect()->back()->with('notify', 'success');
    }

    public function deleteAgent($id)
    {
        $deleteAgent = $this->service->deleteAgent($id)->get();

        return redirect()->back()->with('notify', 'success');
    }

    public function downloadReport(Request $request)
    {
        $id = $request->input('id');
        $name = Auth::user()->name;
        $month = Carbon::now()->format('m');
        $year = Carbon::now()->format('Y');

        if ($request->input('select-month') != 0) {
            $month = $request->input('select-month');
        } else if ($request->input('select-year') != 0) {
            $year = $request->input('select-year');
        }

        $report = $this->service->downloadReport($id, $name, $month, $year)->get();

        // return Storage::download('transaction_report_'.$request->id.$request->month.$request->year.'.xlsx');
        return response()->download(storage_path('app/public/transaction_report_'.$id.$month.$year.'.xlsx'));
    }

    public function createInvoice($invoiceNumber)
    {
        $invoice = $this->service->createInvoice($invoiceNumber)->get();

        return response()->download(storage_path('app/public/Invoice_'.$invoice['name'].'_'.$invoice['month'].'_'.$invoice['year'].'.pdf'));
    }

    public function detail($id)
    {
        $detailTransaction = $this->service->getTransactionById($id)->get();

        return view('dashboard.detail', compact('detailTransaction'));
    }

    public function update($id, $param, $value)
    {
        $data = [
            'parameter' => $param,
            'value' => $value
        ];

        $transaction = $this->service->updateTransactionById($id, $data['parameter'], $data['value'])->put($data);
    }

    public function changeStatus($id, $status)
    {
        $data = ['status' => $status];
        $this->service->changeStatus($id)->post($data);

        return redirect('');
    }

    public function spaj()
    {
        return view('spaj.spaj');
    }

    public function testing()
    {
        $data = $this->service->checkCustomer(1, 123123);
        $info = 'submit for check';
        return view('dashboard.testing', compact('info'));
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
