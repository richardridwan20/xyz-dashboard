@extends('layouts.master')

@section('content')

@php
$error = session('error');
if($error != null){
    for($i=0;$i<$error['total_row'];$i++){
        if(array_key_exists('row '.($i+2), $error['error'])){
            $datas[$i] = [
            'row' => $i+2,
            'status' => "Failed",
            'desc' => $error['error']['row '.($i+2)]
            ];
        }
    }
    sort($datas);
}
@endphp

<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title text-uppercase"><b>Bulk Upload</b></h3>
                    <i class="fa fa-info-circle"></i>
                </div>
                <div class="block-content">
                    <form action="{{ route('upload.post') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group {{ !$errors->has('title') ?: 'has-error' }}">
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
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    @if ($error != null)
                    <div class="row">
                        <div class="col-md-2">
                            total fail: {{$error['fail_row']}}
                        </div>
                        <div class="col-md-3">
                            total success: {{$error['total_row']-$error['fail_row']}}
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-4">
                            <form action="GET">
                                @csrf
                                <input type="submit" class="btn btn-alt-primary" value="Download Fail Report" formaction="{{ route('upload.download_fail_report', $error['file_name'])}}"/>
                            </form>
                        </div>
                    </div>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                            <table id="example" class="table table-hover table-striped table-vcenter table-bordered">
                                <thead>
                                    <tr>
                                        <th id="id" data-sort="id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                                            <b>Row</b>
                                            <i class="id fa fa-pull-right fa-sort"></i>
                                        </th>
                                        <th id="id" data-sort="id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                                            <b>Status</b>
                                            <i class="id fa fa-pull-right fa-sort"></i>
                                        </th>
                                        <th id="id" data-sort="id" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                                            <b>Description</b>
                                            <i class="id fa fa-pull-right fa-sort"></i>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                        <tr>
                                            <td>{{$data['row']}}</td>
                                            <td>{{$data['status']}}</td>
                                            <td>
                                                @foreach($data['desc'] as $key => $val)
                                                    <li>{{$key}}={{$val[0]}}</li>
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                    @endif
                </div>
            </div>
            <!-- END Default Elements -->
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
var session1 = "{{Session::get('notify')}}"
    console.log(session1)
    if (session1 == 'uploaded') {
            Swal.fire(
            'Success!',
            'file uploaded successfully',
            'success'
            )
    }
</script>
@endsection

