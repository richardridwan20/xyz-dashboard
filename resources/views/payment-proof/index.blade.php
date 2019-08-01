@extends('layouts.master')

@section('content')

<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default bg-primary-lighter">
                    <h3 class="block-title">PENDING TRANSACTIONS</h3>
                </div>
                <div class="block-content">
                    @include('payment-proof.table')
                </div>
            </div>
            <!-- END Default Elements -->
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
                <form action="{{ route('payment.upload') }}" method="POST" enctype="multipart/form-data">
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
                        <input type="hidden" class="form-control" id="check" name="id">
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

        $(document).ready(function()
        {
            $(function() {
                $('#uploadModal').on("show.bs.modal", function (e) {
                    var id = $(e.relatedTarget).data('id');
                    $("#uploadModalLabel").html($(e.relatedTarget).data('title'));
                    $("#check").val(id);
                });
            });
        });

        var session1 = "{{Session::get('notify')}}"
        console.log(session1)
        if (session1 == 'uploaded') {
            Swal.fire(
            'Success!',
            'Payment proof successfully uploaded',
            'success'
            )
        }

    </script>

@endpush
