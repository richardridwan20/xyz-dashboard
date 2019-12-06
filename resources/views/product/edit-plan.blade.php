@extends('layouts.master')

@section('content')
{{-- {{dd($products)}} --}}
<div class="content">
    <!-- Page Content -->
    <div class="bg-gd-primary">
        <div class="hero-static content content-full bg-white" data-toggle="appear">
                <a class="btn btn-alt-info back-btn" href="{{url()->previous()}}"><i class="fa fa-arrow-circle-left"></i> Back to Manage Product & Plan</a>
            <!-- Header -->
            <div class="py-30 px-5 text-center">
                <a class="link-effect font-w700" href="index.html">
                    <img class="main-logo" src="{{asset('assets\media\photos\sovera-logo.png')}}" alt="">
                </a>
                <h1 class="h2 font-w700 mt-50 mb-10">Register new Product</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Please add product details</h2>
            </div>
            <!-- END Header -->

            <!-- Sign In Form -->
            <div class="row justify-content-center px-5">
                <div class="col-sm-8 col-md-6 col-xl-4">
                    <form action="{{ route('plan.change_data') }}" method="POST">
                    @csrf
                    <input type="hidden" id="id" name="id" value={{$plans['id']}}>
                    <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <div>before: {{$plans['product']['name']}}</div>
                                    <select type="dropdown" class="form-control" id="product_id" name="product_id">
                                        <option disabled selected>Select New Product</option>
                                        @for($i=0;$i<count($products);$i++)
                                            <option value="{{$products[$i]['id']}}" @if($products[$i]['id'] == $plans['product']['id'] && $plans['product']['id'] != null) selected @elseif(old('product') == $products[$i]['id']) selected @endif>{{$products[$i]['name']}}</option>
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
                                    <div>before: {{$plans['duration']}}</div>
                                    <select type="dropdown" class="form-control" id="duration" name="duration">
                                        <option disabled selected>Select duration</option>
                                        <option value="Monthly" @if($plans['duration'] == "Monthly" && old('duration') == null) selected @elseif(old('duration') == "Monthly") selected @endif>Monthly</option>
                                        <option value="Yearly" @if($plans['duration'] == "Yearly" && old('duration') == null) selected @elseif(old('duration') == "Yearly") selected @endif>Yearly</option>
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

                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autocomplete="name" value=@if($plans['name'] != null && old('duration') == null) {{$plans['name']}}  @else "{{ old('name') }}" @endif>
                                    <label for="name">Plan Name</label>

                                    @error('name')
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

                                    <input type="text" class="form-control @error('sum_assured') is-invalid @enderror" id="sum_assured" name="sum_assured" required autocomplete="sum_assured" value=@if($plans['sum_assured'] != null && old('sum_assured') == null) {{$plans['sum_assured']}}  @else "{{ old('sum_assured') }}" @endif>
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

                                    <input type="text" class="form-control @error('accident_benefit') is-invalid @enderror" id="accident_benefit" name="accident_benefit" required autocomplete="accident_benefit" value=@if($plans['accident_benefit'] != null && old('accident_benefit') == null) {{$plans['accident_benefit']}}  @else "{{ old('accident_benefit') }}" @endif>
                                    <label for="accident_benefit">Accident Benefits</label>

                                    @error('accident_benefit')
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

                                    <input type="text" class="form-control @error('natural_death_benefit') is-invalid @enderror" id="natural_death_benefit" name="natural_death_benefit" required autocomplete="natural_death_benefit" value=@if($plans['natural_death_benefit'] != null && old('natural_death_benefit') == null) {{$plans['natural_death_benefit']}}  @else "{{ old('natural_death_benefit') }}" @endif>
                                    <label for="natural_death_benefit">Natural Death Benefits</label>

                                    @error('natural_death_benefit')
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

                                    <input type="text" class="form-control @error('tpd_benefit') is-invalid @enderror" id="tpd_benefit" name="tpd_benefit" required autocomplete="tpd_benefit" value=@if($plans['tpd_benefit'] != null && old('tpd_benefit') == null) {{$plans['tpd_benefit']}}  @else "{{ old('tpd_benefit') }}" @endif>
                                    <label for="tpd_benefit">TPD Benefits</label>

                                    @error('tpd_benefit')
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

                                    <input type="text" class="form-control @error('surgery_benefit') is-invalid @enderror" id="surgery_benefit" name="surgery_benefit" required autocomplete="surgery_benefit" value=@if($plans['surgery_benefit'] != null && old('surgery_benefit') == null) {{$plans['surgery_benefit']}}  @else "{{ old('surgery_benefit') }}" @endif>
                                    <label for="surgery_benefit">Surgery Benefits</label>

                                    @error('surgery_benefit')
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

                                    <input type="text" class="form-control @error('premium') is-invalid @enderror" id="premium" name="premium" required autocomplete="premium" value=@if($plans['premium'] != null && old('premium') == null) {{$plans['premium']}}  @else "{{ old('premium') }}" @endif>
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

    if (session1 == 'success') {
            Swal.fire(
            'Success!',
            'Product successfully added',
            'success'
            )
    }
</script>

@endsection

