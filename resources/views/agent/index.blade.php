@extends('layouts.master')

@section('content')
<div class="content">
    <div class="block block-fx-shadow">
        <div class="block">
            <div class="block-header block-header-default bg-primary-lighter">
                <h3 class="block-title text-uppercase">Manage Agent</h3>
                <div class="block-options">
                </div>
            </div>
            <div class="block-content block-content-full">
                <div align='right'>
                @role('supadmin|financial|operation')
                    <a href="{{ route('dashboard.agent_quota') }}"><button class="btn btn-primary"><i class="fa fa-tasks"></i> Manage Partner Quota</button></a>
                @endrole
                    <a href="{{ route('dashboard.agent_form') }}"><button class="btn btn-primary"><i class="fa fa-plus"></i> Agent</button></a>
                </div>
                @include('agent.table')
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    var session1 = "{{Session::get('notify')}}"
    console.log(session1)
    if (session1 == 'success') {
            Swal.fire(
            'Deleted!',
            'Agent Account Successfully Deleted',
            'success'
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
                window.location.href = routeHref;            }
        })
    }
</script>
@endsection

