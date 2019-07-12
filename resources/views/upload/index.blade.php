@extends('layouts.master')

@section('content')

<div class="content">
    <div class="row justify-content-center">
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
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('upload.post') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group {{ !$errors->has('title') ?: 'has-error' }}">
                        {{-- <div class="form-group row">
                            <label class="col-12">Masukkan judul</label>
                            <div class="col-8">
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Codebase() -> uiHelperCoreCustomFileInput()) -->
                                    <input type="text" class="form-control" placeholder="Masukkan Judul" id="" name="title" data-toggle="custom-file-input">
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-group {{ !$errors->has('file') ?: 'has-error' }}">
                        <div class="form-group row">
                            <label class="col-12">Upload file Excel yang diinginkan (format .xlsx atau .csv)</label>
                            <div class="col-8">
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Codebase() -> uiHelperCoreCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" id="example-file-input-custom" name="file" data-toggle="custom-file-input">
                                    <label class="custom-file-label" for="example-file-input-custom">Pilih file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <input type="submit" value="Submit" class="btn btn-alt-primary">
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

