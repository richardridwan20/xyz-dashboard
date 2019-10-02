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
            <th id="partner_id" data-sort="partner_id" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Agent Name</b>
                <i class="partner_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="agent_branch_id" data-sort="agent_branch_id" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Branch Name</b>
                <i class="agent_branch_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="customer_id" data-sort="customer_id" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>PH Name</b>
                <i class="customer_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="customer_id" data-sort="customer_id" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>PH Email</b>
                <i class="customer_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="insuredNumber" data-sort="insuredNumber" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Insured Name</b>
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
            <th id="product_id" data-sort="product_id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Plan</b>
                <i class="product_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="protection_duration" data-sort="protection_duration" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Protection Duration</b>
                <i class="protection_duration fa fa-pull-right fa-sort"></i>
            </th>
            <th id="protection_start" data-sort="protection_start" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Protection Start</b>
                <i class="protection_start fa fa-pull-right fa-sort"></i>
            </th>
            <th id="protection_end" data-sort="protection_end" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Protection End</b>
                <i class="protection_end fa fa-pull-right fa-sort"></i>
            </th>
            <th id="policy_number" data-sort="policy_number" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Policy Number</b>
                <i class="policy_number fa fa-pull-right fa-sort"></i>
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
                <b>Partner commission</b><i class="status fa fa-pull-right fa-sort"></i>
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
                <b>Komisi Net</b>
                <i class="status fa fa-pull-right fa-sort"></i>
                <br>
                <small>(dalam rupiah)</small>
            </th>
            <th style='line-height: 100%' id="tpPartner" data-sort="tpPartner" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Tagihan ke Partner</b>
                <i class="status fa fa-pull-right fa-sort"></i>
                <br>
                <small>(dalam rupiah)</small>
            </th>
            @endrole
        </tr>
    </thead>
    {{-- {{dd($transactions)}} --}}
    <tbody id="tableAjax">
            @forelse ($transactions as $transaction)
                @php
                    $commission = $transaction['partner_id']['commission'];
                    $duration = $transaction['protection_duration'];
                    $start = \Carbon\Carbon::parse($transaction['protection_start'])->format('d-F-Y');
                    $end = \Carbon\Carbon::parse($transaction['protection_end'])->format('d-F-Y');
                    if($transaction['plan_id']['duration'] == 'Yearly')
                    {
                        $year = $duration/12;
                        $premium = ($transaction['plan_id']['premium']);
                        $grossPremium = $premium * $year;
                    } else {
                        $premium = ($transaction['plan_id']['premium']);
                        $grossPremium = $premium;
                    }
                    $pcommission = ($grossPremium * $commission) * 0.9;
                    $ppn = $pcommission * 0.1;
                    $totalcommission = $grossPremium * $commission;
                    $pphcommission = $pcommission * 0.02;
                    $partnerBill = ($totalcommission - $pphcommission);
                    $totalPartnerBill = ($grossPremium - $partnerBill);
                @endphp
                <tr>
                    <td><a href="{{ route('dashboard.detail', $transaction['id']) }}">{{$transaction['id']}}</a></td>
                    <td>{{$transaction['invoice_number']}}</td>
                    <td>{{$transaction['partner_id']['name']}}</td>
                    @if($transaction['agent_id'] == null)
                    <td>-</td>
                    <td>-</td>
                    @else
                    @if($transaction['agent_id'][0]['agent_name'] == null)
                    <td>-</td>
                    @else
                    <td>{{$transaction['agent_id'][0]['agent_name']}}</td>
                    @endif
                    @if($transaction['agent_id'][0]['branch_name'] == null)
                    <td>-</td>
                    @else
                    <td>{{$transaction['agent_id'][0]['branch_name']}}</td>
                    @endif
                    @endif

                    <td>{{$transaction['customer_id']['name']}}</td>
                    <td>{{$transaction['customer_id']['email']}}</td>
                    <td>{{$transaction['insured_name']}}</td>
                    <td>{{$transaction['plan_id']['name']}}</td>
                    @if ($transaction['plan_id']['duration'] == 'Yearly')
                        <td>{{$year}} year</td>
                    @else
                        <td>{{$transaction['protection_duration']}} month</td>
                    @endif
                    <td>{{$start}}</td>
                    <td>{{$end}}</td>
                    <td>{{$transaction['policy_number']}}</td>
                    <td>{{$transaction['status']}}</td>
                    @role('supadmin|treasury|financial|partner financial')
                    @if($transaction['status'] == "Canceled")
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    @else
                    <td>{{number_format($grossPremium)}}</td>
                    <td>{{number_format($pcommission)}}</td>
                    <td>{{number_format($ppn)}}</td>
                    <td>{{number_format($totalcommission)}}</td>
                    <td>{{number_format($pphcommission)}}</td>
                    <td>{{number_format($partnerBill)}}</td>
                    <td>{{number_format($totalPartnerBill)}}</td>
                    @endif
                    @endrole
                </tr>
            @empty
                <tr>
                    <td colspan="21">No data to be shown.</td>
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
            {{-- Start of Partner commission Row --}}
            <div class="row">
                <div class="col-md-2">
                    <div class="block">
                        <b>Total Partner commission</b>
                        <br>
                        <small>(dalam rupiah)</small>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="block">
                        {{number_format($sumcommission)}}
                    </div>
                </div>
            {{-- End of Partner commission Row --}}
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
                        {{number_format($sumPpncommission)}}
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
                        {{number_format($sumTotalcommission)}}
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
                        {{number_format($sumPphcommission)}}
                    </div>
                </div>
            {{-- End of PPH Komisi Row --}}
            {{-- Start of Tagihan Partner Row --}}
                <div class="col-md-2">
                    <div class="block">
                        <b>Total Komisi Net</b>
                        <br>
                        <small>(dalam rupiah)</small>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="block">
                        {{number_format($sumPartnerBill)}}
                    </div>
                </div>
            {{-- End of Tagihan Partner Row --}}
            {{-- Start of Tagihan Premi Partner Row --}}
                <div class="col-md-2">
                    <div class="block">
                        <b>Total Tagihan ke Partner</b>
                        <br>
                        <small>(dalam rupiah)</small>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="block">
                        {{number_format($sumTotalPartnerBill)}}
                    </div>
                </div>
            </div>
            {{-- End of PPH Komisi Row --}}
        </div>
    </div>
@endrole
