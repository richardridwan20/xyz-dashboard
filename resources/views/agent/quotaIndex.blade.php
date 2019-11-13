@extends('layouts.master')

@section('content')

<div class="content">
    <div class="block block-fx-shadow">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title text-uppercase"><b>Partner Quota</b></h3>
                <i class="fa fa-info-circle" data-toggle="popover" title="Partner Quota" data-placement="right" data-content="Setiap partner dapat diatur kuota agentnya disini."></i>
            </div>
            <div class="block-content block-content-full">
                <form method="GET">
                    <div class="form-group row">
                        <div class="col-4"><a class="btn btn-alt-info back-btn" href="{{url()->previous()}}"><i class="fa fa-arrow-circle-left"></i>  Back to Manage Agent</a></div>
                        <div class="col-2">
                            <input type="hidden" name="id" value="{{Auth::user()->id}}">
                        </div>
                        <div class="col-2"></div>
                        <div class="col-2">
                            <input class="form-control" type="text" name="text-name" placeholder="Partner Name">
                        </div>
                        <div class="col-1">
                            <input type="submit" class="btn btn-alt-primary" value="Search" formaction="{{ route('dashboard.agent_quota') }}"/>
                        </div>
                    </div>
                </form>
                    @include('agent.quotaTable')
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Edit Partner Quota</h5>
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
                    <form action="{{ route('dashboard.change_quota') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group {{ !$errors->has('title') ?: 'has-error' }}">
                        <div class="form-group {{ !$errors->has('file') ?: 'has-error' }}">
                        <div class="form-group row">
                            <input type="hidden" class="form-control" id="partnerId" name="id">
                            <label class="col-12">Masukkan jumlah kuota yang diinginkan untuk:</label>
                        </div>
                        <div class="form-group">
                            <label id="partnerName"></label>
                        </div>
                        <div class="form-group">
                            <label for="example-nf-email">Masukkan quota</label>
                            <input type="text" class="form-control" id="quota" name="quota" placeholder="Masukkan Quota Agent...">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8">
    </script>

    <script>
        var session1 = "{{Session::get('notify')}}"
        console.log(session1)
        if (session1 == 'success') {
                Swal.fire(
                'Success!',
                'Partner agent quota has been changed',
                'success'
                )
        }
    </script>
@endsection


    @push('script')

        <script type="text/javascript">

            $(document).ready(function()
            {
                $(function() {
                    $('#uploadModal').on("show.bs.modal", function (e) {
                        var id = $(e.relatedTarget).data('id');
                        var name = $(e.relatedTarget).data('name');
                        $("#uploadModalLabel").html($(e.relatedTarget).data('title'));
                        $("#partnerId").val(id);
                        $("#partnerName").text(name);
                    });
                });
            });

        </script>

    @endpush


