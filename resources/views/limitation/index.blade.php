@extends('layouts.master')

@section('content')
<div class="content">
    <div class="block block-fx-shadow">
        <div class="block-header block-header-default bg-primary-lighter">
            <h3 class="block-title text-uppercase">Manage Limitation</h3>
        </div>
        <div class="block-content block-content-full">
            @include('limitation.table')
        </div>
    </div>
</div>
@endsection

