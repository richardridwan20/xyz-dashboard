<table id="example" class="table table-hover table-responsive table-striped table-vcenter table-bordered">
    <thead>
        <tr>
            <th id="claim_id" data-sort="claim_id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Claim ID</b>
                <i class="claim_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="transaction_id" data-sort="transaction_id" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Transaction ID</b>
                <i class="transaction_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="cause_of_claim" data-sort="cause_of_claim" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Cause of Claim</b>
                <i class="cause_of_claim fa fa-pull-right fa-sort"></i>
            </th>
            <th id="claim_date" data-sort="claim_date" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Claim Date</b>
                <i class="claim_date fa fa-pull-right fa-sort"></i>
            </th>
            <th id="event_date" data-sort="event_date" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Event Date</b>
                <i class="event_date fa fa-pull-right fa-sort"></i>
            </th>
            <th id="claim_decision" data-sort="claim_decision" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Claim Decision</b>
                <i class="claim_decision fa fa-pull-right fa-sort"></i>
            </th>
            <th id="decision_date" data-sort="decision_date" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Decision Date</b>
                <i class="decision_date fa fa-pull-right fa-sort"></i>
            </th>
            <th id="diagnose" data-sort="diagnose" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Diagnose</b>
                <i class="diagnose fa fa-pull-right fa-sort"></i>
            </th>
            <th id="claim_amount" data-sort="claim_amount" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Claim Amount</b>
                <i class="claim_amount fa fa-pull-right fa-sort"></i>
            </th>
            <th id="hospital_in" data-sort="hospital_in" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Hospital In</b>
                <i class="hospital_in fa fa-pull-right fa-sort"></i>
            </th>
            <th id="hospital_out" data-sort="hospital_out" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Hospital Out</b>
                <i class="hospital_out fa fa-pull-right fa-sort"></i>
            </th>
        </tr>
    </thead>
    <tbody id="tableAjax">
            @forelse ($claims as $claim)
                @php
                    $hospitalIn = strtotime($claim['hospital_in']);
                    $hospitalOut = strtotime($claim['hospital_out']);
                    $claimDate = strtotime($claim['claim_date']);
                    $eventDate = strtotime($claim['event_date']);
                    $decisionDate = strtotime($claim['decision_date']);
                    $dateIn = date('d-M-Y', $hospitalIn);
                    $dateOut = date('d-M-Y', $hospitalOut);
                    $dateClaim = date('d-M-Y', $claimDate);
                    $dateEvent = date('d-M-Y', $eventDate);
                    $dateDecision = date('d-M-Y', $decisionDate);
                @endphp
                <tr>
                    <td>{{$claim['id']}}</td>
                    <td>{{$claim['transaction_id']}}</td>
                    <td>{{$claim['cause_of_claim']}}</td>
                    <td>{{$dateClaim}}</td>
                    <td>{{$dateEvent}}</td>
                    @if ($claim['claim_decision'] == "Approve")
                        <td><span class="badge badge-success">{{$claim['claim_decision']}}</span></td>
                    @elseif($claim['claim_decision'] == "Reject")
                        <td><span class="badge badge-danger">{{$claim['claim_decision']}}</span></td>
                    @elseif($claim['claim_decision'] == "Ex Gratia")
                        <td><span class="badge badge-success">{{$claim['claim_decision']}}</span></td>
                    @elseif($claim['claim_decision'] == "Cancel")
                        <td><span class="badge badge-danger">{{$claim['claim_decision']}}</span></td>
                    @endif
                    <td>{{$dateDecision}}</td>
                    <td>{{$claim['diagnose']}}</td>
                    <td>{{$claim['claim_amount']}}</td>
                    <td>{{$dateIn}}</td>
                    <td>{{$dateOut}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="11">No data to be shown.</td>
                </tr>
            @endforelse
    </tbody>
</table>
<div class="row">
    <div class="col page-info">
        Showing {{$claims->firstItem()}} to {{$claims->lastItem()}} of {{$claims->total()}} entries
    </div>
    <div class="col">
        <div class="float-right paginate">
            {{$claims->appends($append)->links('pagination/simple-bootstrap-4')}}
        </div>
    </div>
</div>
