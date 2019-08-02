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
                <h1 class="h2 font-w700 mt-50 mb-10">Register new Partner</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Please add partner details</h2>
            </div>
            <!-- END Header -->

            <!-- Sign In Form -->
            <div class="row justify-content-center px-5">
                <div class="col-sm-8 col-md-6 col-xl-4">
                    <form class="js-validation-signin" action="{{ route('register.input_partner') }}" method="POST">
                        @csrf
                        <div class="col-12">
                        <div class="form-group row">
                                <div class="form-material floating">

                                    <input type="name" class="form-control @error('name') is-invalid @enderror" id="pname" name="pname" required autocomplete="pname">
                                    <label for="name">Partner Name</label>

                                    @error('pname')
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

                                    <input type="text" class="form-control @error('cname') is-invalid @enderror" id="cname" name="cname" required autocomplete="address">
                                    <label for="address">Partner Company Name</label>

                                    @error('address')
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

                                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" required autocomplete="address">
                                    <label for="name">Partner Address</label>
                                    @error('address')
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

                                    <input type="name" class="form-control @error('commission') is-invalid @enderror" id="commission" name="commission" required autocomplete="commission">
                                    <label for="name">commission</label>

                                    @error('commission')
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

                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autocomplete="email">
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

                                    <input type="name" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" required autocomplete="subject">
                                    <label for="subject">Email Subject</label>

                                    @error('subject')
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

                                    <input type="name" class="form-control @error('body') is-invalid @enderror" id="body" name="body" required autocomplete="body">
                                    <label for="Body">Body</label>

                                    @error('body')
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

                                    <input type="name" class="form-control @error('npinduk') is-invalid @enderror" id="npinduk" name="npinduk" required autocomplete="npinduk">
                                    <label for="npinduk">Nomor Polis Induk</label>

                                    @error('npinduk')
                                        <p style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <select type="dropdown" class="form-control" id="asdata" name="asdata">
                                    <option  disabled selected>Allow Send Data?</option>
                                    <option value=1>Yes</option>
                                    <option value=0>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <select type="dropdown" class="form-control" id="sender" name="sender">
                                    <option  disabled selected>Email Sender</option>
                                    <option value="Partner">Partner</option>
                                    <option value="Sequis">Sequis</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <select type="dropdown" class="form-control" id="ptype" name="ptype">
                                    <option  disabled selected>Payment Type</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Yearly">Yearly</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row gutters-tiny">
                            <div class="col-12 mb-10">
                                <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary" formaction="{{ route('register.input_new_partner')}}">
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
            'Partner successfully added',
            'success'
            )
    }
</script>

@endsection

