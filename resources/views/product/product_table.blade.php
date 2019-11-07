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
