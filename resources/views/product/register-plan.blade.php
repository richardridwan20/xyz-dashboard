@extends('layouts.master')

@section('content')

<div class="content">
    <!-- Page Content -->
    <div class="bg-gd-primary">
        <div class="hero-static content content-full bg-white" data-toggle="appear">
                <a class="btn btn-alt-info back-btn" href="{{url()->previous()}}"><i class="fa fa-arrow-circle-left"></i> Back to Manage Product & Plan</a>
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
                    <form action="{{ route('product.create_plan') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">

                                    <select type="dropdown" class="form-control" id="product_id" name="product_id">
                                        <option disabled selected>Select Product</option>
                                        @for($i=0;$i<count($products);$i++)
                                            <option value="{{$products[$i]['id']}}" @if(old('product') == $products[$i]['id']) selected @endif>{{$products[$i]['name']}}</option>
                                        @endfor
                                    </select>

                                    @error('product_id')
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

                                    <select type="dropdown" class="form-control" id="duration" name="duration">
                                        <option disabled selected>Select duration</option>
                                        <option value="Monthly" @if(old('duration') == "Monthly") selected @endif>Monthly</option>
                                        <option value="Yearly" @if(old('duration') == "Yearly") selected @endif>Yearly</option>
                                    </select>

                                    @error('duration')
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

                                    <input type="text" class="form-control @error('plan_name') is-invalid @enderror" id="plan_name" name="plan_name" required autocomplete="plan_name" value="{{ old('plan_name') }}">
                                    <label for="plan_name">Plan Name</label>

                                    @error('plan_name')
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

                                    <input type="text" class="form-control @error('sum_assured') is-invalid @enderror" id="sum_assured" name="sum_assured" required autocomplete="sum_assured" value="{{ old('sum_assured') }}">
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

                                    <input type="text" class="form-control @error('benefits') is-invalid @enderror" id="benefits" name="benefits" required value="{{ old('benefits') }}">
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

                                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required autocomplete="description" value="{{ old('description') }}">
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

                                    <input type="text" class="form-control @error('premium') is-invalid @enderror" id="premium" name="premium" required autocomplete="premium" value="{{ old('premium') }}">
                                    <label for="premium">Premium</label>

                                    @error('premium')
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

