@extends('layouts.master')

@section('content')
<div class="content">
    <div class="block block-fx-shadow">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title text-uppercase"><b>Transaction</b></h3>
                <i class="fa fa-info-circle" data-toggle="popover" title="Transactions" data-placement="right" data-content="Berisikan data transaksi yang dikirim oleh partner. Disini dapat dilakukan download report, download jurnal report dan search data berdasarkan nama."></i>
            </div>
            <div class="block-content">
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">

                        </h3>
                        <div class="block-options">
                            <form method="GET">
                                <div class="row">
                                    @role('supadmin|operation|financial|partner operation|partner financial')
                                    <div class="col-xs-12 col-md-5">
                                        <div class="input-group" id="reportrange" style="cursor: pointer">
                                            <input readonly data-toggle="popover" title="Search by Date" data-placement="top" data-content="You can search by predefined or custom date range" name="daterange" id="date" type="text" class="form-control" value="">
                                            <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                            <div class="input-group-append">
                                                <span class="input-group-text" >
                                                    <i class="fa fa-fw fa-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endrole
                                    @role('viewer|partner viewer')
                                    <div class="col-xs-12 col-md-3">

                                    </div>
                                    <div class="col-xs-12 col-md-5">
                                        <div class="input-group">
                                            <input class="form-control" data-toggle="popover" title="Search by Name" data-placement="top" data-content="You can search by Policy Holder / Insured / Agent Name"  type="text" name="text-name" placeholder="Name" value= "{{$data['name']}}">
                                            <div class="input-group-append">
                                                <span class="input-group-text" >
                                                    <i class="fa fa-fw fa-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endrole
                                    @role('supadmin|operation|financial|partner operation|partner financial')
                                    <div class="col-xs-12 col-md-3">
                                        <div class="input-group">
                                            <input class="form-control" data-toggle="popover" title="Search by Name" data-placement="top" data-content="You can search by Policy Holder / Insured / Agent Name"  type="text" name="text-name" placeholder="Name" value= "{{$data['name']}}">
                                            <div class="input-group-append">
                                                <span class="input-group-text" >
                                                    <i class="fa fa-fw fa-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endrole
                                    <div class="col-xs-12 col-md-2">
                                        <div class="">
                                           <button type="submit" class="btn btn-alt-primary" value="Search" formaction="{{ route('dashboard.index') }}"><i class="si si-magnifier"></i> Search</button>
                                        </div>
                                    </div>
                                    @role('supadmin|financial')
                                    <div class=" col-md-2">
                                        <div class="">
                                           <button type="submit" class="btn btn-alt-primary dropdown-toggle pull-right" id="btnDownload" value="Download" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Download</button>
                                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnDownload">
                                                <button type="submit" class="dropdown-item" formaction="{{ route('dashboard.download') }}" style="cursor: pointer">
                                                    <i class="fa fa-fw fa-envelope mr-5"></i>Download Transaction Report
                                                </button>

                                                <button type="submit" class="dropdown-item" formaction="{{ route('dashboard.download_journal') }}" style="cursor: pointer">
                                                    <i class="fa fa-fw fa-envelope mr-5"></i>Download Accounting Journal
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    @endrole
                                </div>
                            </form>
                        </div>
                            {{-- <div class="col-12" class="form-control">
                                @if(Session::get('name') != "" || Session::get('agent') != "" || Session::get('month') != "" || Session::get('year') != "")
                                <label for="" class="col-form-label">Showing search result for :</label>
                                @endif
                                @if(Session::get('name') != "")
                                    <label for="" class="col-form-label"> PH/Insured Name: "{{Session::get('name')}}", </label>
                                @else
                                    @role('viewer|partner viewer')
                                    <label for="" class="col-form-label">Search Name First</label>
                                    @endrole
                                @endif
                                @if(Session::get('agent') != "")
                                    <label for="" class="col-form-label"> Agent/Branch Name: "{{Session::get('agent')}}", </label>
                                @endif
                                @if(Session::has('date'))
                                    <label for="" class="col-form-label">Date: {{Session::get('date')}}</label>
                                @elseIf(Session::has('month'))
                                    <label for="" class="col-form-label">Month: {{Session::get('month')}} </label>
                                @elseIf(Session::has('year'))
                                    <label for="" class="col-form-label">Year: {{Session::get('year')}} </label>
                                @endIf
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input class="form-control"  type="text" name="text-name" placeholder="Search by Policy Holder / Insured Name" value= "{{Session::get('name')}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-fw fa-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <form method="GET" class="form-group row">
                                <div class="col-2">
                                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                    <input type="hidden" name="status" value="opened">
                                </div>
                                @role('supadmin|financial|operation|partner financial|partner operation')
                                <div class="col-2">
                                    <select class="form-control" id="select-month" name="select-month">
                                        <option value="0" disabled>Choose Month</option>
                                        <option value= "" {{ null == $data['month'] ? 'selected="selected"' : '' }}>Without Month</option>
                                        <option value="01" {{ '01' == $data['month'] ? 'selected="selected"' : '' }}>Januari</option>
                                        <option value="02" {{ '02' == $data['month'] ? 'selected="selected"' : '' }}>Februari</option>
                                        <option value="03" {{ '03' == $data['month'] ? 'selected="selected"' : '' }}>Maret</option>
                                        <option value="04" {{ '04' == $data['month'] ? 'selected="selected"' : '' }}>April</option>
                                        <option value="05" {{ '05' == $data['month'] ? 'selected="selected"' : '' }}>Mei</option>
                                        <option value="06" {{ '06' == $data['month'] ? 'selected="selected"' : '' }}>Juni</option>
                                        <option value="07" {{ '07' == $data['month'] ? 'selected="selected"' : '' }}>Juli</option>
                                        <option value="08" {{ '08' == $data['month'] ? 'selected="selected"' : '' }}>Agustus</option>
                                        <option value="09" {{ '09' == $data['month'] ? 'selected="selected"' : '' }}>September</option>
                                        <option value="10" {{ '10' == $data['month'] ? 'selected="selected"' : '' }}>Oktober</option>
                                        <option value="11" {{ '11' == $data['month'] ? 'selected="selected"' : '' }}>November</option>
                                        <option value="12" {{ '12' == $data['month'] ? 'selected="selected"' : '' }}>Desember</option>
                                    </select>
                                </div>
                                <div class="col-2">
                                    <select class="form-control" id="select-year" name="select-year">
                                        <option value="0" disabled>Choose Year</option>
                                        <option value= "" {{ null == $data['year'] ? 'selected="selected"' : '' }}>Without Year</option>
                                        <option value="2019" {{ '2019' == $data['year'] ? 'selected="selected"' : '' }}>2019</option>
                                    </select>
                                </div>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="agent-name" placeholder="Agent Name" value= "{{Session::get('agent')}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-fw fa-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="input-group input-daterange">
                                        <input readonly type="text" name="daterange" class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-fw fa-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endrole
                                @role("viewer|partner viewer")
                                <div class="col-1"></div>
                                <div class="col-3">
                                    <input class="form-control" type="text" name="text-name" placeholder="Policy Holder / Insured Name" value= "{{Session::get('name')}}">
                                </div>
                                @endrole
                                <div class="col-4">
                                    <input type="submit" class="btn btn-alt-primary" value="Search" formaction="{{ route('dashboard.index') }}"/>
                                </div>
                                @role('supadmin|operation|financial|partner operation|partner financial')
                                <div class="col-md-2 form-control">
                                    <input type="submit" class=" btn btn-alt-primary" value="Download Report" formaction="{{ route('dashboard.download')}}"/>
                                </div>
                                @endrole
                            </form>
                            </div> --}}
                    </div>
                    <div class="block-content block-content-full tab-content">
                        @include('dashboard.table')
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

 <!-- Onboarding Modal -->
 <div class="modal fade" id="modal-onboarding" tabindex="-1" role="dialog" aria-labelledby="modal-onboarding" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-popout" role="document">
        <div class="modal-content rounded">
            <div class="block block-rounded block-transparent mb-0 bg-pattern" style="background-image: url('assets/media/various/bg-pattern-inverse.png');">
                <div class="block-header justify-content-end">
                    <div class="block-options">
                        <a class="font-w600 text-danger" href="#" data-dismiss="modal" aria-label="Close">
                            Skip Intro
                        </a>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="js-slider slick-dotted-inner" data-dots="true" data-arrows="false" data-infinite="false">
                        <div class="pb-50">
                            <div class="row justify-content-center text-center">
                                <div class="col-md-10 col-lg-8">
                                    <i class="si si-fire fa-4x text-primary"></i>
                                    <h3 class="font-size-h2 font-w300 mt-20">Welcome to Sovera!</h3>
                                    <p class="text-muted">
                                        This is a modal you can show to your users when they first sign in to their dashboard. It is a great place to welcome and introduce them to your application and its functionality.
                                    </p>
                                    <button type="button" class="btn btn-sm btn-hero btn-noborder btn-primary mb-10 mx-5">
                                        Key features <i class="fa fa-arrow-right ml-5"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Onboarding Modal -->
