<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        $transactions = Transaction::groupBy('id');
        return view('dashboard.index', compact('transactions'));
    }
}
