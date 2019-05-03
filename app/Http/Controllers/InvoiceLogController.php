<?php

namespace App\Http\Controllers;

use App\Models\InvoiceLog;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class InvoiceLogController extends Controller
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
            $invoices = InvoiceLog::on('mysql.log')->orderBy($column, $typeOfSort)
                ->paginate(2);

            $append = ['sort_by' => $column, 'order_by' => $typeOfSort];

            if (!empty($invoices)) {
                foreach ($invoices as $invoice) {
                    $id = $invoice->id;
                    $partner_name = $invoice->partner->name;
                    $date = $invoice->date;
                    $status = $invoice->status;
                    $created_at = $invoice->created_at;
                    $updated_at = $invoice->updated_at;

                    //The URL to redirect to Details Page of Conversation Logs based on ID.
                    $text = 'http://superyou-log.test/conversation-logs/:id/details';

                    $url = str_replace(':id', $id, $text);

                    $table_data .= '<tr><td>'.$id.'</td><td><a href='.$url.'>'.$partner_name.'</a></td><td>'.$date.'</td><td>'.$status.'</td><td>'.$created_at.'</td><td>'.$updated_at.'</td></tr>';
                }

                $json['success'] = $table_data;
                $json['info'] = 'Showing '.$invoices->firstItem().' to '.$invoices->lastItem().' of '.$invoices->total().' entries';
                $json['pagi'] = ''.$invoices->appends($append)->links('pagination/simple-bootstrap-4').'';
            } else {

                //Show the error when no data is available to retrieve.
                $table_data .= '<tr><td>No data to be shown.</td></tr>';
                $json['success'] = $table_data;
            }

            return json_encode($json);
        }

        $invoices = InvoiceLog::on('mysql.log')->paginate(5);
        $append = ['sort_by' => $column, 'order_by' => $typeOfSort];

        return view('invoice.index', compact('invoices', 'append'));
    }
}
