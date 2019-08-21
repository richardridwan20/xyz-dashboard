@extends('layouts.master')

@section('content')

<div class="content">
    <!-- Page Content -->
    <div class="bg-gd-primary">
        <div class="hero-static content content-full bg-white" data-toggle="appear">
                <a class="btn btn-alt-info back-btn" href="{{ Route('voucher.index') }}">Back to Manage Voucher</a>
            <!-- Header -->
            <div class="py-30 px-5 text-center">
                <a class="link-effect font-w700" href="index.html">
                    <img class="content-header-logo" src="assets\media\photos\sovera-logo.png" alt="">
                </a>
                <h1 class="h2 font-w700 mt-50 mb-10">Voucher Form</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Add Voucher, please fill the voucher detail</h2>
            </div>
            <form action="{{ route('voucher.create') }}" method="POST" novalidate>
            @csrf
                <br>
                <div class="row justify-content-center  ">
                    <div class="col-md-6">
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title"><b>Voucher Data</b></h3>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-material ">
                                                <input type="text" class="form-control @error('voucher_number') is-invalid @enderror" id="voucher_number" name="voucher_number" required autocomplete="voucher_number">
                                                <label for="voucher_number">Voucher Number</label>
                                                @error('voucher_number')
                                                    <p style="color:red">
                                                        <strong>{{ $message }}</strong>
                                                    </p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control @error('certificate') is-invalid @enderror" id="certificate" name="certificate" required autocomplete="certificate">
                                                <label for="certificate">Certificate Number</label>
                                                @error('certificate')
                                                    <p style="color:red">
                                                        <strong>{{ $message }}</strong>
                                                    </p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="date" class="form-control @error('expiry') is-invalid @enderror" id="expiry" name="expiry" required autocomplete="expiry">
                                                <label for="expiry">Expiry Date</label>
                                                @error('expiry')
                                                    <p style="color:red">
                                                        <strong>{{ $message }}</strong>
                                                    </p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control @error('partner_name') is-invalid @enderror" id="partner_name" name="partner_name" required autocomplete="partner_name">
                                                <label for="partner_name">Partner Name</label>
                                                @error('partner_name')
                                                    <p style="color:red">
                                                        <strong>{{ $message }}</strong>
                                                    </p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12 mb-10">
                                        <div class="form-group gutters-tiny">
                                            <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary" >
                                            <i class="si si-register mr-10"></i>  {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
    <!-- END Page Content -->
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    var session1 = "{{$notify}}"

    if (session1 == 'add') {
        Swal.fire(
        'Success!',
        'Voucher successfully added',
        'success'
        )
    }
</script>

@endsection

