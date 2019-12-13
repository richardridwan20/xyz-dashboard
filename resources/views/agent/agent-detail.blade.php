<!-- Hero -->
<div class="bg-gray-lighter">
    <div class="content text-center" style="padding: 50px;">
        <h1 class="h2 font-w700 mb-10">
            {{ $agentData->bodyResponse['agent_name'] }}
        </h1>
        <h2 class="h5">
                {{ $agentData->bodyResponse['branch_name'] }}
        </h2>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">

    <!-- Basic Info -->
    <h2 class="content-heading">Agent Basic Information</h2>
    <div class="row row-deck gutters-tiny">
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Basic Info</h3>
                </div>
                <div class="block-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="block">
                                    Partner Name
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="block">
                                    : {{$agentData->bodyResponse['partner']['name']}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="block">
                                    Email
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="block">
                                    : {{$agentData->bodyResponse['email']}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="block">
                                    Date of Birth
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="block">
                                    : {{$agentData->bodyResponse['dob']}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="block">
                                    Phone Number
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="block">
                                    : {{$agentData->bodyResponse['phone_number']}}
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Basic Info -->

    <!-- Transaction Info -->
    {{-- <div class="content-heading">
        Agent Transaction
         <button class="btn btn-sm btn-rounded btn-alt-primary pull-right" ><i class="fa fa-download"></i> Download Report</button>
    </div> --}}
    <div class="block block-rounded">
        <div class="block-content">
            @include('agent.table-transaction')
        </div>
    </div>
    <!-- END Transaction Info -->
</div>
<!-- END Page Content -->
