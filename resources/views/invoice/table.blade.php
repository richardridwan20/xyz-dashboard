<table id="example" class="table table-hover table-striped table-vcenter table-bordered table-responsive">
    <thead>
        <tr>
            <th id="month" data-sort="month" data-order="DESC" class="medium-th session-head text-capitalize">
                <b>Month</b>
                <i class="month fa fa-pull-right fa-sort"></i>
            </th>
            <th id="year" data-sort="year" data-order="DESC" class="medium-th session-head text-capitalize">
                <b>Year</b>
                <i class="year fa fa-pull-right fa-sort"></i>
            </th>
            <th id="partner_id" data-sort="partner_id" data-order="DESC" class="medium-th session-head text-capitalize">
                <b>Partner Name</b>
                <i class="partner_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="invoice_number" data-sort="invoice_number" data-order="DESC" class="large-th session-head text-capitalize">
                <b>Invoice Number</b>
                <i class="invoice_number fa fa-pull-right fa-sort"></i>
            </th>
            <th id="total" data-sort="total" data-order="DESC" class="medium-th session-head text-capitalize">
                <b>Total</b>
                <i class="total fa fa-pull-right fa-sort"></i>
            </th>
            <th id="action" data-sort="action" data-order="DESC" class="medium-th session-head text-capitalize">
                <b>Action</b>
                <i class="action fa fa-pull-right fa-sort"></i>
            </th>
        </tr>
    </thead>
    <tbody id="tableAjax">

        @forelse ($invoices as $invoice)
        <tr>
            <td>{{$invoice['month']}}</td>
            <td>{{$invoice['year']}}</td>
            <td>{{$invoice['partner_id']['name']}}</td>
            <td>{{$invoice['invoice_number']}}</td>
            <td>{{$invoice['total']}}</td>
            <td><a href="{{ route('dashboard.invoice', $invoice['invoice_number']) }}" target="_blank"><button class="btn btn-alt-danger">Create Invoice</button></a></td>
        </tr>
        @empty
            <tr>
                <td colspan="6">No data to be shown.</td>
            </tr>
        @endforelse

    </tbody>
</table>

<div class="row">
    <div class="col page-info">
        Showing {{$invoices->firstItem()}} to {{$invoices->lastItem()}} of {{$invoices->total()}} entries
    </div>
    <div class="col">
        <div class="float-right paginate">
            {{$invoices->appends($append)->links('pagination/simple-bootstrap-4')}}
        </div>
    </div>
</div>
