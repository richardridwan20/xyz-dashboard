@extends('layouts.master')

@section('content')

<div class="content">
    <div class="block block-fx-shadow">
        <div class="block">
            <div class="block-header block-header-default bg-primary-lighter">
                <h3 class="block-title text-uppercase">Product Of Partner</h3>
                <div class="block-options">
                </div>
            </div>
            <div class="block-content block-content-full">
                    <div align='right' class="col-12" style="margin-right: 20px; margin-buttom: 20px;">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addModal" align='right'>Add Partner Product</button>
                    </div>
                @include('productofpartner.table')
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Add Partner Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
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
                    <form action="{{ route('productofpartner.create') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group {{ !$errors->has('title') ?: 'has-error' }}">
                        <div class="form-group {{ !$errors->has('file') ?: 'has-error' }}">
                                <div class="form-group row">

                                        <select type="dropdown" class="form-control" id="plan_id" name="plan_id">
                                            <option  disabled selected>Select Product</option>
                                            @for($i=0;$i<count($plan->bodyResponse);$i++)
                                                <option value="{{$plan->bodyResponse[$i]['id']}}">{{$plan->bodyResponse[$i]['product']['name']}} {{$plan->bodyResponse[$i]['name']}} {{$plan->bodyResponse[$i]['duration']}}</option>
                                            @endfor
                                        </select>

                                        @error('name')
                                            <p style="color:red">
                                                <strong>{{ $message }}</strong>
                                            </p>
                                        @enderror
                                </div>
                        <div class="form-group row">

                                    <select type="dropdown" class="form-control" id="partner_id" name="partner_id">
                                        <option  disabled selected>Select Partner</option>
                                        @for($i=0;$i<count($partnerName);$i++)
                                            <option value="{{$partnerName[$i]['id']}}">{{$partnerName[$i]['name']}}</option>
                                        @endfor
                                    </select>

                                    @error('name')
                                        <p style="color:red">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror
                            </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <input type="submit" value="Submit" class="btn btn-alt-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
function confirmation(routeHref){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            window.location.href = routeHref;
            }
    })
}

var session1 = "{{Session::get('notify')}}"
        console.log(session1)
        if (session1 == 'created') {
                Swal.fire(
                'Created!',
                'Product Partner has been created',
                'success'
                )
        }else if (session1 == 'deleted'){
                Swal.fire(
                'Deleted!',
                'Product Partner has been deleted',
                'success'
                )
        }
</script>

@endpush

