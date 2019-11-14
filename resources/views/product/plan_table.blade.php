<table id="example" class="table table-hover table-responsive table-striped table-vcenter table-bordered">
    <thead>
        <tr>
            <th id="product_name" data-sort="product_name" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Product Name</b>
                <i class="id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="plan_name" data-sort="plan_name" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Plan Name</b>
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
            <th id="premium" data-sort="premium" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Premium</b>
                <i class="partner_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="accident_benefit" data-sort="accident_benefit" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Accident Benefit</b>
                <i class="accident_benefit fa fa-pull-right fa-sort"></i>
            </th>
            <th id="natural_death_benefit" data-sort="natural_death_benefit" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Natural Death Benefit</b>
                <i class="natural_death_benefit fa fa-pull-right fa-sort"></i>
            </th>
            <th id="tpd_benefit" data-sort="tpd_benefit" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>TPD Benefit</b>
                <i class="tpd_benefit fa fa-pull-right fa-sort"></i>
            </th>
            <th id="health_benefit" data-sort="health_benefit" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Health Benefit</b>
                <i class="health_benefit fa fa-pull-right fa-sort"></i>
            </th>
            <th id="duration" data-sort="duration" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Duration</b>
                <i class="status fa fa-pull-right fa-sort"></i>
            </th>
            <th id="sum_assured" data-sort="sum_assured" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Sum Assured</b>
                <i class="customer_id fa fa-pull-right fa-sort"></i>
            </th>
            <th id="action" data-sort="action" data-order="DESC" class="medium-th session-head text-capitalize" style='padding: 2px valign: middle'>
                <b>Actions</b>
                <i class="customer_id fa fa-pull-right fa-sort"></i>
            </th>
        </tr>
    </thead>
    <tbody id="tableAjax">
        {{$productName = ''}}
            @forelse ($plans as $plan)
                <tr>
                    @if($productName != $plan['product_id']['name'])
                    <td>{{$productName = $plan['product_id']['name']}}</td>
                    @else
                    <td></td>
                    @endif
                    <td>{{$plan['name']}}</td>
                    <td>{{$plan['premium']}}</td>
                    <td>{{$plan['accident_benefit']}}</td>
                    <td>{{$plan['natural_death_benefit']}}</td>
                    <td>{{$plan['tpd_benefit']}}</td>
                    <td>{{$plan['health_benefit']}}</td>
                    <td>{{$plan['duration']}}</td>
                    <td>{{$plan['sum_assured']}}</td>
                    <td>
                        <a href="{{route('plan.edit', $plan['id'])}}"><button class='btn btn-alt-primary'>Edit</button></a>
                        <a onclick="confirmation('plan/delete/{{$plan['id']}}')"><button class='btn btn-alt-danger'>Delete</button></a>
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
            {{$plans->appends($append)->links('pagination/simple-bootstrap-4')}}
        </div>
    </div>
</div>
