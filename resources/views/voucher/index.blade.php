@extends('layouts.master')

@section('content')
<div class="content">
    <div class="block block-fx-shadow">
        <div class="block-header block-header-default bg-primary-lighter">
            <h3 class="block-title text-uppercase">Manage Vouchers</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="form-group row">
                <div class="col-2">
                    @role('supadmin|financial|operation')
                        <a href="{{ route('voucher.form') }}"><button class="btn btn-alt-primary"><i class="fa fa-plus"></i> Add Voucher</button></a>
                    @endrole
                </div>
                <div class="col-2" style="margin-left: 20px;">

                </div>
            </div>
            @include('voucher.table')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    var session1 = "{{Session::get('notify')}}"

    console.log(session1)
    if (session1 == 'delete') {
            Swal.fire(
            'Deleted!',
            'Voucher Successfully Deleted',
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

