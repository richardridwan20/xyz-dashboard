<div class="row">
    <div class="block-content bg-body-light">
        <div class="block">
            <div class="block-header block-header-default bg-white">
                <h3 class="block-title"><b>Detail</b></h3>
                @can('update status cancel')
                <button><a href="{{ URL::route('dashboard.changeStatus', [$detailTransaction['id'], 'Canceled']) }}">Change Status into Canceled</a></button>
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
                                {{$detailTransaction['id']}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="block">
                            <div class="block-header bg-earth-light">
                                <b>Transaction Status</b>
                            </div>
                            <div class="block-content bg-earth-light">
                                {{$detailTransaction['status']}}
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
                            {{$detailTransaction['id']}}
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
                            {{$detailTransaction['protection_duration']}}
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
                            {{$detailTransaction['certificate_number']}}
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
                            {{$detailTransaction['status']}}
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
                            Test
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
                            {{$detailTransaction['customer_id']['name']}}
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
                            {{$detailTransaction['customer_id']['dob']}}
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
                            {{$detailTransaction['customer_id']['citizen_id']}}
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
                            {{$detailTransaction['customer_id']['gender']}}
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
                            {{$detailTransaction['customer_id']['email']}}
                        </div>
                    </div>
                </div>
                {{-- End of PH Email Row --}}
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="block-content bg-body-light col-sm-6">
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
                            {{$detailTransaction['insured_relation']}}
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
                            {{$detailTransaction['insured_name']}}
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
                            {{$detailTransaction['insured_dob']}}
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
                            {{$detailTransaction['insured_gender']}}
                        </div>
                    </div>
                </div>
                {{-- End of Insured Gender Row --}}
            </div>
        </div>
    </div>
    <div class="block-content bg-body-light col-sm-6">
        <div class="block">
            <div class="block-header block-header-default bg-white">
                <h3 class="block-title"><b>Beneficiary Detail</b></h3>
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
                            {{$detailTransaction['bene_relation']}}
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
                            {{$detailTransaction['bene_name']}}
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
                            {{$detailTransaction['bene_dob']}}
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
                            {{$detailTransaction['bene_gender']}}
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
                            {{$detailTransaction['bene_email']}}
                        </div>
                    </div>
                </div>
                {{-- End of Beneficiary Email Row --}}
            </div>
        </div>
    </div>
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
                            {{$pCommision = ($detailTransaction['product_id']['plan_id']['premi']*$detailTransaction['partner_id']['commision'])-($detailTransaction['product_id']['plan_id']['premi']*$detailTransaction['partner_id']['commision']*0.1)}}
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
                            {{$ppn = $detailTransaction['product_id']['plan_id']['premi']*$detailTransaction['partner_id']['commision']*0.1}}
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
                            {{$ppn+$pCommision}}
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
                            {{$pCommision*0.02}}
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
                            {{($pCommision+$ppn)-($ppn*0.02)}}
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
                            {{$detailTransaction['product_id']['plan_id']['premi']-(($pCommision+$ppn)-($ppn*0.02))}}
                        </div>
                    </div>
                </div>
                {{-- End of PPH Komisi Row --}}
            </div>
        </div>
    </div>
</div>
@endif
