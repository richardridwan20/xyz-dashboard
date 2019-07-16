@php
    $type = $detailTransaction['transaction']['partner']['payment_type'];
    $commision = $detailTransaction['transaction']['partner']['commision'];
    $duration = $detailTransaction['transaction']['protection_duration'];
    if ($type == 'Yearly'){
        $premium = $detailTransaction['product']['plan']['premium_yearly'];
        $grossPremium = $premium * $duration;
    }else if ($type == 'Monthly'){
        $premium = $detailTransaction['product']['plan']['premium_monthly'];
        $grossPremium = $premium;
    }

    $pCommision = ($grossPremium * $commision) * 0.9;
    $ppnCommision = ($grossPremium * $commision) * 0.1;
    $totalCommision = ($grossPremium * $commision);
    $pphCommision = ($pCommision * 0.02);
    $partnerBill = ($totalCommision - $pphCommision);
    $totalPartnerBill = ($grossPremium - $partnerBill);
@endphp
<div class="row">
    <div class="block-content bg-body-light">
        <div class="block">
            <div class="block-header block-header-default bg-white">
                <h3 class="block-title"><b>Detail</b></h3>
                @can('update status cancel')
                <button><a href="{{ URL::route('dashboard.changeStatus', [$detailTransaction['transaction']['id'], 'Canceled']) }}">Change Status into Canceled</a></button>
                @endcan
            </div>
            <div class="block-content block-content-full">
                <div class="row">

                    <div class="col-md-3">
                        <div class="block">
                            <div class="block-header block-header-default">
                                <b>Transaction ID</b>
                            </div>
                            <div class="block-content bg-body-light">
                                {{$detailTransaction['transaction']['id']}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="block">
                            <div class="block-header bg-earth-light">
                                <b>Transaction Status</b>
                            </div>
                            <div class="block-content bg-earth-light">
                                {{$detailTransaction['transaction']['status']}}
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
        <div class="block">
            <div class="block-header block-header-default bg-white">
                <h3 class="block-title"><b>Order Detail</b></h3>
            </div>
            <div class="block-content block-content-full">
                {{-- Start of Transaction ID Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Transaction ID</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['transaction']['id']}}
                        </div>
                    </div>
                </div>
                {{-- End of Transaction ID Row --}}
                {{-- Start of Protection Duration Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Protection Duration</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['transaction']['protection_duration']}}
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
                            <b>Status</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['transaction']['status']}}
                        </div>
                    </div>
                </div>
                {{-- End of Payment Status Row --}}
                {{-- Start of Created At Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Created At</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['transaction']['created_at']}}
                        </div>
                    </div>
                </div>
                {{-- End of Created At Row --}}
            </div>
        </div>
    </div>

    <div class="block-content bg-body-light col-md-6">
        <div class="block">
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
        <div class="block">
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
            </div>
        </div>
        {{-- <div class="block-content bg-body-light col-sm-6">
            <div class="block"></div>
        </div> --}}
    </div>
    <div class="block-content bg-body-light col-sm-6">

            {{-- <div class="block-content bg-body-light col-sm-6">
                <div class="block"></div>
            </div> --}}
    </div>
</div>
<div class="row">
    @for($i = 0; $i < count($detailTransaction['beneficiary']); $i++)
    <div class="block-content bg-body-light col-sm-6">
        <div class="block">
            <div class="block-header block-header-default bg-white">
                <h3 class="block-title"><b>Beneficiary Detail {{$i+1}}</b></h3>
            </div>
            <div class="block-content block-content-full">
                {{-- Start of Beneficiary Relation Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Relation</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['beneficiary'][$i]['beneficiary']['bene_relation']}}
                        </div>
                    </div>
                </div>
                {{-- End of Beneficiary Relation Row --}}
                {{-- Start of Beneficiary Name Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Name</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['beneficiary'][$i]['beneficiary']['bene_name']}}
                        </div>
                    </div>
                </div>
                {{-- End of Beneficiary Name Row --}}
                {{-- Start of Beneficiary DOB Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>DOB</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['beneficiary'][$i]['beneficiary']['bene_dob']}}
                        </div>
                    </div>
                </div>
                {{-- End of Beneficiary DOB Row --}}
                {{-- Start of Beneficiary Gender Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Gender</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['beneficiary'][$i]['beneficiary']['bene_gender']}}
                        </div>
                    </div>
                </div>
                {{-- End of Beneficiary Gender Row --}}
                {{-- Start of Beneficiary Email Row --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="block">
                            <b>Email</b>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="block">
                            {{$detailTransaction['beneficiary'][$i]['beneficiary']['bene_email']}}
                        </div>
                    </div>
                </div>
                {{-- End of Beneficiary Email Row --}}
            </div>
        </div>
    </div>
    @endfor
    @if(count($detailTransaction['beneficiary']) % 2)
        <div class="block-content bg-body-light col-sm-6">
        </div>
    @else
    @endif
</div>
@if(auth()->user()->can('view all transaction') || auth()->user()->can('view all transaction by partner name'))
<div class="line"></div>
<div class="row">
    <div class="block-content bg-body-light col-sm-12">
        <div class="block">
            <div class="block-header block-header-default bg-white">
                <h3 class="block-title"><b>Partner Detail</b></h3>
            </div>
            <div class="block-content block-content-full order-1">
                {{-- Start of Partner Commision Row --}}
                <div class="row">
                    <div class="col-md-3">
                        <div class="block">
                            <b>Partner Commision</b>
                            <br>
                            <small>(dalam rupiah)</small>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="block">
                            {{$pCommision}}
                        </div>
                    </div>
                {{-- End of Partner Commision Row --}}
                {{-- Start of PPN Row --}}
                    <div class="col-md-3">
                        <div class="block">
                            <b>PPN</b>
                            <br>
                            <small>(dalam rupiah)</small>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="block">
                            {{ $ppnCommision }}
                        </div>
                    </div>
                </div>
                {{-- End of PPN Row --}}
                {{-- Start of PPN + komisi Row --}}
                <div class="row">
                    <div class="col-md-3">
                        <div class="block">
                            <b>PPN + Komisi</b>
                            <br>
                            <small>(dalam rupiah)</small>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="block">
                            {{$totalCommision}}
                        </div>
                    </div>
                {{-- End of PPN + Komisi Row --}}
                {{-- Start of PPH Row --}}
                    <div class="col-md-3">
                        <div class="block">
                            <b>PPH Komisi</b>
                            <br>
                            <small>(dalam rupiah)</small>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="block">
                            {{$pphCommision}}
                        </div>
                    </div>
                </div>
                {{-- End of PPH Komisi Row --}}
                {{-- Start of Tagihan Partner Row --}}
                <div class="row">
                    <div class="col-md-3">
                        <div class="block">
                            <b>Tagihan Partner</b>
                            <br>
                            <small>(dalam rupiah)</small>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="block">
                            {{$partnerBill}}
                        </div>
                    </div>
                {{-- End of Tagihan Partner Row --}}
                {{-- Start of Tagihan Premi Partner Row --}}
                    <div class="col-md-3">
                        <div class="block">
                            <b>Tagihan Premi Partner</b>
                            <br>
                            <small>(dalam rupiah)</small>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="block">
                        {{$totalPartnerBill}}
                        </div>
                    </div>
                </div>
                {{-- End of PPH Komisi Row --}}
            </div>
        </div>
    </div>
</div>
@endif
