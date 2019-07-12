<table id="example" class="table table-hover table-striped table-vcenter table-bordered table-responsive">
    <thead>
        <tr>
            <th id="id" data-sort="id" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Transaction ID</b>
                <i class="id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="tpPartner" data-sort="tpPartner" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Invoice Number</b>
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
            <th id="partner_id" data-sort="partner_id" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Partner Name</b>
                <i class="partner_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="insuredNumber" data-sort="insuredNumber" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Insured Name</b>
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
            <th id="customer_id" data-sort="customer_id" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>PH Name</b>
                <i class="customer_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="customer_id" data-sort="customer_id" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>PH Email</b>
                <i class="customer_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="product_id" data-sort="product_id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Plan</b>
                <i class="product_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="protection_duration" data-sort="protection_duration" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Protection Duration</b>
                <i class="protection_duration fa fa-pull-right fa-sort"></i>
            </th>
            <th id="certificate_number" data-sort="certificate_number" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Certificate Number</b>
                <i class="certificate_number fa fa-pull-right fa-sort"></i>
            </th>
            <th id="status" data-sort="status" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Status</b>
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
            @role('supadmin|treasury|financial|partner financial')
            <th style='line-height: 80%' id="premi" data-sort="premi" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Gross Premium</b><i class="status fa fa-pull-right fa-sort"></i>
                <br>
                <small>(dalam rupiah)</small>
            </th>
            <th style='line-height: 80%' id="premi" data-sort="premi" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Partner Commision</b><i class="status fa fa-pull-right fa-sort"></i>
                <br>
                <small>(dalam rupiah)</small>
            </th>
            <th style='line-height: 80%' id="ppn" data-sort="ppn" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>PPN Komisi</b>
                <i class="status fa fa-pull-right fa-sort"></i>
                <br>
                <small>(dalam rupiah)</small>
            </th>
            <th style='line-height: 80%' id="komisi+ppn" data-sort="komisi+ppn" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Komisi + PPN</b>
                <i class="status fa fa-pull-right fa-sort"></i>
                <br>
                <small>(dalam rupiah)</small>
            </th>
            <th style='line-height: 80%' id="pphKomisi" data-sort="pphKomisi" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>PPH Komisi</b>
                <i class="status fa fa-pull-right fa-sort"></i>
                <br>
                <small>(dalam rupiah)</small>
            </th>
            <th style='line-height: 100%' id="bpartner" data-sort="bpartner" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Tagihan Partner</b>
                <i class="status fa fa-pull-right fa-sort"></i>
                <br>
                <small>(dalam rupiah)</small>
            </th>
            <th style='line-height: 100%' id="tpPartner" data-sort="tpPartner" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Tagihan Premi Partner</b>
                <i class="status fa fa-pull-right fa-sort"></i>
                <br>
                <small>(dalam rupiah)</small>
            </th>
            <th style='line-height: 100%' id="tpPartner" data-sort="tpPartner" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Action</b>
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
            @endrole
        </tr>
    </thead>
    <tbody id="tableAjax">
            @forelse ($transactions as $transaction)
                @php
                    if($transaction['partner_id']['payment_type'] == 'Yearly')
                    {
                        $premium = ($transaction['product_id']['plan_id']['premium_yearly']);
                    } else {
                        $premium = ($transaction['product_id']['plan_id']['premium_monthly']);
                    }
                    $commision = $transaction['partner_id']['commision'];
                    $duration = $transaction['protection_duration'];
                @endphp
                <tr>
                    <td><a href="{{ route('dashboard.detail', $transaction['id']) }}">{{$transaction['id']}}</a></td>
                    <td>{{$transaction['invoice_number']}}</td>
                    <td>{{$transaction['partner_id']['name']}}</td>
                    <td>{{$transaction['insured_name']}}</td>
                    <td>{{$transaction['customer_id']['name']}}</td>
                    <td>{{$transaction['customer_id']['email']}}</td>
                    <td>{{$transaction['product_id']['plan_id']['name']}}</td>
                    <td>{{$transaction['protection_duration']}}</td>
                    <td>{{$transaction['certificate_number']}}</td>
                    <td>{{$transaction['status']}}</td>
                    @role('supadmin|treasury|financial|partner financial')
                    <td>{{$grossPremium = $premium * $duration}}</td>
                    <td>{{$pCommision = ($grossPremium * $commision) * 0.9}}</td>
                    <td>{{$ppn = $pCommision * 0.1}}</td>
                    <td>{{$totalCommision = $grossPremium * $commision}}</td>
                    <td>{{$pphCommision = $pCommision * 0.02}}</td>
                    <td>{{$partnerBill = ($totalCommision - $pphCommision)}}</td>
                    <td>{{$totalPartnerBill = ($premium - $partnerBill)}}</td>
                    <td><a href="{{ route('certificate.index', $transaction['id']) }}" target="_blank"><button class="btn btn-alt-danger">Generate Certificate</button></a></td>
                    @endrole
                </tr>
            @empty
                <tr>
                    <td colspan="17">No data to be shown.</td>
                </tr>
            @endforelse

    </tbody>
</table>
<div class="row">
    <div class="col page-info">
        Showing {{$transactions->firstItem()}} to {{$transactions->lastItem()}} of {{$transactions->total()}} entries
    </div>
    <div class="col">
        <div class="float-right paginate">
            {{$transactions->appends($append)->links('pagination/simple-bootstrap-4')}}
        </div>
    </div>
</div>
@role('supadmin|treasury|financial|partner financial')
<div class="row" align="left">
        <div class="block-content block-content-full order-1">
            {{-- Start of Partner Commision Row --}}
            <div class="row">
                <div class="col-md-2">
                    <div class="block">
                        <b>Total Partner Commision</b>
                        <br>
                        <small>(dalam rupiah)</small>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="block">
                        {{$sumCommision}}
                    </div>
                </div>
            {{-- End of Partner Commision Row --}}
            {{-- Start of PPN Row --}}
                <div class="col-md-2">
                    <div class="block">
                        <b>Total PPN</b>
                        <br>
                        <small>(dalam rupiah)</small>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="block">
                        {{$sumPpnCommision}}
                    </div>
                </div>
            {{-- End of PPN Row --}}
            {{-- Start of PPN + komisi Row --}}
                <div class="col-md-2">
                    <div class="block">
                        <b>Total PPN + Komisi</b>
                        <br>
                        <small>(dalam rupiah)</small>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="block">
                        {{$sumTotalCommision}}
                    </div>
                </div>
            </div>
            {{-- End of PPN + Komisi Row --}}
            {{-- Start of PPH Row --}}
            <div class="row">
                <div class="col-md-2">
                    <div class="block">
                        <b>Total PPH Komisi</b>
                        <br>
                        <small>(dalam rupiah)</small>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="block">
                        {{$sumPphCommision}}
                    </div>
                </div>
            {{-- End of PPH Komisi Row --}}
            {{-- Start of Tagihan Partner Row --}}
                <div class="col-md-2">
                    <div class="block">
                        <b>Total Tagihan Partner</b>
                        <br>
                        <small>(dalam rupiah)</small>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="block">
                        {{$sumPartnerBill}}
                    </div>
                </div>
            {{-- End of Tagihan Partner Row --}}
            {{-- Start of Tagihan Premi Partner Row --}}
                <div class="col-md-2">
                    <div class="block">
                        <b>Total Tagihan Premi Partner</b>
                        <br>
                        <small>(dalam rupiah)</small>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="block">
                        {{$sumTotalPartnerBill}}
                    </div>
                </div>
            </div>
            {{-- End of PPH Komisi Row --}}
        </div>
    </div>
@endrole
