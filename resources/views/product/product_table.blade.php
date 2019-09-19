<table id="example" class="table table-hover table-striped table-vcenter table-bordered">
    <thead>
        <tr>
            <th id="product_name" data-sort="product_name" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Product Id</b>
                <i class="id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="product_name" data-sort="product_name" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Product Name</b>
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
            <th id="premium" data-sort="premium" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Created At</b>
                <i class="partner_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="duration" data-sort="duration" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Updated At</b>
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
            <th id="action" data-sort="action" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Actions</b>
                <i class="customer_id fa fa-pull-right fa-sort"></i>
            </th>
        </tr>
    </thead>
    <tbody id="tableAjax">
        {{$productName = ''}}
            @forelse ($products as $product)
                <tr>
                    <td>{{$product['id']}}</td>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['created_at']['date']}}</td>
                    <td>{{$product['updated_at']['date']}}</td>
                    <td>
                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#editProductModal" data-id="{{$product['id']}}" data-name="{{$product['name']}}">Edit</button>
                        <a onclick="confirmation('product/delete/{{$product['id']}}')"><button class='btn btn-alt-danger'>Delete</button></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="16">No data to be shown.</td>
                </tr>
            @endforelse
    </tbody>
</table>
<div class="row">
    <div class="col">
        <div class="float-right paginate">
            {{$products->appends($append)->links('pagination/simple-bootstrap-4')}}
        </div>
    </div>
</div>
<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Edit Product</h5>
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
                    <form action="{{ route('product.change_name') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group {{ !$errors->has('title') ?: 'has-error' }}">
                        <div class="form-group {{ !$errors->has('file') ?: 'has-error' }}">
                        <input type="hidden" class="form-control" id="productId" name="product_id">
                        {{-- <label class="col-12">Masukkan jumlah kuota yang diinginkan untuk:</label> --}}
                        <div class="form-group">
                            <label id="productName"></label>
                        </div>
                        <div class="form-group">
                            <label for="example-nf-email">New Product Name</label>
                            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Insert New Product Name">
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
