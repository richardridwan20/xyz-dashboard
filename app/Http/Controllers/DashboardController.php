<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Partner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

use App\Services\DashboardService;


class DashboardController extends Controller
{
    public function __construct(DashboardService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {

        // Role::create(['name'=>'supadmin']);
        // Role::create(['name'=>'admin']);
        // Role::create(['name'=>'treasury']);
        // Role::create(['name'=>'partner']);

        // Permission::create(['name'=>'view transaction']);
        // Permission::create(['name'=>'view report']);
        // Permission::create(['name'=>'update status paid']);
        // Permission::create(['name'=>'update status cancel']);
        // Permission::create(['name'=>'input invoice number']);
        // Permission::create(['name'=>'create certificate']);
        // Permission::create(['name'=>'view upload form']);
        // Permission::create(['name'=>'download report']);

        // $permission1 = Permission::findById(1);
        // $permission2 = Permission::findById(2);
        // $permission3 = Permission::findById(3);
        // $permission4 = Permission::findById(4);
        // $permission5 = Permission::findById(5);
        // $permission6 = Permission::findById(6);
        // $permission7 = Permission::findById(7);
        // $permission8 = Permission::findById(8);

        // $role = Role::findById(1);
        // $role->givePermissionTo($permission1);
        // $role->givePermissionTo($permission2);
        // $role->givePermissionTo($permission3);
        // $role->givePermissionTo($permission4);
        // $role->givePermissionTo($permission5);
        // $role->givePermissionTo($permission6);
        // $role->givePermissionTo($permission7);
        // $role->givePermissionTo($permission8);

        // $role = Role::findById(2);
        // $role->givePermissionTo($permission4);
        // $role->givePermissionTo($permission5);
        // $role->givePermissionTo($permission6);

        // $role = Role::findById(3);
        // $role->givePermissionTo($permission2);
        // $role->givePermissionTo($permission5);
        // $role->givePermissionTo($permission8);

        // $role = Role::findById(4);
        // $role->givePermissionTo($permission1);
        // $role->givePermissionTo($permission3);
        // $role->givePermissionTo($permission4);
        // $role->givePermissionTo($permission7);

        // $user = User::find(1);
        // $user->assignRole('supadmin');

        // $user = User::find(2);
        // $user->assignRole('treasury');

        // $user = User::find(3);
        // $user->assignRole('admin');

        //  $user = User::find(4);
        //  $user->assignRole('partner');

        //  $user = User::find(5);
        //  $user->assignRole('partner');

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

        $transactions = $this->service->allTransaction($page)->paginate();

        return view('dashboard.index', compact('transactions', 'append'));
    }

    public function detail($id)
    {
        $detailTransaction = $this->service->getTransactionById($id)->get();

        return view('dashboard.detail', compact('detailTransaction'));
    }
}
