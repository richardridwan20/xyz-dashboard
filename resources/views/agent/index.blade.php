@extends('layouts.master')

@section('content')
<div class="content">
    <div class="block block-fx-shadow">
        <div class="block-header block-header-default">
            <h3 class="block-title text-uppercase"><b>Manage Agent</b></h3>
            <i class="fa fa-info-circle" data-toggle="popover" title="Agent" data-placement="right" data-content="Partner yang mempunyai agent dapat diatur disini seperti menambahkan atau menghapus agent."></i>
        </div>
        <div class="block-content block-content-full">
            <div class="form-group row">
                <div class="col-12 text-right">
                    @role('supadmin|financial|operation')
                        <a href="{{ route('dashboard.agent_quota') }}"><button class="btn btn-alt-primary"><i class="fa fa-tasks"></i> Manage Partner Quota</button></a>
                    @endrole
                    <a href="{{ route('dashboard.agent_form') }}"><button class="btn btn-alt-primary"><i class="fa fa-plus"></i> Agent</button></a>
                </div>
            </div>
            @include('agent.table')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    var session1 = "{{Session::get('notify')}}"
    var quotaRemain1 = "{{$quotaRemain}}";

    if (session1 == 'delete') {
            Swal.fire(
            'Deleted!',
            'Agent Account Successfully Deleted',
            'success'
            )
    }

    if (session1 == 'add') {
            Swal.fire(
            'Success!',
            'Agent successfully added, agent quota remaining:'+quotaRemain1,
            'success'
            )
    }else if(session1 == 'quota_full') {
            Swal.fire(
            'Agent Full!',
            'Cannot add agent, agent quota remaining:'+quotaRemain1,
            'error'
            )
    }

    function confirmation(routeHref){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                window.location.href = routeHref;
            }
        })
    }
</script>
@endsection

