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
        // // Create Role
        // Role::create(['name'=>'supadmin']);//1
        // Role::create(['name'=>'treasury']);//2
        // Role::create(['name'=>'financial']);//3
        // Role::create(['name'=>'operation']);//4
        // Role::create(['name'=>'viewer']);//5
        // Role::create(['name'=>'partner financial']);//6
        // Role::create(['name'=>'partner operation']);//7
        // Role::create(['name'=>'partner viewer']);//8

        // //Create Permission
        // Permission::create(['name'=>'view all transaction']);//1
        // Permission::create(['name'=>'view all transaction by partner name']);//2
        // Permission::create(['name'=>'view report']);//3
        // Permission::create(['name'=>'update status paid']);//4
        // Permission::create(['name'=>'update status cancel']);//5
        // Permission::create(['name'=>'input invoice number']);//6
        // Permission::create(['name'=>'create certificate']);//7
        // Permission::create(['name'=>'view upload form']);//8
        // Permission::create(['name'=>'download report']);//9
        // Permission::create(['name'=>'view by search']);//10

        // $permission1 = Permission::findById(1);
        // $permission2 = Permission::findById(2);
        // $permission3 = Permission::findById(3);
        // $permission4 = Permission::findById(4);
        // $permission5 = Permission::findById(5);
        // $permission6 = Permission::findById(6);
        // $permission7 = Permission::findById(7);
        // $permission8 = Permission::findById(8);
        // $permission9 = Permission::findById(9);
        // $permission10 = Permission::findById(10);

        // //Giving Role Permission
        // //supadmin
        // $role = Role::findById(1);
        // $role->givePermissionTo($permission1);
        // $role->givePermissionTo($permission2);
        // $role->givePermissionTo($permission3);
        // $role->givePermissionTo($permission4);
        // $role->givePermissionTo($permission5);
        // $role->givePermissionTo($permission6);
        // $role->givePermissionTo($permission7);
        // $role->givePermissionTo($permission8);
        // $role->givePermissionTo($permission9);
        // $role->givePermissionTo($permission10);

        // //treasury
        // $role = Role::findById(2);
        // $role->givePermissionTo($permission1);
        // $role->givePermissionTo($permission3);
        // $role->givePermissionTo($permission6);
        // $role->givePermissionTo($permission9);
        // $role->givePermissionTo($permission10);

        // //financial
        // $role = Role::findById(3);
        // $role->givePermissionTo($permission1);
        // $role->givePermissionTo($permission5);
        // $role->givePermissionTo($permission6);
        // $role->givePermissionTo($permission10);

        // //operation
        // $role = Role::findById(4);
        // $role->givePermissionTo($permission1);
        // $role->givePermissionTo($permission5);
        // $role->givePermissionTo($permission6);
        // $role->givePermissionTo($permission10);

        // //viewer
        // $role = Role::findById(5);
        // $role->givePermissionTo($permission10);

        // //partner financial
        // $role = Role::findById(6);
        // $role->givePermissionTo($permission2);
        // $role->givePermissionTo($permission4);
        // $role->givePermissionTo($permission7);
        // $role->givePermissionTo($permission8);
        // $role->givePermissionTo($permission10);

        // //partner operation
        // $role = Role::findById(7);
        // $role->givePermissionTo($permission4);
        // $role->givePermissionTo($permission7);
        // $role->givePermissionTo($permission8);
        // $role->givePermissionTo($permission10);

        // //partner viewer
        // $role = Role::findById(8);
        // $role->givePermissionTo($permission10);

        // //Assign Account to Role
        // $user = User::find(1);
        // $user->assignRole('supadmin');

        // $user = User::find(2);
        // $user->assignRole('treasury');

        // $user = User::find(3);
        // $user->assignRole('financial');

        //  $user = User::find(4);
        //  $user->assignRole('operation');

        //  $user = User::find(5);
        //  $user->assignRole('viewer');

        //  $user = User::find(6);
        //  $user->assignRole('partner financial');

        //  $user = User::find(7);
        //  $user->assignRole('partner operation');

        //  $user = User::find(8);
        //  $user->assignRole('partner viewer');

        //  $user = User::find(9);
        //  $user->assignRole('partner financial');

        //  $user = User::find(10);
        //  $user->assignRole('partner operation');

        //  $user = User::find(11);
        //  $user->assignRole('partner viewer');

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

        $month = Carbon::now()->format('m');
        $year = Carbon::now()->format('Y');

        if ($request->input('select-month') != 0) {
            $month = $request->input('select-month');
        } else if ($request->input('select-year') != 0) {
            $year = $request->input('select-year');
        }

        $user = User::find(Auth::id());

        $sumCommision = 0;
        $sumPpnCommision = 0;
        $sumTotalCommision = 0;
        $sumPphCommision = 0;
        $sumPartnerBill = 0;
        $sumTotalPartnerBill = 0;

        if($user->hasRole('supadmin') || $user->hasRole('treasury') || $user->hasRole('financial') || $user->hasRole('operation') || $user->hasRole('viewer')){
            $transactions = $this->service->allTransaction($page, $month, $year)->paginate();
            $transactionsCount = $this->service->allTransaction($page, $month, $year)->get();
        }else if($user->hasRole('partner financial') || $user->hasRole('partner operation') || $user->hasRole('partner viewer')){
            $transactions = $this->service->partnerTransaction($page, $month, $year)->paginate();
            $transactionsCount = $this->service->partnerTransaction($page, $month, $year)->get();
        }

        foreach ($transactionsCount as $transaction){
            $commision = $transaction['partner_id']['commision'];
            $premium = $transaction['product_id']['plan_id']['premi'];
            $pCommision = ($premium * $commision) * 0.9;
            $ppnCommision = ($premium * $commision) * 0.1;
            $totalCommision = ($premium * $commision);
            $pphCommision = ($pCommision * 0.02);
            $partnerBill = ($totalCommision - $pphCommision);
            $totalPartnerBill = ($premium - $partnerBill);
            $sumCommision += $pCommision;
            $sumPpnCommision += $ppnCommision;
            $sumTotalCommision += $totalCommision;
            $sumPphCommision += $pphCommision;
            $sumPartnerBill += $partnerBill;
            $sumTotalPartnerBill += $totalPartnerBill;
        }

        return view('dashboard.index', compact('transactions', 'append', 'sumCommision', 'sumPpnCommision', 'sumTotalCommision', 'sumPphCommision', 'sumPartnerBill', 'sumTotalPartnerBill'));
    }

    public function viewPartner()
    {

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

        dd($data);
        return $data;
    }
}
