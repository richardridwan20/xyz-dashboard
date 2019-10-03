<table id="example" class="table table-hover table-striped table-vcenter table-bordered">
    <thead>
        <tr>
            <th id="agent_name" data-sort="agent_name" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Agent Name</b>
                <i class="id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="agent_name" data-sort="agent_name" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Branch Name</b>
                <i class="id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="citizen_id" data-sort="citizen_id" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Agent Citizen Id</b>
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
            <th id="phone" data-sort="phone" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Phone Number</b>
                <i class="partner_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="dob" data-sort="dob" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Date of Birth</b>
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
            <th id="username" data-sort="username" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Username</b>
                <i class="customer_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="action" data-sort="action" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Actions</b>
                <i class="customer_id fa fa-pull-right fa-sort"></i>
            </th>
        </tr>
    </thead>
    <tbody id="tableAjax">
            @forelse ($agents as $agent)
                <tr>
                    <td>{{$agent['agent_name']}}</td>
                    <td>{{$agent['branch_name']}}</td>
                    <td>{{$agent['citizen_id']}}</td>
                    <td>{{$agent['phone_number']}}</td>
                    <td>{{$agent['dob']}}</td>
                    <td>{{$agent['username']}}</td>
                    <td><a onclick="confirmation('delete/{{$agent['id']}}')"><button class='btn btn-alt-danger'>Delete</button></a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="16">No data to be shown.</td>
                </tr>
            @endforelse
    </tbody>
</table>
<div class="row">
    <div class="col page-info">
        Showing {{$agents->firstItem()}} to {{$agents->lastItem()}} of {{$agents->total()}} entries
    </div>
    <div class="col">
        <div class="float-right paginate">
            {{$agents->appends($append)->links('pagination/simple-bootstrap-4')}}
        </div>
    </div>
</div>
