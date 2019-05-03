<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Pagination\Paginator;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $column = 'created_at';
        $typeOfSort = 'DESC';

        if ($request->ajax()) {
            $id = $request->column;

            //If the link contains no parameters, then the default will be 'created_at' and 'DESC'
            if ($id == null) {
                $column = 'created_at';
                $typeOfSort = 'DESC';
            } else {
                $column = $request->column;
                $typeOfSort = $request->typeOfSort;
            }

            $table_data = '';

            $page = $request->page;

            $currentPage = $page;

            // Change current page when the paginate button is clicked.
            Paginator::currentPageResolver(function () use ($currentPage) {
                return $currentPage;
            });

            //Get the data from Model, order by and sort by with different parameters.
            $transactions = Transaction::orderBy($column, $typeOfSort)
                ->paginate(2);

            $append = ['sort_by' => $column, 'order_by' => $typeOfSort];

            if (!empty($transactions)) {
                foreach ($transactions as $transaction) {
                    $id = $transaction->id;
                    $partner_name = $transaction->partner->name;
                    $ph_name = $transaction->customer->name;
                    $insured_name = $transaction->insured_name;
                    $product_plan = $transaction->product->plan_id;
                    $duration = $transaction->protection_duration;
                    $certificate_number = $transaction->certificate_number;
                    $status = $transaction->payment_status;

                    //The URL to redirect to Details Page of Conversation Logs based on ID.
                    $text = 'http://superyou-log.test/conversation-logs/:id/details';

                    $url = str_replace(':id', $id, $text);

                    $table_data .= '<tr><td>'.$id.'</td><td><a href='.$url.'>'.$partner_name.'</a></td><td>'.$ph_name.'</td><td>'.$insured_name.'</td><td>'.$product_plan.'</td><td>'.$duration.'</td><td>'.$certificate_number.'</td><td>'.$status.'</td></tr>';
                }

                $json['success'] = $table_data;
                $json['info'] = 'Showing '.$transactions->firstItem().' to '.$transactions->lastItem().' of '.$transactions->total().' entries';
                $json['pagi'] = ''.$transactions->appends($append)->links('pagination/simple-bootstrap-4').'';
            } else {

                //Show the error when no data is available to retrieve.
                $table_data .= '<tr><td>No data to be shown.</td></tr>';
                $json['success'] = $table_data;
            }

            return json_encode($json);
        }

        $transactions = Transaction::paginate(2);
        $append = ['sort_by' => $column, 'order_by' => $typeOfSort];

        return view('dashboard.index', compact('transactions', 'append'));
    }
}
