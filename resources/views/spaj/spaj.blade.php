@extends('layouts.master')

@section('content')
@php
$planValue = [];
    foreach($productOfPartners as $productOfPartner){
       array_push($planValue, $productOfPartner['plan']['id']."|".$productOfPartner['plan']['duration']."|".$productOfPartner['plan']['premium']);
    }
@endphp
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
            {{-- {{dd($productOfPartners[1]['plan']['premium'])}} --}}
            <form action="{{ route('dashboard.input_transaction') }}" method="POST" id="spajform" novalidate>
            @csrf
            <div class="row justify-content-center px-5">
                <div class="col-sm-8 col-md-6 col-xl-4">
                    <div class="form-group row">
                        <div class="col-12">
                            <select type="dropdown" class="form-control" id="plan_id" name="plan_id" onchange="durationManager()">
                                <option disabled selected>Select Plan</option>
                                @for($i=0;$i<count($productOfPartners);$i++)
                                <option value="{{$productOfPartners[$i]['plan']['id']."|".$productOfPartners[$i]['plan']['duration']."|".$productOfPartners[$i]['plan']['premium']}}"
                                    @if(old('plan_id') == $productOfPartners[$i]['plan']['id']."|".$productOfPartners[$i]['plan']['duration']."|".$productOfPartners[$i]['plan']['premium']) selected @endif>
                                    {{$productOfPartners[$i]['plan']['product_id']['name']}} {{$productOfPartners[$i]['plan']['name']}} {{$productOfPartners[$i]['plan']['duration']}}
                                </option>
                                @endfor
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
                            <select type="dropdown" class="form-control" id="duration" name="duration" >
                                <option value="select" disabled selected>Select Duration</option>
                                <option value=1 @if(old('duration') == 1) selected @endif hidden="">1 month</option>
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
                        <button type="button" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary" onclick="confirmation()">
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
    var plan = document.getElementById('plan_id');
    var duration = document.getElementById('duration');
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

    window.onload = disableDuration;

    function myselfRelation(){
        if(irelation.value == 'Myself' || b1relation.value == 'Myself' || b2relation.value == 'Myself' || b3relation.value == 'Myself' || b4relation.value == 'Myself'){
            for(var i=0; i<relationArray.length; i++){
                if(relationArray[i].value == 'Myself'){
                    if(i == 0){
                        myself[i].disabled = false;
                        iname.value = phname.value;
                        idob.value = phdob.value;
                        iname.readOnly = true;
                        idob.readOnly = true;
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

    function confirmation(){
        Swal.fire({
            title: 'Are you sure?',
            text: 'Make sure the data you input is correct',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes!'
        }).then((result) => {
            if (result.value) {
                duration.disabled = false;
                document.getElementById("spajform").submit();          }
        })
    }

    function durationManager(){
       var planArray = plan.value.split("|")
        if(planArray[1] == "Monthly"){
            duration.disabled = true;
            duration.value = 1;
        }else {
            duration.disabled = false;
            duration.value = "select";
        }
    }

    function disableDuration(){
        if(duration.value == 1){
            duration.disabled = true;
        }
    }
</script>

@endsection

