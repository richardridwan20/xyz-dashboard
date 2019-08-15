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

            <!-- Sign In Form -->
            <div class="row justify-content-center px-5">
                <div class="col-sm-8 col-md-6 col-xl-4">
                    <form class="js-validation-signin" action="{{ route('product.create') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">

                                        <select type="dropdown" class="form-control" id="product" name="product">
                                            <option disabled selected>Select Product</option>
                                            <option value=1>Sequis Mikro Sejahtera</option>
                                        </select>

                                        @error('product')
                                            <p style="color:red">
                                                <strong>{{ $message }}</strong>
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">

                                    <select type="dropdown" class="form-control" id="plan" name="plan">
                                        <option  disabled selected>Select Plan</option>
                                        <option value="Standard">Standard</option>
                                        <option value="Deluxe">Deluxe</option>
                                    </select>

                                    @error('plan')
                                        <p style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">

                                    <input type="text" class="form-control @error('sum_assured') is-invalid @enderror" id="sum_assured" name="sum_assured" required autocomplete="sum_assured">
                                    <label for="sum_assured">Sum Assured</label>

                                    @error('sum_assured')
                                        <p style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">

                                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="benefits" name="benefits" required>
                                    <label for="benefits">Benefits</label>

                                    @error('benefits')
                                        <p style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">

                                    <input type="text" class="form-control @error('commission') is-invalid @enderror" id="description" name="description" required autocomplete="description">
                                    <label for="description">Description</label>

                                    @error('description')
                                        <p style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">

                                    <input type="text" class="form-control @error('premium') is-invalid @enderror" id="premium" name="premium" required autocomplete="premium">
                                    <label for="premium">Premium</label>

                                    @error('premium')
                                        <p style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">

                                    <input type="text" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" required autocomplete="duration">
                                    <label for="duration">Duration</label>

                                    @error('duration')
                                        <p style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="form-group row gutters-tiny">
                            <div class="col-12 mb-10">
                                <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary" formaction="{{ route('product.create')}}">
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

