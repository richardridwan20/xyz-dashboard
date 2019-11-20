@extends('layouts.master')

@section('content')

<div class="content">
    <div class="block block-fx-shadow">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title text-uppercase"><b>Partner</b></h3>
                <i class="fa fa-info-circle" data-toggle="popover" title="Partner" data-placement="right" data-content="Daftar Partner yang bekerjasama dengan Sequis dalam proyek B2B2C ini."></i>
            </div>
            <div class="block-content block-content-full">
                <div class="form-group row">
                    <div class="col-12 text-right">
                        <a href="{{route('partner.form')}}">
                            <button class="btn btn-alt-primary"><i class="fa fa-plus"></i> Add Partner</button>
                        </a>
                        <a href="{{route('partner.form-role')}}">
                            <button class="btn btn-alt-primary"><i class="fa fa-plus"></i> Add Partner Role</button>
                        </a>
                    </div>
                </div>
                @include('partner.table')
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8">
</script>

<script>
    var session1 = "{{Session::get('success')}}"
    var session2 = "{{Session::get('notify')}}"

    if (session1 == 'success') {
            Swal.fire(
            'Success!',
            'Partner successfully added!',
            'success'
            )
    }
    else if (session2 == 'delete') {
            Swal.fire(
            'Success!',
            'Partner successfully deleted!',
            'success'
            )
    }
    else if (session2 == 'fail_delete') {
            Swal.fire(
            'Cant Delete!',
            'Partner cannot be deleted, make sure all partner product already deleted',
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

