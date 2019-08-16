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
                <h1 class="h2 font-w700 mt-50 mb-10">Register new Partner Role</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Please add partner details</h2>
            </div>
            <!-- END Header -->

            <!-- Sign In Form -->
            <div class="row justify-content-center px-5">
                <div class="col-sm-8 col-md-6 col-xl-4">
                    <form class="js-validation-signin" action="{{ route('register.input_partner') }}" method="POST">
                        @csrf
                        <div class="form-group row">

                            <div class="col-12">
                                <select type="dropdown" class="form-control" id="role" name="role">
                                    <option  disabled selected>Select Role</option>
                                    <option value="financial" @if(old('role') == "financial") selected @endif>Financial</option>
                                    <option value="operation" @if(old('role') == "operation") selected @endif>Operation</option>
                                    <option value="viewer" @if(old('role') == "viewer") selected @endif>Viewer</option>
                                </select>
                                @error('role')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                        <div class="form-group row">

                                    <select type="dropdown" class="form-control" id="name" name="name">
                                        <option  disabled selected>Select Partner</option>
                                        @for($i=0;$i<count($partnerName);$i++)
                                            <option value="{{$partnerName[$i]['name']}}" @if(old('name') == $partnerName[$i]['name']) selected @endif>{{$partnerName[$i]['name']}}</option>
                                        @endfor
                                    </select>

                                    @error('name')
                                        <p style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">

                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autocomplete="email" value="{{ old('email') }}">
                                    <label for="email">Partner Email</label>

                                    @error('email')
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

                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="password">
                                    <label for="password">Password</label>

                                    @error('password')
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

                                    <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                    @error('password_confirmation')
                                        <p style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row gutters-tiny">
                            <div class="col-12 mb-10">
                                <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary" formaction="{{ route('register.input_partner')}}">
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    var session1 = "{{Session::get('notify')}}"

    if (session1 == 'created') {
            Swal.fire(
            'Success!',
            'Partner successfully added',
            'success'
            )
    }
</script>

@endsection

