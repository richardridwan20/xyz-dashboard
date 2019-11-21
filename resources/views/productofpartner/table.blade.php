<table id="example" class="table table-hover table-striped table-vcenter table-bordered ">
    <thead>
        <tr>
            <th id="id" data-sort="id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Partner ID</b>
                <i class="id fa fa-pull-right"></i>
            </th>
            <th style='line-height: 100%' id="tpPartner" data-sort="tpPartner" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Partner Name</b>
                <i class="status fa fa-pull-right"></i>
            </th>
            <th id="partner_id" data-sort="partner_id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Product ID</b>
                <i class="partner_id fa fa-pull-right"></i>
            </th>
            <th id="customer_id" data-sort="customer_id" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Product Name</b>
                <i class="customer_id fa fa-pull-right"></i>
            </th>
            <th id="customer_id" data-sort="customer_id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Plan</b>
                <i class="customer_id fa fa-pull-right"></i>
            </th>
            <th id="customer_id" data-sort="customer_id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Duration</b>
                <i class="customer_id fa fa-pull-right"></i>
            </th>
            <th id="customer_id" data-sort="customer_id" data-order="DESC" class="small-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Quota</b>
                <i class="customer_id fa fa-pull-right"></i>
            </th>
            <th id="customer_id" data-sort="customer_id" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Action</b>
                <i class="customer_id fa fa-pull-right"></i>
            </th>
        </tr>
    </thead>
    <tbody id="tableAjax">
        @if(auth()->user()->can('view all transaction') ||  auth()->user()->can('view all transaction by partner name'))
            {{$cpp = ''}}
            @forelse ($productOfPartners as $productOfPartner)
                <tr>
                    @if($cpp != $productOfPartner['partner_id']['id'])
                    <td>{{$cpp = $productOfPartner['partner_id']['id']}}</td>
                    <td>{{$productOfPartner['partner_id']['name']}}</td>
                    @else
                    <td></td>
                    <td></td>
                    @endif
                    <td>{{$productOfPartner['plan_id']['id']}}</td>
                    <td>{{$productOfPartner['plan_id']['product_id']['name']}}</td>
                    <td>{{$productOfPartner['plan_id']['name']}}</td>
                    <td>{{$productOfPartner['plan_id']['duration']}}</td>
                    <td>{{$productOfPartner['quota']}}</td>
                    <td>
                        <button class="btn btn-alt-primary" data-toggle="modal" data-target="#uploadModal" data-id="{{$productOfPartner['id']}}" data-name="">Edit</button>
                        <a onclick="confirmation('productofpartner/delete/{{$productOfPartner['id']}}')"><button class='btn btn-alt-danger'>Delete</button></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10">No data to be shown.</td>
                </tr>
            @endforelse
            @else
            <tr>
                <td colspan="10">Search data first.</td>
            </tr>
        @endif

    </tbody>
</table>

<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block">
                <div class="block-header block-header-default">
                    <h5 class="block-title" id="uploadModalLabel"><b>Change Partner Product Quota</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
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
                    <form action="{{ route('productofpartner.change-quota') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group {{ !$errors->has('title') ?: 'has-error' }}">
                        <div class="form-group {{ !$errors->has('file') ?: 'has-error' }}">
                        <div class="form-group row">
                            <input type="hidden" class="form-control" id="ppId" name="ppId">
                        </div>
                        <div class="form-group">
                            <label for="example-nf-email">Masukkan Kuota</label>
                            <input type="text" class="form-control" id="quota" name="quota" placeholder="Masukkan Kuota Produk yang dapat dibeli oleh nasabah...">
                        </div>
                        <div class="form-group row text-right">
                            <div class="col-12">
                                <input type="submit" value="Submit" class="btn btn-alt-primary">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
