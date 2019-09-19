<table id="example" class="table table-hover table-striped table-vcenter table-bordered">
    <thead>
        <tr>
            <th id="voucher_number" data-sort="voucher_number" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Voucher Number</b>
                <i class="voucher_number fa fa-pull-right fa-sort"></i>
            </th>
            <th id="certificate_number" data-sort="certificate_number" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Certificate Number</b>
                <i class="certificate_number fa fa-pull-right fa-sort"></i>
            </th>
            <th id="status" data-sort="status" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Status</b>
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
            <th id="expiry_date" data-sort="expiry_date" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Expiry Date</b>
                <i class="expiry_date fa fa-pull-right fa-sort"></i>
            </th>
            <th id="partner" data-sort="partner" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Partner</b>
                <i class="partner fa fa-pull-right fa-sort"></i>
            </th>
            <th id="action" data-sort="action" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Actions</b>
                <i class="action fa fa-pull-right fa-sort"></i>
            </th>
        </tr>
    </thead>
    <tbody id="tableAjax">
            @forelse ($vouchers as $voucher)
                <tr>
                    <td>{{$voucher['voucher_code']}}</td>
                    <td>{{$voucher['certificate_number']}}</td>
                    <td>{{$voucher['status']}}</td>
                    <td>{{$voucher['expiry_date']}}</td>
                    <td>{{$voucher['partner']}}</td>
                    <td><a onclick="confirmation('voucher/delete/{{$voucher['id']}}')"><button class='btn btn-alt-danger'>Delete</button></a></td>
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
        Showing {{$vouchers->firstItem()}} to {{$vouchers->lastItem()}} of {{$vouchers->total()}} entries
    </div>
    <div class="col">
        <div class="float-right paginate">
            {{$vouchers->appends($append)->links('pagination/simple-bootstrap-4')}}
        </div>
    </div>
</div>
