@extends('layouts.master')

@section('content')

<div class="content">
    <!-- Page Content -->
    <div class="bg-gd-primary">
        <div class="hero-static content content-full bg-white" data-toggle="appear">
                <a class="btn btn-alt-info back-btn" href="{{ Route('limitation.index') }}"><i class="fa fa-arrow-circle-left"></i> Back to Manage Detail Limitation</a>
            <!-- Header -->
            <div class="py-30 px-5 text-center">
                <a class="link-effect font-w700">
                    <img class="main-logo" src="{{asset('assets\media\photos\sovera-logo.png')}}" alt="">
                </a>
                <h1 class="h2 font-w700 mt-50 mb-10">Detail Limitation Form</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Add Detail Limitation, please fill the limitation detail</h2>
            </div>
            <form action="{{ route('limitation.create') }}" method="POST" novalidate>
            @csrf
                <br>
                <div class="row justify-content-center  ">
                    <div class="col-md-6">
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title"><b>Detail Limitation Data</b></h3>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-material ">
                                                <select class="form-control" name="select_product" id="select_product">
                                                    @foreach ($productOfPartners as $productOfPartner)
                                                        <option value="{{ $productOfPartner['id'] }}">{{ $productOfPartner['partner_id']['name'] }} | {{ $productOfPartner['plan_id']['name'] }} | {{ $productOfPartner['plan_id']['duration'] }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="select_product">Product Of Partners</label>
                                                @error('select_product')
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
                                                <select type="dropdown" class="form-control" name="select_limitation" id="limitation">
                                                    @foreach ($limitations as $limitation)
                                                        <option value="{{ $limitation['id'] }}">{{ $limitation['limit_code'] }} | {{ $limitation['area_name'] }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="limitation">Limitation</label>
                                                @error('limitation')
                                                    <p style="color:red">
                                                        <strong>{{ $message }}</strong>
                                                    </p>
                                                @enderror
                                            </div>
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
    var session1 = "{{$notify}}"

    if (session1 == 'add') {
        Swal.fire(
        'Success!',
        'Detail Limitation successfully added',
        'success'
        )
    } else if(session1 == 'exist'){
        Swal.fire(
        'Error!',
        'Detail Limitation Already Exists',
        'error'
        )
    }
</script>

@endsection

