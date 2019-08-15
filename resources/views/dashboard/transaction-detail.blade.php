@php
    $type = $detailTransaction['plan']['duration'];
    $commission = $detailTransaction['transaction']['partner']['commission'];
    $duration = $detailTransaction['transaction']['protection_duration'];
    $certificateNumber = $detailTransaction['transaction']['certificate_number'];

    $start = \Carbon\Carbon::parse($detailTransaction['transaction']['protection_start'])->format('d-F-Y');
    $end = \Carbon\Carbon::parse($detailTransaction['transaction']['protection_end'])->format('d-F-Y');
@endphp
<div class="row">
    <div class="block-content bg-body-light">
        <div class="block block-bordered">
            <div class="block-header block-header-default bg-white">
                <h3 class="block-title"><b>Detail</b></h3>
                @can('update status cancel')
                    <button class="btn btn-alt-primary"><a href="{{ URL::route('dashboard.changeStatus', [$detailTransaction['transaction']['id'], 'Canceled']) }}">Change Status into Canceled</a></button>
                @endcan
            </div>
            <div class="block-content block-content-full">
                <div class="row">

                    <div class="col-sm-3">
                        <div class="block block-rounded block-bordered">
                            <div class="block-header block-header-default">
                                <b>Transaction ID</b>
                            </div>
                            <div class="block-content">
                                {{$detailTransaction['transaction']['id']}}
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="block block-rounded block-bordered">
                            <div class="block-header block-header-default">
                                <b>Transaction Status</b>
                            </div>
                            <div class="block-content">
                                {{$detailTransaction['transaction']['status']}}
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="block block-rounded block-bordered">
                            <div class="block-header block-header-default">
                                <b>Duration</b>
                            </div>
                            <div class="block-content">
                                @if ($type == 'Yearly')
                                    {{$detailTransaction['transaction']['protection_duration']/12}} year
                                @else
                                    {{$detailTransaction['transaction']['protection_duration']}} month
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="block block-rounded block-bordered">
                            <div class="block-header block-header-default">
                                <b>Certificate Number</b>
                                <div class="block-option">
                                    @if ($certificateNumber != null)
                                        <a href="{{ route('certificate.download', ['certificate_number' => ''.$certificateNumber.'']) }}">
                                            <i class="fa fa-download"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="block-content">
                                @if ($certificateNumber != null)
                                    {{$certificateNumber}}
                                @else
                                    No data.
                                @endif

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="block-content bg-body-light col-md-6">
        <div class="block block-bordered">
            <div class="block-header block-header-default bg-white">
                <h3 class="block-title"><b>Order Detail</b></h3>
            </div>
            <div class="block-content block-content-full">
                {{-- Start of Transaction ID Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Product Name</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['plan']['product']['name']}}
                        </div>
                    </div>
                </div>
                {{-- End of Transaction ID Row --}}
                {{-- Start of Protection Duration Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Product Plan</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['plan']['name']}}
                        </div>
                    </div>
                </div>
                {{-- End of Protection Duration Row --}}
                {{-- Start of Certificate Number Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Certificate Number</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['transaction']['certificate_number']}}
                        </div>
                    </div>
                </div>
                {{-- End of Certificate Number Row --}}
                {{-- Start of Payment Status Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Protection Start Date</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$start}}
                        </div>
                    </div>
                </div>
                {{-- End of Payment Status Row --}}
                {{-- Start of Created At Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Protection End Date</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$end}}
                        </div>
                    </div>
                </div>
                {{-- End of Created At Row --}}
            </div>
        </div>
    </div>

    <div class="block-content bg-body-light col-md-6">
        <div class="block block-bordered">
            <div class="block-header block-header-default bg-white">
                <h3 class="block-title"><b>Policy Holder Detail</b></h3>
            </div>
            <div class="block-content block-content-full">
                {{-- Start of PH Name Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Name</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['transaction']['customer']['name']}}
                        </div>
                    </div>
                </div>
                {{-- End of PH Name Row --}}
                {{-- Start of PH DOB Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>DOB</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['transaction']['customer']['dob']}}
                        </div>
                    </div>
                </div>
                {{-- End of PH DOB Row --}}
                {{-- Start of PH Citizen ID Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Citizen ID</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['transaction']['customer']['citizen_id']}}
                        </div>
                    </div>
                </div>
                {{-- End of PH Citizen ID Row --}}
                {{-- Start of PH Gender ID Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Gender</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['transaction']['customer']['gender']}}
                        </div>
                    </div>
                </div>
                {{-- End of PH Gender Row --}}
                {{-- Start of PH Email Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Email</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['transaction']['customer']['email']}}
                        </div>
                    </div>
                </div>
                {{-- End of PH Email Row --}}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="block-content bg-body-light col-sm-6    ">
        <div class="block block-bordered">
            <div class="block-header block-header-default bg-white">
                <h3 class="block-title"><b>Insured Detail</b></h3>
            </div>
            <div class="block-content block-content-full">
                {{-- Start of Insured Relation Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Relation</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['transaction']['insured_relation']}}
                        </div>
                    </div>
                </div>
                {{-- End of Insured Relation Row --}}
                {{-- Start of Insured Name Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Name</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['transaction']['insured_name']}}
                        </div>
                    </div>
                </div>
                {{-- End of Insured Name Row --}}
                {{-- Start of Insured DOB Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>DOB</b>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['transaction']['insured_dob']}}
                        </div>
                    </div>
                </div>
                {{-- End of Insured DOB Row --}}
                {{-- Start of Insured Gender Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Gender</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['transaction']['insured_gender']}}
                        </div>
                    </div>
                </div>
                {{-- End of Insured Gender Row --}}
            </div>
        </div>
    </div>
    <div class="block-content bg-body-light col-sm-6">
    </div>
</div>
<div class="row">
    <div class="block-content bg-body-light">
        <div class="block block-bordered">
            <div class="block-header block-header-default bg-white">
                <h3 class="block-title"><b>Beneficiary Detail</b></h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    @foreach ($detailTransaction['beneficiary'] as $key => $beneficiary)
                        <div class="col-sm-3">
                            <div class="block block-bordered">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title"><b>Beneficiary {{$key + 1}}</b></h3>
                                </div>
                                <div class="block-content block-content-full">
                                    {{$beneficiary['beneficiary']['bene_name']}} - {{$beneficiary['beneficiary']['bene_relation']}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
