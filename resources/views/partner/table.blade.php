<table id="example" class="table table-hover table-responsive table-striped table-vcenter table-bordered ">
    <thead>
        <tr>
            <th id="id" data-sort="id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>ID</b>
                <i class="id fa fa-pull-right"></i>
            </th>
            <th style='line-height: 100%' id="partner_name" data-sort="partner_name" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Partner Name</b>
                <i class="partner_name fa fa-pull-right"></i>
            </th>
            <th id="company_name" data-sort="company_name" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Company Name</b>
                <i class="company_name fa fa-pull-right"></i>
            </th>
            <th id="company_address" data-sort="company_address" data-order="DESC" class="large-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Address</b>
                <i class="company_address fa fa-pull-right"></i>
            </th>
            <th id="commission" data-sort="commission" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Commission</b>
                <i class="commission fa fa-pull-right"></i>
            </th>
            <th id="email" data-sort="email" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Email</b>
                <i class="email fa fa-pull-right"></i>
            </th>
            <th id="allow_send" data-sort="allow_send" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Allow Send Data</b>
                <i class="allow_send fa fa-pull-right"></i>
            </th>
            <th id="allow_phone" data-sort="allow_phone" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Allow Phone</b>
                <i class="allow_phone fa fa-pull-right"></i>
            </th>
            <th id="action" data-sort="action" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Action</b>
                <i class="action fa fa-pull-right"></i>
            </th>
        </tr>
    </thead>
    <tbody id="tableAjax">
        @forelse ($partners as $partner)
            <tr>
                <td><a href="{{ route('partner.detail', $partner['id']) }}">{{$partner['id']}}</a></td>
                <td>{{$partner['name']}}</td>
                <td>{{$partner['company_name']}}</td>
                <td>{{$partner['company_address']}}</td>
                <td>{{$partner['commission']}}</td>
                <td>{{$partner['email']}}</td>
                @if($partner['allow_send_data'] == 0)
                <td>No</td>
                @else
                <td>Yes</td>
                @endIf
                @if($partner['allow_phone_data'] == 0)
                <td>No</td>
                @else
                <td>Yes</td>
                @endIf
                <td>
                    {{-- <button class="btn btn-alt-primary" data-toggle="modal" data-target="#uploadModal" data-id="{{$productOfPartner['id']}}" data-name="">Edit</button> --}}
                    <a onclick="confirmation('partner/delete/{{$partner['id']}}')"><button class='btn btn-alt-danger'>Delete</button></a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="9">No data to be shown.</td>
            </tr>
        @endforelse
    </tbody>
</table>
