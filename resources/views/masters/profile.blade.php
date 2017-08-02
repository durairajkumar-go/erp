@extends('layouts.master')

@section('breadcrumb')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="header-icon">
        </div>
        <div class="header-title">
            <h1>&nbsp;</h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/dashboard') }}"><i class="pe-7s-home"></i> {{ trans('messages.home') }} </a></li>
                <li class="active">{{ trans('messages.profile') }} </li>
            </ol>
        </div>
    </div> <!-- /. Content Header (Page header) -->
@endsection

@section('content')
<br>
<div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-header-menu">
                                            <i class="fa fa-bars"></i>
                                        </div>
                                        <div class="card-header-headshot"></div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-content-member">
                                            <h4 class="m-t-0"> {{ Auth::user()->name }} </h4>
                                            <p class="m-0"><i class="pe-7s-role"></i> Role : {{ Auth::user()->role->name }}</p>
                                        </div>
                                        
                                    </div>
                                    
                            </div>
            </div>


@endsection
