@extends('layouts.master')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-6">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Upload Data</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_elements_bootstrap.html" method="post" enctype="multipart/form-data" onsubmit="return false;">
                        <div class="form-group row">
                            <label class="col-12">Static</label>
                            <div class="col-md-9">
                                <div class="form-control-plaintext">Username</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input">Text</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text..">
                                <div class="form-text text-muted">Further info about this input</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Checkboxes</label>
                            <div class="col-12">
                                <div class="custom-control custom-checkbox mb-5">
                                    <input class="custom-control-input" type="checkbox" name="example-checkbox1" id="example-checkbox1" value="option1" checked>
                                    <label class="custom-control-label" for="example-checkbox1">Option 1</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input class="custom-control-input" type="checkbox" name="example-checkbox2" id="example-checkbox2" value="option2">
                                    <label class="custom-control-label" for="example-checkbox2">Option 2</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input class="custom-control-input" type="checkbox" name="example-checkbox3" id="example-checkbox3" value="option3">
                                    <label class="custom-control-label" for="example-checkbox3">Option 3</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="example-datepicker3" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Bootstrap's Custom File Input</label>
                            <div class="col-8">
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Codebase() -> uiHelperCoreCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" id="example-file-input-custom" name="example-file-input-custom" data-toggle="custom-file-input">
                                    <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Bootstrap's Custom File Input (Multiple)</label>
                            <div class="col-8">
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Codebase() -> uiHelperCoreCustomFileInput()) -->
                                    <!-- When multiple files are selected, we use the word 'Files'. You can easily change it to your own language by adding the following to the input, eg for DE: data-lang-files="Dateien" -->
                                    <input type="file" class="custom-file-input" id="example-file-multiple-input-custom" name="example-file-multiple-input-custom" data-toggle="custom-file-input" multiple>
                                    <label class="custom-file-label" for="example-file-multiple-input-custom">Choose files</label>
                                </div>
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

