@extends('layouts.master')

@section('content')

<div class="content">
    <div class="block block-fx-shadow">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title text-uppercase"><b>Invoices Created</b></h3>
                <i class="fa fa-info-circle" data-toggle="popover" title="Invoices Created" data-placement="right" data-content="Berisikan invoice kepada partner yang sudah dibuat. Invoice dapat didownload dan dikirimkan ke partner pada tanggal 20 setiap bulannya."></i>
            </div>
            <div class="block-content block-content-full">
                @include('invoice.table-invoice-paid')
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="block block-fx-shadow">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title text-uppercase"><b>Invoices to be Created</b></h3>
                <i class="fa fa-info-circle" data-toggle="popover" title="Invoices To Be Created" data-placement="right" data-content="Berisikan transaksi dari periode sebelumnya yang dapat dibuatkan invoice. Invoice kemudian dapat didownload di tabel diatas."></i>
            </div>
            <div class="block-content block-content-full">
                @include('invoice.table')
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload Payment Proof</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('payment.invoice') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group {{ !$errors->has('title') ?: 'has-error' }}">
                    <div class="form-group {{ !$errors->has('file') ?: 'has-error' }}">
                    <div class="form-group row">
                        <label class="col-12">Upload bukti bayar yang sesuai</label>
                        <div class="col-8">
                            <div class="custom-file">
                                <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Codebase() -> uiHelperCoreCustomFileInput()) -->
                                <input type="file" class="custom-file-input" id="example-file-input-custom" name="image" data-toggle="custom-file-input">
                                <label class="custom-file-label" for="example-file-input-custom">Pilih file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="check" name="invoice_number">
                    </div>
                    <div class="form-group">
                        <label for="example-nf-email">Masukkan tanggal invoice dibayar</label>
                        <input type="date" class="form-control" id="paid" name="paid_at">
                    </div>
                    <div class="form-group">
                        <label for="example-nf-email">Masukkan nominal yang dibayar sesuai bukti pembayaran</label>
                        <input type="text" class="form-control" id="total" name="total" placeholder="Masukkan total yang dibayar..">
                    </div>
                    <div class="form-group">
                        <label for="example-nf-email">Masukkan notes (optional)</label>
                        <input type="text" class="form-control" id="notes" name="notes" placeholder="Masukkan notes..">
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" value="Submit" class="btn btn-alt-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">

        var session1 = "{{Session::get('notify')}}"
            if (session1 == 'created') {
                Swal.fire(
                    'Success!',
                    'Invoice successfully created!.',
                    'success'
                )
            }

        function confirmation(routeHref){
            Swal.fire({
                title: 'Do you want to create Invoice?',
                text: "If succeeded you can download it on the 'Invoice Created' table",
                type: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, create it!'
            }).then((result) => {
                if (result.value) {
                    window.location.href = routeHref;
                }
            })
        }

        $(document).ready(function()
        {
            $(function() {
                $('#uploadModal').on("show.bs.modal", function (e) {
                    var id = $(e.relatedTarget).data('invoice');
                    $("#uploadModalLabel").html($(e.relatedTarget).data('title'));
                    $("#check").val(id);
                });
            });

            var session = "{{Session::get('notify')}}"
            if (session == 'success') {
                Swal.fire(
                    'Uploaded!',
                    'Invoice berhasil diupdate.',
                    'success'
                )
            }
        });

    </script>

@endpush


