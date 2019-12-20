<!-- Hero -->
<div class="bg-gray-lighter">
    <div class="content text-center" style="padding: 50px;">
        <h1 class="h2 font-w700 mb-10">
            {{ $partnerData['name'] }}
        </h1>
        <h2 class="h5">
            {{ $partnerData['company_name'] }}
        </h2>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">

    <!-- Addresses -->
    <h2 class="content-heading">Partner Basic Information</h2>
    <div class="row row-deck gutters-tiny">
        <!-- Billing Address -->
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Basic Info</h3>
                    <a style="cursor: pointer" data-toggle="modal" data-target="#updatePartnerModal" data-name="{{ $partnerData['name'] }}" data-caddress="{{ $partnerData['company_address'] }}" data-cname="{{ $partnerData['company_name'] }}" data-email="{{ $partnerData['email'] }}" data-id="{{ $partnerData['id'] }}"><i class="si si-lg si-pencil"></i></a>
                </div>
                <div class="block-content">
                    <div class="font-size-lg text-black mb-5">{{ $partnerData['name'] }}</div>
                    <address>
                        {{ $partnerData['company_name'] }}<br>
                        {{ $partnerData['company_address'] }}<br>
                        <br>
                        <i class="fa fa-envelope-o mr-5"></i>{{ $partnerData['email'] }}
                    </address>
                </div>
            </div>
        </div>
        <!-- END Billing Address -->
    </div>
    <!-- END Addresses -->

    <!-- Cart -->
    <div class="content-heading">
        Product of Partners
         <button class="btn btn-sm btn-rounded btn-alt-primary pull-right" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add New Product of Partner</button>
    </div>
    <div class="block block-rounded">
        <div class="block-content">
            @include('partner.table-productofpartner')
        </div>
    </div>
    <!-- END Cart -->

    <!-- Limitation -->
    <div class="content-heading">
            Limitation
            <button class="btn btn-sm btn-rounded btn-alt-primary pull-right" data-toggle="modal" data-target="#addLimitationModal"><i class="fa fa-plus"></i> Add New Limitation</button>
        </div>
    <div class="block block-rounded">
        <div class="block-content">
            @include('partner.table-limitation')
        </div>
    </div>
    <!-- END Limitation -->
</div>
<!-- END Page Content -->

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block">
                <div class="block-header block-header-default">
                    <h5 class="block-title" id="uploadModalLabel"><b>Add New Product of Partner</b></h5>
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
                    <form action="{{ route('productofpartner.create') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <select type="dropdown" class="form-control" id="plan_id" name="plan_id">
                                <option disabled selected>Select Product</option>
                                @for($i=0;$i<count($plan->bodyResponse['data']);$i++)
                                    <option value="{{$plan->bodyResponse['data'][$i]['id']}}">{{$plan->bodyResponse['data'][$i]['product_id']['name']}} {{$plan->bodyResponse['data'][$i]['name']}} {{$plan->bodyResponse['data'][$i]['duration']}}</option>
                                @endfor
                            </select>

                            @error('name')
                                <p style="color:red">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <select type="dropdown" class="form-control" id="partner_id" name="partner_id">
                                <option disabled selected>Select Partner</option>
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
                        <div class="form-group">
                                <label for="example-nf-email">Masukkan Kuota Produk</label>
                                <input type="text" class="form-control" id="quota" name="quota" placeholder="Masukkan Kuota Produk yang dapat dibeli oleh nasabah...">
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
</div>

<div class="modal fade" id="addLimitationModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block">
                <div class="block-header block-header-default">
                    <h5 class="block-title" id="uploadModalLabel"><b>Add New Limitation</b></h5>
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
                    <form action="{{ route('limitation.create-modal') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="select_product">Pilih Produk dan Partner</label>
                            <select class="form-control" name="select_product" id="select_product">
                                @foreach ($productOfPartners as $productOfPartner)
                                    <option value="{{ $productOfPartner['id'] }}">{{ $productOfPartner['partner_id']['name'] }} | {{ $productOfPartner['plan_id']['name'] }} | {{ $productOfPartner['plan_id']['duration'] }}</option>
                                @endforeach
                            </select>
                            @error('select_product')
                                <p style="color:red">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="limitation">Pilih Area Limitasi</label>
                            <select type="dropdown" class="form-control" name="select_limitation" id="limitation">
                                @foreach ($limitations as $limitation)
                                    <option value="{{ $limitation['id'] }}">{{ $limitation['limit_code'] }} | {{ $limitation['area_name'] }}</option>
                                @endforeach
                            </select>
                            @error('limitation')
                                <p style="color:red">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <input type="submit" value="Submit" class="btn btn-alt-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="updatePartnerModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block">
                <div class="block-header block-header-default">
                    <h5 class="block-title" id="uploadModalLabel"><b>Edit Partner Basic Info</b></h5>
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
                    <form action="{{ route('partner.update') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" id="partnerId" name="id">
                        <div class="form-group">
                            <label for="select_product">Nama Partner</label>
                            <input type="text" class="form-control" id="partnerName" name="partner_name">
                            @error('name')
                                <p style="color:red">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="select_product">Nama Perusahaan</label>
                            <input type="text" class="form-control" id="companyName" name="company_name">
                            @error('company_name')
                                <p style="color:red">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="select_product">Alamat Perusahaan</label>
                            <input type="text" class="form-control" id="companyAddress" name="company_address">
                            @error('company_name')
                                <p style="color:red">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="select_product">Email Perusahaan</label>
                            <input type="text" class="form-control" id="email" name="email">
                            @error('company_name')
                                <p style="color:red">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <input type="submit" value="Submit" class="btn btn-alt-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Change Quota</h5>
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
                <form action="{{ route('productofpartner.change-quota') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" class="form-control" id="ppId" name="ppId">
                    <div class="form-group">
                        <label for="example-nf-email">Masukkan Kuota</label>
                        <input type="text" class="form-control" id="quota" name="quota" placeholder="Masukkan Kuota Produk yang bisa dibeli oleh nasabah...">
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
