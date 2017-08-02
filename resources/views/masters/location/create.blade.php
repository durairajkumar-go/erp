@extends('layouts.master')

@section('breadcrumb')

<?php
  $back_url=url('location');
?>

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="header-icon">
        </div>
        <div class="header-title">
            <h1>&nbsp;</h1>
            <ol class="breadcrumb">
                <li><a  href="{{ url('/dashboard') }}"><i class="pe-7s-home"></i> {{ trans('messages.home') }} </a></li>
                <li><a >{{ trans('messages.masters') }} </a></li>
                <li><a href="{{ $back_url }}" onclick="clickAndDisable(this);">{{ trans('messages.location') }} </a></li>
                <li class="active">{{ trans('messages.create') }} </li>
            </ol>
        </div>
    </div> <!-- /. Content Header (Page header) -->
@endsection

@section('content')

<?php
//Roles Section
$array_uri = explode("/", Route::getFacadeRoot()->current()->uri(), 2);
$main_uri = $array_uri[0];
$main_uri_id = \App\Menu::select('id')->where('slug',$main_uri)->first();
$roles = \App\Model\Masters\RoleMenuMapping::where('parent_id',Auth::user()->role_id)->where('menu_id',$main_uri_id->id)->first();

if($roles==null){
    header("location:".url('/logout'));
    exit(); 
}

$add_role=$roles->add;

if($add_role=='0'){
  header("location:".url('/logout'));
  exit();
}

?>


<div class="row">
<div class="col-sm-12" >
    <div class="panel panel-bd" data-index="0">
        <div class="panel-heading">
            <div class="panel-title" >
                <h4>{{ trans('messages.location') }} </h4>
                  <span class="mandatory">
                      &nbsp; * {{ trans('messages.mandatory') }} 
                  </span>                          
    
                <a href="{{ $back_url }}" class="btn btn-warning btn-sm hvr-buzz-out fa fa-backward pull-right" style="color: #ffffff" onclick="clickAndDisable(this);"></a>


            </div>
        </div>


    <div class="panel-body">
            
            @if($errors->has())          
                    @foreach($errors->all() as $error)
                        <script type="text/javascript">            
                            $(document).ready(function () {
                                toastr.error( '{{ $error }}', '{{ trans('messages.error') }}'); 
                            });
                        </script>
                    @endforeach
            @endif

 {!! Form::open(array('route' => 'location.store')) !!}

                        <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('name', 'has-error') }}">
                            {{ Form::text('name', null, ['class' => 'form-control',(($errors->first('name')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('name',trans('messages.location'),['class' => 'fill-this']) }}
                            </div>
                        </div>

                        <div class="form-group">
                           <div class="styled-input  col-sm-6 col-md-3 col-lg-3 {{ $errors->first('address', 'has-error') }}">
                            {{ Form::text('address', null, ['class' => 'form-control',(($errors->first('address')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('address', trans('messages.address')) }}
                            </div>
                        </div>

                        <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('email', 'has-error') }}">
                            {{ Form::text('email', null, ['class' => 'form-control',(($errors->first('email')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('email', trans('messages.email'),['class' => 'fill-this']) }}
                            </div>
                        </div>

                        <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('phone', 'has-error') }}">
                            {{ Form::text('phone', null, ['class' => 'form-control',(($errors->first('phone')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('phone', trans('messages.phone'),['class' => 'fill-this']) }}
                            </div>
                        </div>

                        <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('prefix', 'has-error') }}">
                            {{ Form::text('prefix', null, ['class' => 'form-control',(($errors->first('prefix')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('prefix', trans('messages.prefix')) }}
                            </div>
                        </div>

                        <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('suffix', 'has-error') }}">
                            {{ Form::text('suffix', null, ['class' => 'form-control',(($errors->first('suffix')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('suffix', trans('messages.suffix')) }}
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
