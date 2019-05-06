<table id="example" class="table table-hover table-striped table-vcenter table-bordered table-responsive">
    <thead>
        <tr>
            <th id="id" data-sort="id" data-order="DESC" class="medium-th session-head">
                Transaction_Id
                <i class="id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="partner_id" data-sort="partner_id" data-order="DESC" class="medium-th session-head">
                Partner_Name
                <i class="partner_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="customer_id" data-sort="customer_id" data-order="DESC" class="medium-th session-head">
                PH_Name
                <i class="customer_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="insured_name" data-sort="insured_name" data-order="DESC" class="medium-th session-head">
                Insured_Name
                <i class="insured_name fa fa-pull-right fa-sort"></i>
            </th>
            <th id="product_id" data-sort="product_id" data-order="DESC" class="medium-th session-head">
                Product_Plan
                <i class="product_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="protection_duration" data-sort="protection_duration" data-order="DESC" class="large-th session-head">
                Protection_Duration
                <i class="protection_duration fa fa-pull-right fa-sort"></i>
            </th>
            <th id="certificate_number" data-sort="certificate_number" data-order="DESC" class="large-th session-head">
                certificate_number
                <i class="certificate_number fa fa-pull-right fa-sort"></i>
            </th>
            <th id="status" data-sort="status" data-order="DESC" class="medium-th session-head">
                Status
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
            <th id="created_at" data-sort="created_at" data-order="DESC" class="medium-th session-head">
                Created_At
                <i class="created_at fa fa-pull-right fa-sort"></i>
            </th>
        </tr>
    </thead>
    <tbody id="tableAjax">

        @forelse ($transactions as $transaction)
        <tr>
            <td>{{$transaction->id}}</td>
            <td>{{$transaction->partner->name}}</td>
            <td>{{$transaction->customer->name}}</td>
            <td>{{$transaction->insured_name}}</td>
            <td>{{$transaction->product->plan_id}}</td>
            <td>{{$transaction->protection_duration}}</td>
            <td>{{$transaction->certificate_number}}</td>
            <td>{{$transaction->payment_status}}</td>
        </tr>
        @empty
            <tr>
                <td colspan="10">No data to be shown.</td>
            </tr>
        @endforelse

    </tbody>
</table>

<div class="row">
    <div class="col page-info">
        Showing {{$transactions->firstItem()}} to {{$transactions->lastItem()}} of {{$transactions->total()}} entries
    </div>
    <div class="col">
        <div class="float-right paginate">
            {{$transactions->appends($append)->links('pagination/simple-bootstrap-4')}}
        </div>
    </div>
</div>