@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">

    var session1 = "{{Session::get('notify')}}"
    if (session1 == 'canceled') {
        Swal.fire(
        'Canceled!',
        'Transaction successfully canceled.',
        'success'
        )
    }

    $(document).ready(function()
    {
        var startFromController = {!! json_encode($data['start_date']) !!};
        var endFromController = {!! json_encode($data['end_date']) !!};

        var start = moment(startFromController);
        var end = moment(endFromController);

        function cb(start, end) {
            var start = start.format('D MMMM YYYY');
            var end = end.format('D MMMM YYYY');
            var e = document.getElementById("date");
            e.setAttribute("value", start + ' - ' + end);
        }

        $('#reportrange').daterangepicker({
            opens: 'left',
            locale: {
                "format": "D MMMM YYYY",
                "separator": " - ",
                "applyLabel": "Apply",
                "cancelLabel": "Cancel",
                "fromLabel": "From",
                "toLabel": "To",
                "customRangeLabel": "Range",
                "weekLabel": "M",
                "daysOfWeek": [
                    "Min",
                    "Sen",
                    "Sel",
                    "Rab",
                    "Kam",
                    "Jum",
                    "Sab"
                ],
                "monthNames": [
                    "Januari",
                    "Februari",
                    "Maret",
                    "April",
                    "Mei",
                    "Juni",
                    "Juli",
                    "Agustus",
                    "September",
                    "Oktober",
                    "November",
                    "Desember"
                ],
                "firstDay": 1
            },
            startDate: start,
            endDate: end,
            ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);

    });

    var BePagesDashboard = function() {
        // Init Onboarding modal
        var initOnboardingModal = function(){
            // Show Onboarding Modal by default
            jQuery('#modal-onboarding').modal('show');

            // Re-init Slick Slider every time the modal is shown
            $('#modal-onboarding').on('shown.bs.modal', function(e) {
                // Remove enabled class added by the helper to prevent re-init
                jQuery('js-slider', '#modal-onboarding').removeClass('js-slider-enabled');

                // Re-init Slick Slider
                Codebase.helpers('slick');
            })
        };

        return {
            init: function () {

                // Init Onboarding modal
                // initOnboardingModal();
            }
        };
    }();

    // Initialize when page loads
    jQuery(function(){ BePagesDashboard.init();
    });

</script>

@endpush

