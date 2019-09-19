@extends('layouts.master')

@section('content')

<div class="content">
    <!-- Page Content -->
    <div class="bg-gd-primary">
        <div class="hero-static content content-full bg-white" data-toggle="appear">
            <!-- Header -->
            <div class="py-30 px-5 text-center">
                <a class="link-effect font-w700" href="index.html">
                    <img class="content-header-logo" src="assets\media\photos\sovera-logo.png" alt="">
                </a>
                <h1 class="h2 font-w700 mt-50 mb-10">Register new Product</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Please add product details</h2>
            </div>
            <!-- END Header -->
            <div class="row justify-content-center px-5">
                <div class="col-sm-8 col-md-6 col-xl-4">
                    <form action="{{ route('product.create') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">

                                    <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="product_name" name="product_name" required autocomplete="product_name">
                                    <label for="product_name">Product Name</label>

                                    @error('product_name')
                                        <p style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group row gutters-tiny">
                            <div class="col-12 mb-10">
                                <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary">
                                    <i class="si si-register mr-10"></i>  {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Sign In Form -->
        </div>
    </div>
    <!-- END Page Content -->
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8">
</script>

<script>
    var session1 = "{{Session::get('success')}}"
    console.log(session1)

    if (session1 == 'success') {
            Swal.fire(
            'Success!',
            'Product successfully added',
            'success'
            )
    }
</script>

@endsection

