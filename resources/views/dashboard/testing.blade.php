@extends('layouts.master')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-6">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Input Transaction Data Manually</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="{{route('dashboard.check')}}" method="post">
                        <div class="form-group row">
                            <label class="col-12">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Text..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input">KTP</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="KTP" name="KTP" placeholder="Text..">
                            <label>{{$info}}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Default Elements -->
        </div>
</div>

@endsection

@push('script')

<script type="text/javascript">

    var uiHelperDatepicker = function uiHelperDatepicker() {
        // Init datepicker (with .js-datepicker and .input-daterange class)
        jQuery('.js-datepicker:not(.js-datepicker-enabled)').add('.input-daterange:not(.js-datepicker-enabled)').each(function () {
        var el = jQuery(this); // Add .js-datepicker-enabled class to tag it as activated

        el.addClass('js-datepicker-enabled'); // Init

        el.datepicker({
            weekStart: el.data('week-start') || 0,
            autoclose: el.data('autoclose') || false,
            todayHighlight: el.data('today-highlight') || false,
            orientation: 'bottom' // Position issue when using BS4, set it to bottom until officially supported

        });
        });
    };

    $(document).ready(function()
    {
        uiHelperDatepicker();
    });

</script>

@endpush

