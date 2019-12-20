@php
    $type = $detailTransaction['plan']['duration'];
    $commission = $detailTransaction['transaction']['partner']['commission'];
    $duration = $detailTransaction['transaction']['protection_duration'];
    $policyNumber = $detailTransaction['transaction']['policy_number'];

    $start = \Carbon\Carbon::parse($detailTransaction['transaction']['protection_start'])->format('d M Y');
    $end = \Carbon\Carbon::parse($detailTransaction['transaction']['protection_end'])->format('d M Y');
    $customerDOB = \Carbon\Carbon::parse($detailTransaction['transaction']['customer']['dob'])->format('d-F-Y');
    $insuredDOB = \Carbon\Carbon::parse($detailTransaction['transaction']['insured_dob'])->format('d-F-Y');
@endphp
<!-- Hero -->
<div>
    <div class="content text-left">
        <a class="text-black" href="{{url()->previous()}}"><i class="fa fa-arrow-circle-left"></i> <b>Back to Dashboard</b></a>
    </div>
    <div class="content text-center" style="padding: 50px;">
        <h1 class="h2 font-w700 mb-10">
            Detail Transaksi
        </h1>
        <br>
        <h1 class="h3 font-w700 mb-10">
            Nomor Polis
        </h1>
        <h1 class="h3 font-w400 mb-10">
            {{$policyNumber}}
        </h1>
        <br>
        @if ($detailTransaction['transaction']['status'] == 'Policy Issued')
            <button class="btn btn-sm btn-rounded btn-success btn-noborder">
                <a style="color: white" href="{{ route('certificate.download', ['certificate_number' => ''.$policyNumber.'']) }}">
                    <i class="fa fa-download"></i> Download Polis
                </a>
            </button>
        @endif
        @role('supadmin|claim')
        @if ($detailTransaction['transaction']['status'] == 'Policy Issued')
            <button class="btn btn-sm btn-rounded btn-alt-primary">
                <a href="{{route('claim.form', $detailTransaction['transaction']['id'])}}"><i class="fa fa-umbrella"></i> Klaim</a>
            </button>
        @endif
        @endrole
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Addresses -->
    <div class="content-heading">
        Transaction Basic Information
        @if ($detailTransaction['transaction']['status'] == 'Policy Issued')
        <button class="btn btn-sm btn-rounded btn-danger pull-right"><a onclick="confirmation('cancel-transaction/{{$detailTransaction['transaction']['id']}}/Canceled')"><i class="fa fa-close"></i> Batalkan Polis</a></button>
        @endif
    </div>
    <div class="row row-deck gutters-tiny">
        <!-- Transaction ID -->
        <div class="col-md-3">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Transaction ID</h3>
                </div>
                <div class="block-content">
                    <div class="font-size-md text-black mb-5">{{$detailTransaction['transaction']['id']}}</div>
                </div>
            </div>
        </div>
        <!-- END Transaction ID -->

        <!-- Transaction Status -->
        <div class="col-md-3">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Transaction Status</h3>
                </div>
                <div class="block-content">
                    <div class="font-size-md text-black mb-5">
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
        </div>
        <!-- END Transaction Status -->

        <!-- Transaction Duration -->
        <div class="col-md-3">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Protection Duration</h3>
                </div>
                <div class="block-content">
                    <div class="font-size-md text-black">
                        @if ($type == 'Yearly')
                            {{$detailTransaction['transaction']['protection_duration']/12}} year
                        @else
                            {{$detailTransaction['transaction']['protection_duration']}} month
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- END Transaction Duration -->

        <!-- Transaction Duration -->
        <div class="col-md-3">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Start Date and End Date</h3>
                </div>
                <div class="block-content">
                    <div class="font-size-md text-black">
                        {{$start}} -> {{$end}}
                    </div>
                </div>
            </div>
        </div>
        <!-- END Transaction Duration -->

    </div>
    <!-- END Addresses -->

    <div class="row">
        <div class="col-md-6">
            <!-- Product Information -->
            <h2 class="content-heading">Product Information</h2>
            <div class="row row-deck gutters-tiny">
                <!-- Product Data -->
                <div class="col-md-12">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Basic Info</h3>
                        </div>
                        <div class="block-content">
                            {{-- Start of Product Name Row --}}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="block">
                                        Product Name
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="block">
                                        : {{$detailTransaction['plan']['product']['name']}}
                                    </div>
                                </div>
                            </div>
                            {{-- End of Transaction ID Row --}}
                            {{-- Start of Product Plan Row --}}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="block">
                                        Product Plan
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="block">
                                        : {{$detailTransaction['plan']['name']}}
                                    </div>
                                </div>
                            </div>
                            {{-- End of Product Plan Row --}}
                            {{-- Start of Sum Assured Row --}}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="block">
                                        Premium
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="block">
                                        : {{number_format($detailTransaction['plan']['premium'])}}
                                    </div>
                                </div>
                            </div>
                            {{-- End of Sum Assured Row --}}
                            {{-- Start of Sum Assured Row --}}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="block">
                                        Sum Assured
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="block">
                                        : {{number_format($detailTransaction['plan']['natural_death_benefit'])}}
                                    </div>
                                </div>
                            </div>
                            {{-- End of Sum Assured Row --}}
                            {{-- Start of Sum Assured Row --}}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="block">
                                        Natural Death Benefits
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="block">
                                        : {{number_format($detailTransaction['plan']['natural_death_benefit'])}}
                                    </div>
                                </div>
                            </div>
                            {{-- End of Sum Assured Row --}}
                            {{-- Start of Sum Assured Row --}}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="block">
                                        Accidental Death Benefits
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="block">
                                        : {{number_format($detailTransaction['plan']['accident_benefit'])}}
                                    </div>
                                </div>
                            </div>
                            {{-- End of Sum Assured Row --}}
                            {{-- Start of Sum Assured Row --}}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="block">
                                        TPD Benefits
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="block">
                                        : {{number_format($detailTransaction['plan']['tpd_benefit'])}}
                                    </div>
                                </div>
                            </div>
                            {{-- End of Sum Assured Row --}}
                            {{-- Start of Sum Assured Row --}}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="block">
                                        Surgery Benefit
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="block">
                                        : {{number_format($detailTransaction['plan']['surgery_benefit'])}}
                                    </div>
                                </div>
                            </div>
                            {{-- End of Sum Assured Row --}}
                        </div>
                    </div>
                </div>
                <!-- END Product Data -->
            </div>
            <!-- END Addresses -->
        </div>
        <div class="col-md-6">
            <!-- Product Information -->
            <h2 class="content-heading">Policy Holder Information</h2>
            <div class="row row-deck gutters-tiny">
                <!-- Product Data -->
                <div class="col-md-12">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Basic Info</h3>
                        </div>
                        <div class="block-content">
                            {{-- Start of Product Name Row --}}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="block">
                                        Name
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="block">
                                        : {{$detailTransaction['transaction']['customer']['name']}}
                                    </div>
                                </div>
                            </div>
                            {{-- End of Transaction ID Row --}}
                            {{-- Start of Product Plan Row --}}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="block">
                                        Date of Birth
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="block">
                                        : {{$customerDOB}}
                                    </div>
                                </div>
                            </div>
                            {{-- End of Product Plan Row --}}
                            {{-- Start of Sum Assured Row --}}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="block">
                                        Citizen ID
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="block">
                                        : {{$detailTransaction['transaction']['customer']['citizen_id']}}
                                    </div>
                                </div>
                            </div>
                            {{-- End of Sum Assured Row --}}
                            {{-- Start of Sum Assured Row --}}
                            {{-- <div class="row">
                                <div class="col-md-5">
                                    <div class="block">
                                        Gender
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="block">
                                        : {{$detailTransaction['transaction']['customer']['gender']}}
                                    </div>
                                </div>
                            </div> --}}
                            {{-- End of Sum Assured Row --}}
                            {{-- Start of Sum Assured Row --}}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="block">
                                        Email
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="block">
                                        : {{$detailTransaction['transaction']['customer']['email']}}
                                    </div>
                                </div>
                            </div>
                            {{-- End of Sum Assured Row --}}
                        </div>
                    </div>
                </div>
                <!-- END Product Data -->
            </div>
            <!-- END Addresses -->
        </div>
    </div>
    <!-- Product Information -->
    <h2 class="content-heading">Insured Information</h2>
    <div class="row row-deck gutters-tiny">
        <!-- Product Data -->
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Basic Info</h3>
                </div>
                <div class="block-content">
                    {{-- Start of Product Name Row --}}
                    <div class="row">
                        <div class="col-md-5">
                            <div class="block">
                                Insured Relation
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="block">
                                : {{$detailTransaction['transaction']['insured_relation']}}
                            </div>
                        </div>
                    </div>
                    {{-- End of Transaction ID Row --}}
                    {{-- Start of Product Plan Row --}}
                    <div class="row">
                        <div class="col-md-5">
                            <div class="block">
                                Insured Name
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="block">
                                : {{$detailTransaction['transaction']['insured_name']}}
                            </div>
                        </div>
                    </div>
                    {{-- End of Product Plan Row --}}
                    {{-- Start of Sum Assured Row --}}
                    <div class="row">
                        <div class="col-md-5">
                            <div class="block">
                                Insured Date of Birth
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="block">
                                : {{$insuredDOB}}
                            </div>
                        </div>
                    </div>
                    {{-- End of Sum Assured Row --}}
                </div>
            </div>
        </div>
        <!-- END Product Data -->
    </div>
    <!-- END Addresses -->

    <!-- Product Information -->
    <h2 class="content-heading">Beneficiary Information</h2>
    <div class="row row-deck gutters-tiny">
        @foreach ($detailTransaction['beneficiary'] as $key => $beneficiary)
            <div class="col-sm-3">
                <div class="block block-bordered">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Beneficiary {{$key + 1}}</h3>
                    </div>
                    <div class="block-content block-content-full">
                        {{$beneficiary['beneficiary']['bene_name']}} - {{$beneficiary['beneficiary']['bene_relation']}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- END Addresses -->
</div>
<!-- END Page Content -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>

    function confirmation(routeHref){
        Swal.fire({
            title: 'Batalkan polis?',
            text: "Polis yang batal tidak dapat diubah lagi!",
            type: 'warning',
            showCancelButton: true,
            input: 'text',
            inputPlaceholder: "Masukkan alasan pembatalan polis.",
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, batalkan polis',
            preConfirm: (inputValue) => {
                if (inputValue === false) return false;

                if (inputValue === "") {
                    Swal.showValidationMessage("Masukkan alasan pembatalan polis.");
                    return false
                }
            },
        }).then((result) => {
            if (result.value) {
                routeHref = routeHref + '/' + result.value;
                window.location.href = window.location.origin + '/' +routeHref;
            }
        })
    }

</script>
