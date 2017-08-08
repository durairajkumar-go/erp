@extends('layouts.master')

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
