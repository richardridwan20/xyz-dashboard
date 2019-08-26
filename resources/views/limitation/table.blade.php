<table id="example" class="table table-hover table-striped table-vcenter table-bordered">
    <thead>
        <tr>
            <th id="agent_name" data-sort="agent_name" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Partner Name</b>
                <i class="id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="citizen_id" data-sort="citizen_id" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Product Name</b>
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
            <th id="phone" data-sort="phone" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Plan</b>
                <i class="partner_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="dob" data-sort="dob" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Limitation Code</b>
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
            <th id="username" data-sort="username" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Area Name</b>
                <i class="customer_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="action" data-sort="action" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Actions</b>
                <i class="customer_id fa fa-pull-right fa-sort"></i>
            </th>
        </tr>
    </thead>
    <tbody id="tableAjax">
            @forelse ($detailLimitations as $detailLimitation)
                <tr>
                    <td>{{$detailLimitation['product_of_partner']['partner_id']['name']}}</td>
                    <td>{{$detailLimitation['product_of_partner']['plan_id']['product_id']['name']}}</td>
                    <td>{{$detailLimitation['product_of_partner']['plan_id']['name']}}</td>
                    <td>{{$detailLimitation['limitation']['limit_code']}}</td>
                    <td>{{$detailLimitation['limitation']['area_name']}}</td>
                    <td></td>
                </tr>
            @empty
                <tr>
                    <td colspan="16">No data to be shown.</td>
                </tr>
            @endforelse
    </tbody>
</table>
<div class="row">
    {{-- <div class="col page-info">
        Showing {{$detailLimitation->firstItem()}} to {{$detailLimitation->lastItem()}} of {{$detailLimitation->total()}} entries
    </div>
    <div class="col">
        <div class="float-right paginate">
            {{$detailLimitation->appends($append)->links('pagination/simple-bootstrap-4')}}
        </div>
    </div> --}}
</div>
