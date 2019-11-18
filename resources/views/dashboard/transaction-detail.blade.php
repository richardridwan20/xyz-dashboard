@php
    $type = $detailTransaction['plan']['duration'];
    $commission = $detailTransaction['transaction']['partner']['commission'];
    $duration = $detailTransaction['transaction']['protection_duration'];
    $policyNumber = $detailTransaction['transaction']['policy_number'];

    $start = \Carbon\Carbon::parse($detailTransaction['transaction']['protection_start'])->format('d-F-Y');
    $end = \Carbon\Carbon::parse($detailTransaction['transaction']['protection_end'])->format('d-F-Y');
    $customerDOB = \Carbon\Carbon::parse($detailTransaction['transaction']['customer']['dob'])->format('d-F-Y');
    $insuredDOB = \Carbon\Carbon::parse($detailTransaction['transaction']['insured_dob'])->format('d-F-Y');
@endphp
<div class="row">
    <div class="block-content bg-body-light">
        <div class="block block-bordered">
            <div class="block-header block-header-default bg-white">
                <h3 class="block-title"><b>Detail</b></h3>
                @can('update status cancel')
                    @if ($detailTransaction['transaction']['status'] != 'Canceled')
                        <button style="margin-right: 15px" class="btn btn-danger"><a onclick="confirmation('statuschange/{{$detailTransaction['transaction']['id']}}/Canceled')"><i class="fa fa-close"></i> Batalkan Polis</a></button>
                    @endif
                @endcan
                @role('supadmin|claim')
                    @if ($detailTransaction['transaction']['status'] == 'Policy Issued')
                    <button class="btn btn-alt-primary">
                         <a href="{{route('claim.form', $detailTransaction['transaction']['id'])}}"><i class="fa fa-umbrella"></i> Klaim</a></button>
                    @endif
                @endrole
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
                                @if ($detailTransaction['transaction']['status'] == "Payment Done" || $detailTransaction['transaction']['status'] == "Policy Issued")
                                    <span class="badge badge-success">{{$detailTransaction['transaction']['status']}}</span>
                                @elseif($detailTransaction['transaction']['status'] == "Waiting for Payment")
                                    <span class="badge badge-warning">{{$detailTransaction['transaction']['status']}}</span>
                                @else
                                    <span class="badge badge-danger">{{$detailTransaction['transaction']['status']}}</span>
                                @endif

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
                                <b>Policy Number</b>
                                <div class="block-option">
                                    @if ($policyNumber != null)
                                        <a href="{{ route('certificate.download', ['certificate_number' => ''.$policyNumber.'']) }}">
                                            <i class="fa fa-download"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="block-content">
                                @if ($policyNumber != null)
                                    {{$policyNumber}}
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
                {{-- Start of Policy Number Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Policy Number</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['transaction']['policy_number']}}
                        </div>
                    </div>
                </div>
                {{-- End of Policy Number Row --}}
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
                            {{$customerDOB}}
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
                            {{$insuredDOB}}
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>

    function confirmation(routeHref){
        Swal.fire({
            title: 'Batalkan polis?',
            text: "Polis yang batal tidak dapat diubah lagi!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, batalkan polis'
        }).then((result) => {
            if (result.value) {
                window.location.href = window.location.origin + '/' +routeHref;
            }
        })
    }

</script>
