@extends('layouts.master')

@section('breadcrumb')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="header-icon">
        </div>
        <div class="header-title">
            <h1>&nbsp;</h1>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Masters</a></li>
                <li><a href="{{ url('location') }}" onclick="clickAndDisable(this);">Location</a></li>
                <li class="active">Edit</li>
            </ol>
        </div>
    </div> <!-- /. Content Header (Page header) -->
@endsection

@section('content')

<div class="row">
<div class="col-sm-12" >
    <div class="panel panel-bd" data-index="0">
        <div class="panel-heading">
            <div class="panel-title" >
                <h4>{{ trans('messages.location') }} </h4>
              
                <a href="{{ url()->previous() }}" class="btn btn-warning btn-sm hvr-buzz-out fa fa-backward pull-right" style="color: #ffffff" onclick="clickAndDisable(this);"></a>
    
            <a href="{{ url('location/create') }}" class="btn btn-sm btn-primary pull-right hvr-buzz-out fa fa-pencil" style="color: #fff"  onclick="clickAndDisable(this);"></a>


            </div>
        </div>

{!! Form::open(array('route' => ['location.update', $location->id] , 'method' => 'PUT'),['class' => 'form']) !!}

<div class="panel-body">
            
            @if($errors->has())
                    @foreach($errors->all() as $error)
                        <script type="text/javascript">            
                            $(document).ready(function () {
                                toastr.error( '{{ $error }}', 'Error'); 
                            });
                        </script>
                    @endforeach
            @endif
                        <div class="form-group">
                           <div class="col-sm-6 col-md-3 col-lg-3">
                            {{ Form::label('location_name', 'Enter Location Name') }}
                            {{ Form::text('location_name', $location->location_name, ['class' => 'form-control','autofocus'=>'autofocus']) }}
                          </div>          
                        </div>

                        <div class="form-group">
                           <div class="col-sm-6 col-md-3 col-lg-3">
                            {{ Form::label('address', 'Enter Address') }}
                            {{ Form::text('address', $location->address, ['class' => 'form-control']) }}
                          </div>          
                        </div>

                        <div class="form-group">
                           <div class="col-sm-6 col-md-3 col-lg-3">
                            {{ Form::label('email', 'Enter Email Address') }}
                            {{ Form::text('email', $location->email, ['class' => 'form-control']) }}
                          </div>          
                        </div>

                        <div class="form-group">
                           <div class="col-sm-6 col-md-3 col-lg-3">
                            {{ Form::label('phone', 'Enter Phone Number') }}
                            {{ Form::text('phone', $location->phone, ['class' => 'form-control']) }}
                          </div>          
                        </div>

                        <div class="form-group">
                           <div class="col-sm-6 col-md-3 col-lg-3">
                            {{ Form::label('prefix', 'Enter Prefix') }}
                            {{ Form::text('prefix', $location->prefix, ['class' => 'form-control']) }}
                          </div>          
                        </div>

                        <div class="form-group">
                           <div class="col-sm-6 col-md-3 col-lg-3">
                            {{ Form::label('suffix', 'Enter Suffix') }}
                            {{ Form::text('suffix', $location->suffix, ['class' => 'form-control']) }}
                          </div>          
                        </div>

</div>
<div class="panel-footer">
                        <div class="form-group">
                            {{ Form::button('', ['type' => 'reset', 'class' => 'btn btn-danger hvr-buzz-out fa fa-refresh'])}}

                            {{ Form::button('', ['type' => 'submit', 'class' => 'btn btn-success hvr-buzz-out fa fa-save pull-right', 'onclick' => 'this.disabled=true;this.form.submit();' ])}}
                        </div>
</div>
{!! Form::close() !!}
</div>
</div>
</div>
@endsection
