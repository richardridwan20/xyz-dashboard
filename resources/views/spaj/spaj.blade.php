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
                <h1 class="h2 font-w700 mt-50 mb-10">Data Input Form for Sequis Mikro Sejahtera</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Please add transaction detail</h2>
            </div>
            <form action="{{ route('dashboard.input_transaction') }}" method="POST" novalidate>
            @csrf
            <div class="row justify-content-center px-5">
                <div class="col-sm-8 col-md-6 col-xl-4">
                    <div class="form-group row">
                        <div class="col-12">
                            <select type="dropdown" class="form-control" id="plan" name="plan">
                                <option disabled selected>Select Plan</option>
                                <option value="Standard" @if(old('plan') == "Standard") selected @endif>Standard</option>
                                <option value="Deluxe" @if(old('plan') == "Deluxe") selected @endif>Deluxe</option>
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
                                <option value=12 @if(old('duration') == 12) selected @endif>1 Year</option>
                                <option value=24 @if(old('duration') == 24) selected @endif>2 Year</option>
                                <option value=36 @if(old('duration') == 36) selected @endif>3 Year</option>
                                <option value=48 @if(old('duration') == 48) selected @endif>4 Year</option>
                                <option value=60 @if(old('duration') == 60) selected @endif>5 Year</option>
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
                <br>
                @include('spaj.__component.policyHolder')
                @include('spaj.__component.insured')
                @include('spaj.__component.beneficiary')
                <br>
                <div class="form-group row gutters-tiny">
                    <div class="col-12 mb-10">
                        <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary" >
                            <i class="si si-register mr-10"></i>  {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Page Content -->
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    var irelation = document.getElementById('irelation');
    var iname = document.getElementById('iname');
    var icitizen_id = document.getElementById('icitizen_id');
    var idob = document.getElementById('idob');
    var iemail = document.getElementById('iemail');
    var phrelation = document.getElementById('phrelation');
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
                        icitizen_id.value = phcitizen_id.value;
                        idob.value = phdob.value;
                        iemail.value = phemail.value;
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
                    iname.readOnly = false;
                    icitizen_id.readOnly = false;
                    idob.readOnly = false;
                    iemail.readOnly = false;
                }else{
                    myself[i].disabled = false;
                    document.getElementById('b'+i+'name').readOnly = false;
                }
            }
        }
    }
    var session1 = "{{Session::get('notify')}}"
    console.log(session1)
    if (session1 == 'success') {
            Swal.fire(
            'Success!',
            'Transaction successfully added',
            'success'
            )
    }else if(session1 == '5 insurance'){
            Swal.fire(
            'Error!',
            'Customer Already Buy 5 Insurance',
            'error'
            )
    }
</script>

@endsection

