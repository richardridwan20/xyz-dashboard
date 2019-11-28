@extends('layouts.master')

@section('content')

    <div class="content">
        <div class="">
            @include('partner.partner-detail')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script>

        $(document).ready(function()
        {
                $(function() {
                    $('#uploadModal').on("show.bs.modal", function (e) {
                        var id = $(e.relatedTarget).data('id');
                        $("#ppId").val(id);
                    });

                    $('#updatePartnerModal').on("show.bs.modal", function (e) {
                        var name = $(e.relatedTarget).data('name');
                        var caddress = $(e.relatedTarget).data('caddress');
                        var cname = $(e.relatedTarget).data('cname');
                        var email = $(e.relatedTarget).data('email');
                        var id = $(e.relatedTarget).data('id');
                        $("#partnerName").val(name);
                        $("#companyName").val(cname);
                        $("#companyAddress").val(caddress);
                        $("#email").val(email);
                        $("#partnerId").val(id);
                    });
                });

                var session1 = "{{Session::get('notify')}}"

                if (session1 == 'delete') {
                    Swal.fire(
                    'Deleted!',
                    'Detail Limitation Successfully Deleted',
                    'success'
                    )
                } else if (session1 == 'deleted') {
                    Swal.fire(
                    'Deleted!',
                    'Product of Partner Successfully Deleted',
                    'success'
                    )
                } else if (session1 == 'quotaChanged') {
                    Swal.fire(
                    'Success!',
                    'Quota Successfully Updated',
                    'success'
                    )
                } else if (session1 == 'created') {
                    Swal.fire(
                    'Success!',
                    'Product of Partner Successfully Created',
                    'success'
                    )
                } else if (session1 == 'limitationCreated') {
                    Swal.fire(
                    'Success!',
                    'Limitation Successfully Created',
                    'success'
                    )
                } else if (session1 == 'updated') {
                    Swal.fire(
                    'Success!',
                    'Partner Data Successfully Updated',
                    'success'
                    )
                }
        });

        function confirmation(routeHref){
            Swal.fire({
                title: 'Delete Limitation?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    window.location.href = window.location.origin + '/' + routeHref;
                }
            })
        };

        function popConfirmation(routeHref){
            Swal.fire({
                title: 'Delete Product of Partner?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    window.location.href = window.location.origin + '/' + routeHref;
                }
            })
        };


</script>

@endsection
