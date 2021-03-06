@extends('layouts.master')

@section('content')

<?php
//Roles Section
$main_uri="";
    $array_uri = explode("/", Route::getFacadeRoot()->current()->uri(), 2);
    if(isset($array_uri[0])){
         $main_uri = $array_uri[0];
    }
  $back_url=url($main_uri);

$main_uri_id = \App\Menu::select('id')->where('slug',$main_uri)->first();
$roles = \App\Model\Masters\RoleMenuMapping::where('parent_id',Auth::user()->role_id)->where('menu_id',$main_uri_id->id)->first();

if($roles==null){
    header("location:".url('/logout'));
    exit(); 
}

$add_role=$roles->add;
$edit_role=$roles->edit;

if($edit_role=='0'){
  header("location:".url('/logout'));
  exit();
}

?>


<div class="row">
<div class="col-sm-12" >
    <div class="panel panel-bd" data-index="0">
        <div class="panel-heading">
            <div class="panel-title" >
                <h4>{{ trans('messages.store') }} </h4>
                  <span class="mandatory">
                      &nbsp; * {{ trans('messages.mandatory') }} 
                  </span>                                        
            <a href="{{ $back_url }}" class="btn btn-warning btn-sm hvr-buzz-out fa fa-backward pull-right" style="color: #ffffff" onclick="clickAndDisable(this);"></a>
            @if($add_role=='1')    
              <a href="{{ url('store/create') }}" class="btn btn-sm btn-primary pull-right hvr-buzz-out fa fa-pencil" style="color: #fff"  onclick="clickAndDisable(this);"></a>
             @endif 

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

{!! Form::open(array('route' => ['store.update', $data->id] , 'method' => 'PUT'),['class' => 'form']) !!}

 <?php
    $items = App\Model\Masters\Location::where('record_status','1')->orderBy('name')->pluck('name', 'id');
    $items->prepend('Select', '');
 ?>

                        <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('parent_id', 'has-error') }}">

                            {!! Form::select('parent_id', $items, $data->parent_id , ['class' => 'form-control drop-select',(($errors->first('parent_id')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) !!}
                            {{ Form::label('parent_id', trans('messages.location'),['class' => 'fill-this']) }}
                            </div>
                        </div>

                        <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('name', 'has-error') }}">
                            {{ Form::text('name', $data->name, ['class' => 'form-control',(($errors->first('name')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('name',trans('messages.store'),['class' => 'fill-this']) }}
                            </div>
                        </div>

                        <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('short_name', 'has-error') }}">
                            {{ Form::text('short_name', $data->short_name, ['class' => 'form-control',(($errors->first('short_name')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('short_name', trans('messages.short name'),['class' => 'fill-this']) }}
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
