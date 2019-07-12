<?php

namespace App\Http\Controllers;

use App\Models\InvoiceLog;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Services\InvoiceLogService;

class InvoiceLogController extends Controller
{
    public function __construct(InvoiceLogService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $column = 'created_at';
        $typeOfSort = 'DESC';

        $page = $request->page;
        $currentPage = $page;

        $invoices = $this->service->allInvoice($page)->paginate();

        $append = ['sort_by' => $column, 'order_by' => $typeOfSort];

        return view('invoice.index', compact('invoices', 'append'));
    }
}
