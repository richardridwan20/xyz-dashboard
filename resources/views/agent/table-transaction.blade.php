<table id="example" class="table table-sm table-responsive table-hover table-vcenter table-striped table-borderless ">
<thead>
    <tr>
        <th id="id" data-sort="id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
            <b>Transaction ID</b>
            <i class="id fa fa-pull-right"></i>
        </th>
        <th id="tpPartner" data-sort="tpPartner" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
            <b>Customer Name</b>
            <i class="status fa fa-pull-right"></i>
        </th>
        <th id="partner_id" data-sort="partner_id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
            <b>Insured Name</b>
            <i class="partner_id fa fa-pull-right"></i>
        </th>
        <th id="customer_id" data-sort="customer_id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
            <b>Product Name</b>
            <i class="customer_id fa fa-pull-right"></i>
        </th>
        <th id="customer_id" data-sort="customer_id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
            <b>Plan Name</b>
            <i class="customer_id fa fa-pull-right"></i>
        </th>
        <th id="customer_id" data-sort="customer_id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
            <b>Status</b>
            <i class="customer_id fa fa-pull-right"></i>
        </th>
    </tr>
</thead>
<tbody id="tableAjax">
    @forelse ($agentTransactions as $agentTransaction)
        <tr>
            <td><a href="{{ route('dashboard.detail', $agentTransaction['id']) }}">{{$agentTransaction['id']}}</a></td>
            <td>{{$agentTransaction['customer_id']['name']}}</td>
            <td>{{$agentTransaction['insured_name']}}</td>
            <td>{{$agentTransaction['plan_id']['product_id']['name']}}</td>
            <td>{{$agentTransaction['plan_id']['name']}}</td>
            <td>{{$agentTransaction['status']}}</td>
        </tr>
    @empty
        <tr>
            <td colspan="10">No data to be shown.</td>
        </tr>
    @endforelse

</tbody>
</table>
