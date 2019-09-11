<table id="example" class="table table-hover table-striped table-vcenter table-bordered">
    <thead>
        <tr>
            <th id="partner_id" data-sort="partner_id" data-order="DESC" class="medium-th session-head text-capitalize">
                <b>Partner Name</b>
                <i class="partner_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="month" data-sort="month" data-order="DESC" class="small-th session-head text-capitalize">
                <b>Month</b>
                <i class="month fa fa-pull-right fa-sort"></i>
            </th>
            <th id="year" data-sort="year" data-order="DESC" class="small-th session-head text-capitalize">
                <b>Year</b>
                <i class="year fa fa-pull-right fa-sort"></i>
            </th>
            <th id="invoice_number" data-sort="invoice_number" data-order="DESC" class="medium-th session-head text-capitalize">
                <b>Invoice Number</b>
                <i class="invoice_number fa fa-pull-right fa-sort"></i>
            </th>
            <th id="paid_at" data-sort="paid_at" data-order="DESC" class="medium-th session-head text-capitalize">
                <b>Status</b>
                <i class="paid_at fa fa-pull-right fa-sort"></i>
            </th>
            <th id="action" data-sort="action" data-order="DESC" class="medium-th session-head text-capitalize">
                <b>Action</b>
                <i class="action fa fa-pull-right fa-sort"></i>
            </th>
        </tr>
    </thead>
    <tbody id="tableAjax">

        @forelse ($invoiceLogs as $invoice)
        <tr>
            <td>{{$invoice['partner_id']['name']}}</td>
            <td>{{$invoice['month']}}</td>
            <td>{{$invoice['year']}}</td>
            <td>{{$invoice['invoice_number']}}</td>
            <td>{{$invoice['status']}}</td>
            <td><a href="{{ route('invoice.download', $invoice['invoice_number']) }}"><button class="btn btn-alt-danger"><small>Download</small></button></a>
                @if ($invoice['status'] == 'Invoice Created')
                    <button class="btn btn-alt-primary" data-toggle="modal" data-target="#uploadModal" data-invoice="{{$invoice['invoice_number']}}"><small>Update</small></button>
                @endif
            </td>
        </tr>
        @empty
            <tr>
                <td colspan="7">No data to be shown.</td>
            </tr>
        @endforelse

    </tbody>
</table>

<div class="row">
    <div class="col page-info">
        Showing {{$invoiceLogs->firstItem()}} to {{$invoiceLogs->lastItem()}} of {{$invoiceLogs->total()}} entries
    </div>
    <div class="col">
        <div class="float-right paginate">
            {{$invoiceLogs->appends($append)->links('pagination/simple-bootstrap-4')}}
        </div>
    </div>
</div>
