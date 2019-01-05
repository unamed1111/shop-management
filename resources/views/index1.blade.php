@extends('layouts.master')

@section('content')

<main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h5 class="mr-0 mr-r-5">Dashboard</h5>
            <p class="mr-0 text-muted hidden-sm-down">statistics, charts, events and reports</p>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="d-inline-flex justify-center align-items-center hidden-sm-down"><a href="javascript: void(0);" class="btn btn-outline-primary mr-l-20 btn-sm btn-rounded hidden-xs hidden-sm ripple" target="_blank">Buy Now</a>
            </div>
        </div>
        <!-- /.page-title-right -->
    </div>
    <!-- /.page-title -->
</main>

@endsection