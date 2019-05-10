<table id="example" class="table table-hover table-striped table-vcenter table-bordered table-responsive">
    <thead>
        <tr>
            <th id="id" data-sort="id" data-order="DESC" class="medium-th session-head text-capitalize">
                <b>Transaction ID</b>
                <i class="id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="partner_id" data-sort="partner_id" data-order="DESC" class="medium-th session-head text-capitalize">
                <b>Partner Name</b>
                <i class="partner_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="customer_id" data-sort="customer_id" data-order="DESC" class="medium-th session-head text-capitalize">
                <b>PH Email</b>
                <i class="customer_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="product_id" data-sort="product_id" data-order="DESC" class="small-th session-head text-capitalize">
                <b>Plan</b>
                <i class="product_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="protection_duration" data-sort="protection_duration" data-order="DESC" class="medium-th session-head text-capitalize">
                <b>Protection Duration</b>
                <i class="protection_duration fa fa-pull-right fa-sort"></i>
            </th>
            <th id="certificate_number" data-sort="certificate_number" data-order="DESC" class="medium-th session-head text-capitalize">
                <b>Certificate Number</b>
                <i class="certificate_number fa fa-pull-right fa-sort"></i>
            </th>
            <th id="status" data-sort="status" data-order="DESC" class="small-th session-head text-capitalize">
                <b>Status</b>
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
        </tr>
    </thead>
    <tbody id="tableAjax">

        @forelse ($transactions as $transaction)
        <tr>
            <td><a href="{{ route('dashboard.detail', $transaction['id']) }}">{{$transaction['id']}}</a></td>
            <td>{{$transaction['partner_id']['name']}}</td>
            <td>{{$transaction['customer_id']['email']}}</td>
            <td>{{$transaction['product_id']['plan_id']['name']}}</td>
            <td>{{$transaction['protection_duration']}}</td>
            <td>{{$transaction['certificate_number']}}</td>
            <td>{{$transaction['payment_status']}}</td>
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
