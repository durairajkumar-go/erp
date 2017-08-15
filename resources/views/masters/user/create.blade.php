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
  header("currency:".url('/logout'));
  exit();
}

?>


<div class="row">
<div class="col-sm-12" >
    <div class="panel panel-bd" data-index="0">
        <div class="panel-heading">
            <div class="panel-title" >
                <h4>{{ trans('messages.employee') }} </h4>
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

 {!! Form::open(array('route' =>  'user.store')) !!}

 <?php
    $items = App\User::where('record_status','1')->orderBy('id')->pluck('name', 'email','username');
    $items->prepend('Select', '');
	$status= ['no','yes'];
	$shift_access= ['InActive','Active'];
     // $status = implode('', $status1);
	
  
 ?>
                       <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('name', 'has-error') }}">
                            {{ Form::text('name', null, ['class' => 'form-control',(($errors->first('name')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('name',trans('messages.name'),['class' => 'fill-this']) }}
                            </div>
                        </div> 

                        <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('username', 'has-error') }}">
                            {{ Form::text('username', null, ['class' => 'form-control',(($errors->first('username')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('username',trans('messages.username'),['class' => 'fill-this']) }}
                            </div>
                        </div>
						
						<div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('email', 'has-error') }}">
                            {{ Form::text('email', null, ['class' => 'form-control',(($errors->first('email')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('email', trans('messages.email'),['class' => 'fill-this']) }}
                            </div>
                        </div>
                   

                        <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('password', 'has-error') }}">
                            {{ Form::text('password', null, ['class' => 'form-control',(($errors->first('password')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('password', trans('messages.password'),['class' => 'fill-this']) }}
                            </div>
                        </div>
						<div class="form-group">
                           <div class="styled-input col-sm-1 col-md-1 col-lg-1 {{ $errors->first('status', 'has-error') }}">
						    {!! Form::select('status', $status) !!}
						  <!--{{ Form::text('status', null, ['class' => 'form-control drop-select',(($errors->first('status')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}-->
                            {{ Form::label('status', trans('messages.status')) }}
                            </div>
                        </div>
                   
					<div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('validity_date', 'has-error') }}">
                            {{ Form::text('validity_date', null, ['class' => 'form-control get_date',(($errors->first('validity_date')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off','readonly']) }}
                            {{ Form::label('name',trans('messages.validity')) }}
                            </div>
                        </div>
						<div class="form-group">
                           <div class="styled-input col-sm-1 col-md-1 col-lg-1 {{ $errors->first('shift_access', 'has-error') }}">
						   {!! Form::select('shift_access', $shift_access) !!}
						   <!--{{ Form::text('shift_access', null, ['class' => 'form-control',(($errors->first('shift_access')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}-->
                            {{ Form::label('shift_access', trans('messages.shiftaccess')) }}
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
	//alert(a);
		
		
    }else{
       var a= "0";
	    $('#default').val(this.checked ? "1" : "0");
		var b=$('#default').val();
		//alert(b);
		
    }

  }
  
    // });
	
</script>
@endpush
