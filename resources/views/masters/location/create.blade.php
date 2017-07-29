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
                <li class="active">Create</li>
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

            </div>
        </div>


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

 {!! Form::open(array('route' => 'location.store')) !!}

                        <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('location_name', 'has-error') }}">
                            {{ Form::text('location_name', null, ['class' => 'form-control',(($errors->first('location_name')?'autofocus':null))]) }}
                            {{ Form::label('location_name', 'Enter Location Name') }}
                            </div>
                        </div>

                        <div class="form-group">
                           <div class="styled-input  col-sm-6 col-md-3 col-lg-3 {{ $errors->first('address', 'has-error') }}">
                            {{ Form::text('address', null, ['class' => 'form-control',(($errors->first('address') ? 'autofocus': null)) ]) }}
                            {{ Form::label('address', 'Enter Address') }}
                            </div>
                        </div>

                        <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('email', 'has-error') }}">
                            {{ Form::text('email', null, ['class' => 'form-control',(($errors->first('email') ? 'autofocus': null)) ]) }}
                            {{ Form::label('email', 'Enter Email Address') }}
                            </div>
                        </div>

                        <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('phone', 'has-error') }}">
                            {{ Form::text('phone', null, ['class' => 'form-control',(($errors->first('phone') ? 'autofocus': null))]) }}
                            {{ Form::label('phone', 'Enter Phone Number') }}
                            </div>
                        </div>

                        <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('prefix', 'has-error') }}">
                            {{ Form::text('prefix', null, ['class' => 'form-control',(($errors->first('prefix') ? 'autofocus': null))]) }}
                            {{ Form::label('prefix', 'Enter Prefix') }}
                            </div>
                        </div>

                        <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('suffix', 'has-error') }}">
                            {{ Form::text('suffix', null, ['class' => 'form-control',(($errors->first('suffix') ? 'autofocus': null)) ]) }}
                            {{ Form::label('suffix', 'Enter Suffix') }}
                            </div>
                        </div>
</div>
<div class="panel-footer">

                        <div class="form-group">
                            {{ Form::button('', ['type' => 'reset', 'class' => 'btn btn-danger hvr-buzz-out fa fa-refresh'])}}

                            {{ Form::button('', ['type' => 'submit', 'class' => 'btn btn-success hvr-buzz-out fa fa-save pull-right','onclick' => 'this.disabled=true;this.form.submit();'])}}
                        </div>
</div>
{!! Form::close() !!}

</div>
</div>
@endsection
