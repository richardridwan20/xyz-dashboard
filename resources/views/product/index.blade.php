@extends('layouts.master')

@section('content')
<div class="content">
    <div class="block block-fx-shadow">
        <div class="block-header block-header-default bg-primary-lighter">
            <h3 class="block-title text-uppercase">Manage Product</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="form-group row">
                <div class="col-2">
                    @role('supadmin')
                        <a href="{{ route('product.add_product') }}"><button class="btn btn-alt-primary"><i class="fa fa-plus"></i> Add New Product</button></a>
                    @endrole
                </div>
            </div>
            @include('product.product_table')
        </div>
    </div>
</div>
<br>
<div class="content">
    <div class="block block-fx-shadow">
        <div class="block-header block-header-default bg-primary-lighter">
            <h3 class="block-title text-uppercase">Manage Plan</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="form-group row">
                <div class="col-2" style="margin-left: -10px;">
                    <a href="{{ route('product.add_plan') }}"><button class="btn btn-alt-primary"><i class="fa fa-plus"></i> Add New Plan</button></a>
                </div>
            </div>
            @include('product.plan_table')
        </div>
    </div>
</div>

@push('script')

<script type="text/javascript">

    $(document).ready(function()
    {
        $(function() {
            $('#editProductModal').on("show.bs.modal", function (e) {
                var id = $(e.relatedTarget).data('id');
                var name = $(e.relatedTarget).data('name');
                $("#editProductModalLabel").html($(e.relatedTarget).data('title'));
                $("#productId").val(id);
                $("#productName").text(name);
            });
        });

        $(function() {
            $('#editPlanModal').on("show.bs.modal", function (e) {
                var id = $(e.relatedTarget).data('id');
                var name = $(e.relatedTarget).data('name');
                $("#editProductModalLabel").html($(e.relatedTarget).data('title'));
                $("#productId").val(id);
                $("#productName").text(name);
            });
        });
    });

</script>

@endpush

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    var session1 = "{{Session::get('notify')}}"


    console.log(session1)
    if (session1 == 'delete_plan') {
            Swal.fire(
            'Deleted!',
            'Plan Successfully Deleted',
            'success'
            )
    }
    else if (session1 == 'delete_product') {
            Swal.fire(
            'Deleted!',
            'Product Successfully Deleted',
            'success'
            )
    }
    else if (session1 == 'add_plan') {
            Swal.fire(
            'Success!',
            'Plan successfully added',
            'success'
            )
    }else if(session1 == 'add_product') {
            Swal.fire(
            'Success!',
            'Product successfully added',
            'success'
            )
    }else if(session1 == 'change_product_name_success') {
            Swal.fire(
            'Success!',
            'Product name successfully changed',
            'success'
            )
    }else if(session1 == 'edited') {
            Swal.fire(
            'Success!',
            'plan successfully changed',
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

