@extends('layouts.master')

@section('content')

<div class="content">
                    <div class="row">
                        <!-- Row #1 -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-fx-shadow text-left" href="javascript:void(0)">
                                <div class="block-content block-content-full text-right clearfix">
                                    <div class="float-left mt-10">
                                        <i class="si si-heart fa-3x text-gray"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-primary-light">18,490</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Likes</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-fx-shadow text-left" href="javascript:void(0)">
                                <div class="block-content block-content-full text-right clearfix">
                                    <div class="float-left mt-10">
                                        <i class="si si-users fa-3x text-gray"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-primary-light">4,210</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Partner</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-fx-shadow text-left" href="javascript:void(0)">
                                <div class="block-content block-content-full text-right clearfix">
                                    <div class="float-left mt-10">
                                        <i class="si si-bag fa-3x text-gray"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-primary-light">350</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-fx-shadow text-left" href="javascript:void(0)">
                                <div class="block-content block-content-full text-right clearfix">
                                    <div class="float-left mt-10">
                                        <i class="si si-wallet fa-3x text-gray"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-primary-light">$2,970</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #1 -->
                    </div>
                    <div class="block block-fx-shadow">
                        <div class="block-content bg-body-light">
                            <!-- Search -->
                            <form>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search orders..">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-secondary">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END Search -->
                        </div>
                        <div class="block">
                            <div class="block-header block-header-default bg-primary-lighter">
                                <h3 class="block-title text-uppercase">Transaction</h3>
                                <div class="block-options">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <table id="example" class="table table-hover table-striped table-vcenter table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Transaction_Id</th>
                                            <th>
                                                Partner_Name
                                                <i class="user_id fa fa-pull-right fa-sort"></i>
                                            </th>
                                            <th>
                                                PH_Name
                                                <i class="first_name fa fa-pull-right fa-sort"></i>
                                            </th>
                                            <th>
                                                Insured_Name
                                                <i class="last_name fa fa-pull-right fa-sort"></i>
                                            </th>
                                            <th>
                                                Product_Plan
                                                <i class="username fa fa-pull-right fa-sort"></i>
                                            </th>
                                            <th>
                                                Status
                                                <i class="path fa fa-pull-right fa-sort"></i>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @forelse ($transactions as $transaction)
                                            <tr>
                                                {{-- <td>{{$transaction->id}}</td> --}}
                                                {{-- <td>{{$transaction->partner->name}}</td>
                                                <td>{{$transaction->customer->name}}</td>
                                                <td>{{$transaction->insured_name}}</td>
                                                <td>{{$transaction->product->name}}</td>
                                                <td>{{$transaction->payment_status}}</td> --}}
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="10">No data to be shown.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                            <!-- Navigation -->
                            <nav aria-label="Orders navigation">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                            <span aria-hidden="true">
                                                <i class="fa fa-angle-left"></i>
                                            </span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="javascript:void(0)">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">2</a>
                                    </li>
                                    <li class="page-item disabled">
                                        <a class="page-link" href="javascript:void(0)">...</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">8</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">9</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                            <span aria-hidden="true">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- END Navigation -->
                        </div>
                    </div>
                </div>

@endsection
