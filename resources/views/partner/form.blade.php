@extends('layouts.master')

@section('content')

<div class="content">
    <!-- Page Content -->
    <div class="bg-gd-primary">
        <div class="hero-static content content-full bg-white" data-toggle="appear">
            <!-- Header -->
            <div class="py-30 px-5 text-center">
                <a class="link-effect font-w700">
                    <img class="main-logo" src="{{asset('assets\media\photos\sovera-logo.png')}}" alt="">
                </a>
                <h1 class="h2 font-w700 mt-50 mb-10">Register new Partner</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Please add partner details</h2>
            </div>
            <!-- END Header -->

            <!-- Sign In Form -->
            <div class="row justify-content-center px-5">
                <div class="col-sm-8 col-md-6 col-xl-4">
                    <form class="js-validation-signin" action="{{ route('partner.input') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">

                                    <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autocomplete="name">
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

                                    <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name" name="company_name" required autocomplete="company_name">
                                    <label for="company_name">Partner Company Name</label>

                                    @error('company_name')
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

                                    <input type="text" class="form-control @error('company_address') is-invalid @enderror" id="company_address" name="company_address" required autocomplete="company_address">
                                    <label for="name">Partner Address</label>
                                    @error('company_address')
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
                                    <label for="name">Commission</label>

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

                                    <input type="name" class="form-control @error('agent_quota') is-invalid @enderror" id="agent_quota" name="agent_quota" required autocomplete="agent_quota">
                                    <label for="npinduk">Agent Quota</label>

                                    @error('agent_quota')
                                        <p style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <select type="dropdown" class="form-control" id="allow_send_data" name="allow_send_data">
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
                                <select type="dropdown" class="form-control" id="allow_phone_data" name="allow_phone_data">
                                    <option  disabled selected>Allow Phone Data</option>
                                    <option value=1>Yes</option>
                                    <option value=0>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row gutters-tiny">
                            <div class="col-12 mb-10">
                                <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary" formaction="{{ route('partner.input')}}">
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

@endsection

