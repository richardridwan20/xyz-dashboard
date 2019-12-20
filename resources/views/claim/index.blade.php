@extends('layouts.master')

@section('content')
<div class="content">
    <div class="block block-fx-shadow">
        <div class="block-header block-header-default">
            <h3 class="block-title text-uppercase"><b>Claim</b></h3>
            <i class="fa fa-info-circle" data-toggle="popover" title="Claim" data-placement="right" data-content="Berisikan informasi transaksi nasabah yang sudah melakukan klaim atas asuransi mereka."></i>
        </div>
        <div class="block-content block-content-full">
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">

                    </h3>
                    <div class="block-options">
                        <form action="">
                            <div class="row">
                                <div class="col-xs-12 col-md-7">
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
                                <div class="col-xs-12 col-md-4">
                                    <button type="submit" class="btn btn-alt-primary" formaction="{{ route('claim.download') }}" style="cursor: pointer">
                                        Download Report
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="block-content block-content-full">
                        @include('claim.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">

    var session1 = "{{Session::get('notify')}}"

    if (session1 == 'created') {
        Swal.fire(
            'Created!',
            'Klaim berhasil dibuat!',
            'success'
        )
    }

    $(document).ready(function()
    {
        var start = moment();
        var end = moment();

        function cb(start, end) {
            var start = start.format('D MMM YYYY');
            var end = end.format('D MMM YYYY');
            var e = document.getElementById("date");
            e.setAttribute("value", start + ' - ' + end);
        }

        $('#reportrange').daterangepicker({
            opens: 'left',
            locale: {
                "format": "D MMM YYYY",
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

</script>

@endpush

