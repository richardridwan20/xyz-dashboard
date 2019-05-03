<table id="example" class="table table-hover table-striped table-vcenter table-bordered table-responsive">
    <thead>
        <tr>
            <th id="id" data-sort="id" data-order="DESC" class="medium-th session-head">
                Invoice ID
                <i class="id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="partner_id" data-sort="partner_id" data-order="DESC" class="medium-th session-head">
                Partner_Name
                <i class="partner_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="date" data-sort="date" data-order="DESC" class="medium-th session-head">
                Date
                <i class="date fa fa-pull-right fa-sort"></i>
            </th>
            <th id="status" data-sort="status" data-order="DESC" class="medium-th session-head">
                Status
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
            <th id="created_at" data-sort="created_at" data-order="DESC" class="medium-th session-head">
                Created At
                <i class="created_at fa fa-pull-right fa-sort"></i>
            </th>
            <th id="updated_at" data-sort="updated_at" data-order="DESC" class="large-th session-head">
                Updated At
                <i class="updated_at fa fa-pull-right fa-sort"></i>
            </th>
        </tr>
    </thead>
    <tbody id="tableAjax">

        @forelse ($invoices as $invoice)
        <tr>
            <td>{{$invoice->id}}</td>
            <td>{{$invoice->partner->name}}</td>
            <td>{{$invoice->date}}</td>
            <td>{{$invoice->status}}</td>
            <td>{{$invoice->created_at}}</td>
            <td>{{$invoice->updated_at}}</td>
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
        Showing {{$invoices->firstItem()}} to {{$invoices->lastItem()}} of {{$invoices->total()}} entries
    </div>
    <div class="col">
        <div class="float-right paginate">
            {{$invoices->appends($append)->links('pagination/simple-bootstrap-4')}}
        </div>
    </div>
</div>
