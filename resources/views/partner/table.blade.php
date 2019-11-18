<table id="example" class="table table-hover table-responsive table-striped table-vcenter table-bordered ">
    <thead>
        <tr>
            <th id="id" data-sort="id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>ID</b>
                <i class="id fa fa-pull-right"></i>
            </th>
            <th style='line-height: 100%' id="partner_name" data-sort="partner_name" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Partner Name</b>
                <i class="partner_name fa fa-pull-right"></i>
            </th>
            <th id="company_name" data-sort="company_name" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Company Name</b>
                <i class="company_name fa fa-pull-right"></i>
            </th>
            <th id="company_address" data-sort="company_address" data-order="DESC" class="large-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Address</b>
                <i class="company_address fa fa-pull-right"></i>
            </th>
            <th id="commission" data-sort="commission" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Commission</b>
                <i class="commission fa fa-pull-right"></i>
            </th>
            <th id="email" data-sort="email" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Email</b>
                <i class="email fa fa-pull-right"></i>
            </th>
            <th id="allow_send" data-sort="allow_send" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Allow Send Data</b>
                <i class="allow_send fa fa-pull-right"></i>
            </th>
            <th id="allow_phone" data-sort="allow_phone" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Allow Phone</b>
                <i class="allow_phone fa fa-pull-right"></i>
            </th>
            <th id="action" data-sort="action" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Action</b>
                <i class="action fa fa-pull-right"></i>
            </th>
        </tr>
    </thead>
    <tbody id="tableAjax">
        @forelse ($partners as $partner)
            <tr>
                <td>{{$partner['id']}}</td>
                <td>{{$partner['name']}}</td>
                <td>{{$partner['company_name']}}</td>
                <td>{{$partner['company_address']}}</td>
                <td>{{$partner['commission']}}</td>
                <td>{{$partner['email']}}</td>
                @if($partner['allow_send_data'] == 0)
                <td>No</td>
                @else
                <td>Yes</td>
                @endIf
                @if($partner['allow_phone_data'] == 0)
                <td>No</td>
                @else
                <td>Yes</td>
                @endIf
                <td>
                    {{-- <button class="btn btn-alt-primary" data-toggle="modal" data-target="#uploadModal" data-id="{{$productOfPartner['id']}}" data-name="">Edit</button>
                    <a onclick="confirmation('productofpartner/delete/{{$productOfPartner['id']}}')"><button class='btn btn-alt-danger'>Delete</button></a> --}}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="9">No data to be shown.</td>
            </tr>
        @endforelse
    </tbody>
</table>

{{-- <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Change Partner Product Quota</h5>
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
                <form action="{{ route('ProductOfPartner.change_quota') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group {{ !$errors->has('title') ?: 'has-error' }}">
                    <div class="form-group {{ !$errors->has('file') ?: 'has-error' }}">
                    <div class="form-group row">
                        <input type="hidden" class="form-control" id="PpId" name="PpId">
                    </div>
                    <div class="form-group">
                        <label for="example-nf-email">Masukkan quota</label>
                        <input type="text" class="form-control" id="quota" name="quota" placeholder="Masukkan Quota Product of Partner...">
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
</div> --}}
