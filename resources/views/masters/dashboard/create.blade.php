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
                <h4>{{ trans('messages.dashboard') }} </h4>
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

			 {!! Form::open(array('route' => 'dashboard.store')) !!}
 

 <?php
    $items = App\Model\Masters\Dashboard::where('record_status','1')->orderBy('id')->pluck('name','default','more_info','icon','query','ordering','background_color');
    $items->prepend('Select', '');

 ?>
                        
						<div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('name', 'has-error') }}">
                            {{ Form::text('name', null, ['class' => 'form-control',(($errors->first('name')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('name',trans('messages.name'),['class' => 'fill-this']) }}
                            </div>
                        </div>

                        <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('icon', 'has-error') }}">
                            {{ Form::text('icon', null, ['class' => 'form-control',(($errors->first('icon')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('icon',trans('messages.icon'),['class' => 'fill-this']) }}
                            </div>
                        </div>

                        <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('background_color	', 'has-error') }}">
                            {{ Form::text('background_color', null, ['class' => 'form-control',(($errors->first('background_color')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('background_color', trans('messages.background color')) }}
                            </div>
                        </div>
						<div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('ordering', 'has-error') }}">
                            {{ Form::text('ordering', null, ['class' => 'form-control',(($errors->first('ordering')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off' ,'onkeypress'=>'return isNumber(event,this)']) }}
                            {{ Form::label('ordering', trans('messages.menu order')) }}
                            </div>
                        </div>
						<div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('more_info', 'has-error') }}">
                            {{ Form::text('more_info', null, ['class' => 'form-control',(($errors->first('more_info')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('more_info', trans('messages.more info'),['class' => 'fill-this']) }}
                            </div>
                        </div>
						<div class="form-group">
						
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('query', 'has-error') }}">
                            {{ Form::textarea('query',null,['class'=>'form-control', 'rows' => 2, 'cols' => 50,(($errors->first('query')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
							{{ Form::label('query', trans('messages.query'),['class' => 'fill-this']) }}
                            </div>
                        </div>
						<div class="form-group">
                           <div class="i-check col-sm-6 col-md-3 col-lg-3">
           <input class="icheckbox_minimal" type="checkbox" id="default1" name="default" onclick="return validate();">
     <input type="hidden" id="default" name="default" value="0">
      {{ Form::label('default', trans('messages.is icon')) }}
                        
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
@push('scripts')
<script>
/*
$('#default').on('change', function() {
*/
function validate()
{
var a;
    if ($("#default1").prop("checked")){
      var  a= "1";
    $('#default').val(this.checked ? "0" : "1");
 var b=$('#default').val();

  
    }else{
       var a= "0";
     $('#default').val(this.checked ? "1" : "0");
  var b=$('#default').val();
 
    }

  }
 function isNumber(evt,element) {
 
 var charCode = (evt.which) ? evt.which : event.keyCode;
 
 /*var len = $(element).val().split(".")[1].length;

if(parseInt(len)>1)
{
	return false;
}*/
  
  
        if (
            //(charCode != 45 || $(element).val().indexOf('-') != -1) &&      // "-" CHECK MINUS, AND ONLY ONE.
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      // "." CHECK DOT, AND ONLY ONE.
            (charCode < 48 || charCode > 57))
            return false;
			
			

        return true;

 
} 
    // });
 
</script>
@endpush