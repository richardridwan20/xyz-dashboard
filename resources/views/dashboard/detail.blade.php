@extends('layouts.master')

@section('content')

    <div class="content">
        <a class="btn btn-alt-info back-btn" href="{{url()->previous()}}">Back to Dashboard</a>
        <div class="block block-fx-shadow">

            @include('dashboard.transaction-detail')

        </div>
    </div>

@endsection
