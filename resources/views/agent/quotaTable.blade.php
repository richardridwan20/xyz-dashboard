<table id="example" class="table table-hover table-striped table-vcenter table-bordered">
    <thead>
        <tr>
            <th id="name" data-sort="name" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Partner Name</b>
                <i class="id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="quota" data-sort="quota" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Agent Quota</b>
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
        </tr>
    </thead>
    <tbody id="tableAjax">
            @forelse ($agents as $agent)
                <tr>
                    <td><input readonly='readonly' value='{{$agent['name']}}'></td>
                    <td><input type='text' value='{{$agent['agent_quota']}}' name='input_{{$agent['name']}}'></td>
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
