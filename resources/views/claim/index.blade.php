@extends('layouts.master')

@section('content')
<div class="content">
    <div class="block block-fx-shadow">
        <div class="block-header block-header-default">
            <h3 class="block-title text-uppercase"><b>Claim</b></h3>
            <i class="fa fa-info-circle" data-toggle="popover" title="Claim" data-placement="right" data-content="Berisikan informasi transaksi nasabah yang sudah melakukan klaim atas asuransi mereka."></i>
        </div>
        <div class="block-content block-content-full">
            @include('claim.table')
        </div>
    </div>
</div>
@endsection

