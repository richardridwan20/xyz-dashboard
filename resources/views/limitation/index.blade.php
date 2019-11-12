@extends('layouts.master')

@section('content')
<div class="content">
    <div class="block block-fx-shadow">
        <div class="block-header block-header-default">
            <h3 class="block-title text-uppercase"><b>Area Limitation</b></h3>
            <i class="fa fa-info-circle" data-toggle="popover" title="Area Limitation" data-placement="right" data-content="Area Limitation berisikan kode-kode provinsi di Indonesia yang dibatasi untuk melakukan transaksi. Kode-kode provinsi bisa dilihat dari 2 angka diawal nomor KTP masing-masing nasabah."></i>
        </div>
        <div class="block-content block-content-full">
            <div class="form-group row">
                <div class="col-2">
                    @role('supadmin|financial|operation')
                        <a href="{{ route('limitation.form') }}"><button class="btn btn-alt-primary"><i class="fa fa-plus"></i> Add Detail Limitation</button></a>
                    @endrole
                </div>
            </div>
            @include('limitation.table')
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
            'Detail Limitation Successfully Deleted',
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

