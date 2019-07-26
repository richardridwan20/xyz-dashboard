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
                <h1 class="h2 font-w700 mt-50 mb-10">Agent Form</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Add Agent, please fill the agent detail</h2>
            </div>
            <form action="{{ route('dashboard.add_agent') }}" method="POST" novalidate>
            @csrf
            <!-- END Header -->

            <!-- Agent Form -->
                <br>
                @include('agent.agentData')
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
    var session1 = "{{$notify}}"
    var quotaRemain1 = "{{$quotaRemain}}";

    console.log(session1)
    if (session1 == 'success') {
            Swal.fire(
            'Success!',
            'Agent successfully added, agent quota remaining:'+quotaRemain1,
            'success'
            )
    }else if(session1 == 'quota_full') {
            Swal.fire(
            'Agent Full!',
            'Cannot add agent, agent quota remaining:'+quotaRemain1,
            'error'
            )
    }
</script>

@endsection

