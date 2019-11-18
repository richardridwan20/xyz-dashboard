<?php

namespace App\Http\Controllers;

use App\Rules\PlanChecker;
use App\Services\DashboardService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(DashboardService $service)
    {
        $this->service = $service;
    }

    public function index($notify1 = null)
    {
        $column = 'created_at';
        $typeOfSort = 'DESC';
        $append = ['sort_by' => $column, 'order_by' => $typeOfSort];
        $plans = $this->service->getAllPlan()->paginate();
        $products = $this->service->getAllProductPaginated()->paginate();

        if($notify1 != null){
            $edit = $notify1;
        }else{
            $edit = "";
        }

        return view('product.index', compact('plans', 'append', 'products', 'edit'));
    }

    public function changeName(Request $request)
    {

        $rules = [
            'product_id' => 'required|exists:products,id',
            'product_name' => 'required|unique:products,name',
        ];
        $customMessages = [
            'unique' => ':attribute already exist'
        ];
        $customAttributes = [
            'product_name' => 'Product Name'
        ];
        $request->validate($rules, $customMessages, $customAttributes);

        // dd($request);
        $data = $request->toArray();

        unset($data['_token']);

        // dd($data);

        $change = $this->service->changeName()->post($data);

        // dd($change);

        return redirect()->back()->with('notify', 'change_product_name_success');
    }

    public function addProduct()
    {
        // dd($products);
        return view('product.register-product', compact('products'));
    }

    public function editPlan($id)
    {
        $plans = $this->service->getPlanDataById($id)->fetch()->bodyResponse;
        $products = $this->service->getAllProduct()->get();

        return view('product.edit-plan', compact('plans','products'));
    }

    public function changePlanData(Request $request)
    {
        // dd($request);
        $rules = [
            'product_id' => 'required|exists:products,id',
            'duration' => 'required|in:Monthly,Yearly',
            'name' => ['required', new PlanChecker($request->product_id, $request->duration)],
            'sum_assured' => 'required|numeric',
            'benefits' => 'required',
            'description' => 'required',
            'premium' => 'required|numeric',
        ];
        $customMessages = [

        ];
        $customAttributes = [
            'product_id' => 'Product Name',
            'plan_name' => 'Plan Name',
            'sum_assured' => 'Sum Assured',
        ];
        $request->validate($rules, $customMessages, $customAttributes);

        $data = $request->toArray();

        unset($data['_token']);
        // dd($data);

        $edit = $this->service->editPlan()->post($data);

        if($edit->bodyResponse == 1){
            return redirect("/product")->with('notify', 'edited');
        }else if($edit->bodyResponse == 0){
            return redirect()->back()->with('notify', 'edit fail');
        }

    }

    public function create(Request $request)
    {
        $rules = [
            'product_name' => 'required|unique:products,name',
        ];
        $customMessages = [
            'unique' => ':attribute already exist'
        ];
        $customAttributes = [
            'product_name' => 'Product Name'
        ];
        $request->validate($rules, $customMessages, $customAttributes);

        $data = [
            'name' => $request->product_name
        ];

        $create = $this->service->createProduct()->post($data);

        return redirect()->route('product.index')->with('notify', 'add_product');
    }

    public function createPlan(Request $request)
    {
        $data = [
            'product_id' => $request->product_id,
            'duration' => $request->duration,
            'name' => $request->plan_name,
            'sum_assured' => $request->sum_assured,
            'accident_benefit' => $request->accident_benefit,
            'natural_death_benefit' => $request->natural_death_benefit,
            'tpd_benefit' => $request->tpd_benefit,
            'health_benefit' => $request->health_benefit,
            'description' => $request->description,
            'premium' => $request->premium,
        ];

        $create = $this->service->createPlan()->post($data);

        dd($create);

        if(array_key_exists("errors", $create->bodyResponse)){
            return redirect()->back()->withErrors($create->bodyResponse['errors'])->withInput();
        }else{
            return redirect()->route('product.index')->with('notify', 'success');
        }

    }

    public function addPlan()
    {
        $products = $this->service->getAllProduct()->get();
        // dd($products);
        return view('product.register-plan', compact('products'));
    }

    public function deletePlan($id)
    {
        $checkPlan = $this->service->checkPpPlan($id)->fetch();
        if(count($checkPlan->bodyResponse) != 0){
            return redirect()->back()->with('notify', 'pop_still_exist');
        }else{
            $deletePlan = $this->service->deletePlan($id)->fetch();

            // dd($deleteProduct);

            return redirect()->back()->with('notify', 'delete_plan');
        }
    }

    public function deleteProduct($id)
    {
        $checkProduct = $this->service->getDataByProductId($id)->fetch();
        if(count($checkProduct->bodyResponse) != 0){
            return redirect()->back()->with('notify', 'plan_still_exist');
        }else{
            $deleteProduct = $this->service->deleteProduct($id)->fetch();

            return redirect()->back()->with('notify', 'delete_product');
        }
    }
}
