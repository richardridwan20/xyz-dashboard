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
                <a class="btn btn-alt-info back-btn" href="{{ Route('voucher.index') }}"> <i class="fa fa-arrow-circle-left"></i> Back to Manage Voucher</a>
            <!-- Header -->
            <div class="py-30 px-5 text-center">
                <a class="link-effect font-w700" href="index.html">
                    <img class="main-logo" src="{{asset('assets\media\photos\sovera-logo.png')}}" alt="">
                </a>
                <h1 class="h2 font-w700 mt-50 mb-10">Voucher Form</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Add Voucher, please fill the voucher detail</h2>
            </div>
            <form action="{{ route('voucher.create') }}" method="POST" novalidate>
            @csrf
                <br>
                <div class="row justify-content-center  ">
                    <div class="col-md-6">
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title"><b>Voucher Data</b></h3>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-material ">
                                                <input type="text" class="js-maxlength maxlength form-control @error('voucher_code') is-invalid @enderror" id="voucher_code" name="voucher_code" required autocomplete="voucher_code" maxlength="20" placeholder="Masukkan kode voucher yang diinginkan (hanya huruf)">
                                                <label for="voucher_code">Voucher Code</label>
                                                @error('voucher_code')
                                                    <p style="color:red">
                                                        <strong>{{ $message }}</strong>
                                                    </p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="number" class="form-control @error('voucher_quantity') is-invalid @enderror" id="voucher_quantity" name="voucher_quantity" required min="1" autocomplete="voucher_quantity" placeholder="Masukkan jumlah voucher yang ingin dibuat">
                                                <label for="voucher_quantity">Voucher Quantity</label>
                                                @error('voucher_quantity')
                                                    <p style="color:red">
                                                        <strong>{{ $message }}</strong>
                                                    </p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input class="form-control @error('expiry') is-invalid @enderror" id="expiry" name="expiry" required autocomplete="expiry" placeholder="Pilih tanggal">
                                                <label for="expiry">Expiry Date</label>
                                                @error('expiry')
                                                    <p style="color:red">
                                                        <strong>{{ $message }}</strong>
                                                    </p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select type="dropdown" class="form-control" id="partner_name" name="partner_name">
                                                <option disabled selected>Select Partner</option>
                                                @for($i=0;$i<count($partnerName);$i++)
                                                    <option value="{{$partnerName[$i]['name']}}">{{$partnerName[$i]['name']}}</option>
                                                @endfor
                                            </select>

                                            @error('name')
                                                <p style="color:red">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select type="dropdown" class="form-control" id="duration" name="duration">
                                                <option disabled selected>Select Duration</option>
                                                <option value="12">1 Year</option>
                                                <option value="24">2 Year</option>
                                                <option value="36">3 Year</option>
                                                <option value="48">4 Year</option>
                                                <option value="60">5 Year</option>
                                            </select>
                                            @error('name')
                                                <p style="color:red">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select type="dropdown" class="form-control" id="plan_id" name="plan_id" onchange="durationManager()">
                                                <option disabled selected>Select Plan</option>
                                                @for($i=0;$i<count($productOfPartners);$i++)
                                                <option value="{{$productOfPartners[$i]['plan']['id']}}"
                                                    @if(old('plan_id') == $productOfPartners[$i]['plan']['id']."|".$productOfPartners[$i]['plan']['duration']."|".$productOfPartners[$i]['plan']['premium']) selected @endif>
                                                    {{$productOfPartners[$i]['plan']['product_id']['name']}} {{$productOfPartners[$i]['plan']['name']}} {{$productOfPartners[$i]['plan']['duration']}}
                                                </option>
                                                @endfor
                                            </select>
                                            @error('plan_id')
                                                <p style="color:red">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12 mb-10">
                                        <div class="form-group gutters-tiny">
                                            <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary" >
                                            <i class="si si-register mr-10"></i>  {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
    <!-- END Page Content -->
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    var session1 = "{{Session::get('notify')}}"

    if (session1 == 'add') {
        Swal.fire(
        'Success!',
        'Voucher successfully added',
        'success'
        )
    }
    $(document).ready(function()
        {
            $('input.maxlength').maxlength({
                threshold: 10,
                warningClass: "label label-info",
                limitReachedClass: "label label-warning",
            });

            $('#expiry').datepicker({
                startDate: '-3d',
                format:'yyyy-mm-dd'
            });
        });
</script>

@endsection

