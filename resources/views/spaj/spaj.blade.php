@extends('layouts.master')

@section('content')

<div class="content">
    <!-- Page Content -->
    <div class="bg-gd-primary">
        <div class="hero-static content content-full bg-white" data-toggle="appear">
            <!-- Header -->
            <div class="py-30 px-5 text-center">
                <a class="link-effect font-w700" href="index.html">
                    <img class="content-header-logo" src="assets\media\photos\sequis-online-logo.png" alt="">
                </a>
                <h1 class="h2 font-w700 mt-50 mb-10">SPAJ Page for Micro Insurance</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Register transaction, please add transaction detail</h2>
            </div>
            <form action="{{ route('dashboard.input_transaction') }}" method="POST" novalidate>
            @csrf
            <div class="row justify-content-center px-5">
                <div class="col-sm-8 col-md-6 col-xl-4">
                    <div class="form-group row">
                        <div class="col-12">
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
                    <div class="form-group row">
                        <div class="col-12">
                            <select type="dropdown" class="form-control" id="duration" name="duration">
                                <option  disabled selected>Select Duration</option>
                                <option value=12>1 Year</option>
                                <option value=24>2 Year</option>
                                <option value=36>3 Year</option>
                                <option value=48>4 Year</option>
                                <option value=60>5 Year</option>
                            </select>
                            @error('duration')
                                <p style="color:red">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Header -->

            <!-- SPAJ Form -->
                @include('spaj.__component.policyHolder')
                @include('spaj.__component.insured')
                @include('spaj.__component.beneficiary')
                <br><br>
                <div class="form-group row gutters-tiny">
                    <div class="col-12 mb-10">
                        <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary" >
                            <i class="si si-register mr-10"></i>  {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
            @if(session()->has('success'))
                <span class="alert alert-success">
                    <strong>{{ session()->get('success') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <!-- END Page Content -->
</div>

<script>
    var irelation = document.getElementById('irelation');
    var igender = document.getElementById('igender');
    var iname = document.getElementById('iname');
    var icitizen_id = document.getElementById('icitizen_id');
    var idob = document.getElementById('idob');
    var iemail = document.getElementById('iemail');
    var phrelation = document.getElementById('phrelation');
    var phgender = document.getElementById('phgender');
    var phname = document.getElementById('phname');
    var phcitizen_id = document.getElementById('phcitizen_id');
    var phdob = document.getElementById('phdob');
    var phemail = document.getElementById('phemail');
    var b1relation = document.getElementById('b1relation');
    var b2relation = document.getElementById('b2relation');
    var b3relation = document.getElementById('b3relation');
    var b4relation = document.getElementById('b4relation');
    var myself = document.getElementsByClassName('Myself');

    var relationArray = [irelation, b1relation, b2relation, b3relation, b4relation];

    function myselfRelation(){
        if(irelation.value == 'Myself' || b1relation.value == 'Myself' || b2relation.value == 'Myself' || b3relation.value == 'Myself' || b4relation.value == 'Myself'){
            for(var i=0; i<relationArray.length; i++){
                if(relationArray[i].value == 'Myself'){
                    if(i == 0){
                        myself[i].disabled = false;
                        iname.value = phname.value;
                        igender.value = phgender.value;
                        icitizen_id.value = phcitizen_id.value;
                        idob.value = phdob.value;
                        iemail.value = phemail.value;
                        igender.setAttribute("style", "pointer-events:none");
                        iname.readOnly = true;
                        icitizen_id.readOnly = true;
                        idob.readOnly = true;
                        iemail.readOnly = true;
                        }else{
                        myself[i].disabled = false;
                        document.getElementById('b'+i+'name').value = phname.value;
                        document.getElementById('b'+i+'name').readOnly = true;
                    }
                }else{
                    myself[i].disabled = true;
                }
            }
        }else{
            for(var i=0; i<myself.length; i++){
                if(i==0){
                    myself[i].disabled = false;
                    igender.setAttribute("style", "pointer-events:auto");
                    iname.readOnly = false;
                    icitizen_id.readOnly = false;
                    idob.readOnly = false;
                    iemail.readOnly = false;
                }
                myself[i].disabled = false;
            }
        }
    }
</script>

@endsection

