<table id="example" class="table table-sm table-responsive table-hover table-vcenter table-striped table-borderless ">
<thead>
    <tr>
        <th id="id" data-sort="id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
            <b>Partner ID</b>
            <i class="id fa fa-pull-right"></i>
        </th>
        <th id="tpPartner" data-sort="tpPartner" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
            <b>Partner Name</b>
            <i class="status fa fa-pull-right"></i>
        </th>
        <th id="partner_id" data-sort="partner_id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
            <b>Product ID</b>
            <i class="partner_id fa fa-pull-right"></i>
        </th>
        <th id="customer_id" data-sort="customer_id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
            <b>Product Name</b>
            <i class="customer_id fa fa-pull-right"></i>
        </th>
        <th id="customer_id" data-sort="customer_id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
            <b>Plan</b>
            <i class="customer_id fa fa-pull-right"></i>
        </th>
        <th id="customer_id" data-sort="customer_id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
            <b>Duration</b>
            <i class="customer_id fa fa-pull-right"></i>
        </th>
        <th id="customer_id" data-sort="customer_id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
            <b>Quota</b>
            <i class="customer_id fa fa-pull-right"></i>
        </th>
        <th id="customer_id" data-sort="customer_id" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
            <b>Action</b>
            <i class="customer_id fa fa-pull-right"></i>
        </th>
    </tr>
</thead>
<tbody id="tableAjax">
    @if(auth()->user()->can('view all transaction') ||  auth()->user()->can('view all transaction by partner name'))
        {{$cpp = ''}}
        @forelse ($productOfPartners as $productOfPartner)
            <tr>
                @if($cpp != $productOfPartner['partner_id']['id'])
                <td>{{$cpp = $productOfPartner['partner_id']['id']}}</td>
                <td>{{$productOfPartner['partner_id']['name']}}</td>
                @else
                <td></td>
                <td></td>
                @endif
                <td>{{$productOfPartner['plan_id']['id']}}</td>
                <td>{{$productOfPartner['plan_id']['product_id']['name']}}</td>
                <td>{{$productOfPartner['plan_id']['name']}}</td>
                <td>{{$productOfPartner['plan_id']['duration']}}</td>
                <td>{{$productOfPartner['quota']}}</td>
                <td>
                    <button class="btn btn-alt-primary" data-toggle="modal" data-target="#uploadModal" data-id="{{$productOfPartner['id']}}" data-name="Testt">Edit</button>
                    <a onclick="popConfirmation('productofpartner/delete/{{$productOfPartner['id']}}')"><button class='btn btn-alt-danger'>Delete</button></a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="10">No data to be shown.</td>
            </tr>
        @endforelse
        @else
        <tr>
            <td colspan="10">Search data first.</td>
        </tr>
    @endif

</tbody>
</table>
