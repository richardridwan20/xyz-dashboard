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
                    <img class="main-logo" src="{{asset('assets\media\photos\sovera-logo.png')}}" alt="">
                </a>
                <h1 class="h2 font-w700 mt-50 mb-10">Data Input Form for Sequis Mikro Sejahtera</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Please add transaction detail</h2>
            </div>
            {{-- {{dd($productOfPartners[1]['plan']['premium'])}} --}}
            <form action="{{ route('dashboard.input_voucher_transaction') }}" method="POST" id="spajform" novalidate>
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <div class="form-material ">
                        <input type="name" class="form-control @error('voucher_code') is-invalid @enderror" id="voucher_code" name="voucher_code" required autocomplete="voucher_code" value="{{ old('voucher_code') }}">
                        <label for="name">Voucher Code</label>
                        @error('voucher_code')
                            <p style="color:red">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
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
    var irelation = document.getElementById('insured_relation');
    var iname = document.getElementById('insured_name');
    var icitizen_id = document.getElementById('icitizen_id');
    var idob = document.getElementById('insured_dob');
    var iemail = document.getElementById('iemail');
    var phrelation = document.getElementById('phrelation');
    var phname = document.getElementById('customer_name');
    var phcitizen_id = document.getElementById('customer_citizen_id');
    var phdob = document.getElementById('customer_dob');
    var phemail = document.getElementById('customer_email');
    var b1relation = document.getElementById('1_bene_relation');
    var b2relation = document.getElementById('2_bene_relation');
    var b3relation = document.getElementById('3_bene_relation');
    var b4relation = document.getElementById('4_bene_relation');
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
                        document.getElementById(i+'_bene_name').value = phname.value;
                        document.getElementById(i+'_bene_name').readOnly = true;
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
                    idob.readOnly = false;
                }else{
                    myself[i].disabled = false;
                    document.getElementById(i+'_bene_name').readOnly = false;
                }
            }
        }
    }
    var session1 = "{{Session::get('notify')}}"

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
                document.getElementById("spajform").submit();
            }
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
        if(insured_relation.value == "Myself"){
            insured_name.readOnly = true;
            insured_dob.readOnly = true;
        }
    }
</script>

@endsection

