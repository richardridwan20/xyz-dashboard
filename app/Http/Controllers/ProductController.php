<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RegisterService;

class ProductController extends Controller
{
    public function __construct(RegisterService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('register.product.register-product');
    }

    public function create(Request $request)
    {
        $rules = [
            'product_id' => 'required',
            'name' => 'required|in:Standard,Deluxe',
            'sum_assured' => 'required|numeric',
            'benefits' => 'required',
            'description' => 'required',
            'premium' => 'required|numeric',
            'duration' => 'required|in:Yearly,Monthly',
        ];
        $customMessages = [

        ];
        $customAttributes = [
            'product_id' => 'Product ID',
            'name' => 'Product Name',
            'sum_assured' => 'Sum Assured',
            'benefits' => 'Benefits',
            'description' => 'Description',
            'premium' => 'Premium',
            'duration' => 'Payment Duration',
        ];
        $request->validate($rules, $customMessages, $customAttributes);

        $data = [
            'product_id' => $request->product,
            'name' => $request->plan,
            'sum_assured' => $request->sum_assured,
            'benefits' => $request->benefits,
            'description' => $request->description,
            'premium' => $request->premium,
            'duration' => $request->duration,
        ];

        $create = $this->service->create()->post($data);

        return redirect()->back()->with('success', 'success');
    }
}
