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
  header("vehicle:".url('/logout'));
  exit();
}

?>

<div class="row">
<div class="col-sm-12" >
    <div class="panel panel-bd" data-index="0">
        <div class="panel-heading">
            <div class="panel-title" >
                <h4>{{ trans('messages.vehicle') }} </h4>
                  <span class="mandatory">
                      &nbsp; * {{ trans('messages.mandatory') }} 
                  </span>                                        
            <a href="{{ $back_url }}" class="btn btn-warning btn-sm hvr-buzz-out fa fa-backward pull-right" style="color: #ffffff" onclick="clickAndDisable(this);"></a>
            @if($add_role=='1')    
              <a href="{{ url('vehicle/create') }}" class="btn btn-sm btn-primary pull-right hvr-buzz-out fa fa-pencil" style="color: #fff"  onclick="clickAndDisable(this);"></a>
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

{!! Form::open(array('route' => ['vehicle.update', $data->id] , 'method' => 'PUT'),['class' => 'form']) !!}

 <?php
 //to get location names for select option
    $items = App\Model\Masters\Location::where('record_status','1')->orderBy('name')->pluck('name', 'id');
    $items->prepend('Select', '');
	
	//to get Routes names for select option	
	$routes_date = App\Model\Masters\Routes::where('record_status','1')->orderBy('name')->pluck('name', 'id');
    $routes_date->prepend('Select', '');
	
	
	if($data->service_date == '0000-00-00')
	{
		$maintenance_date = '';
	}
	else
	{
		$maintenance_date = date('d-m-Y',strtotime($data->service_date));
	}
	
	
	if($data->inspection_date == '0000-00-00')
	{
		$inspection_date = '';
	}
	else
	{
		$inspection_date = date('d-m-Y',strtotime($data->inspection_date));
	}
 ?>

                        <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('parent_id', 'has-error') }}">

                            {!! Form::select('parent_id', $items, $data->parent_id , ['class' => 'form-control drop-select',(($errors->first('parent_id')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) !!}
                            {{ Form::label('parent_id', trans('messages.location'),['class' => 'fill-this']) }}
                            </div>
                        </div>

                        <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('registration_number', 'has-error') }}">
                            {{ Form::text('registration_number', $data->registration_number, ['class' => 'form-control',(($errors->first('registration_number')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('name',trans('messages.registration_number'),['class' => 'fill-this']) }}
                            </div>
                        </div>
                        
                        <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('chassis_number', 'has-error') }}">
                            {{ Form::text('chassis_number', $data->chassis_number, ['class' => 'form-control',(($errors->first('chassis_number')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('name',trans('messages.chassis_number')) }}
                            </div>
                        </div>
                        
                        <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('insurance', 'has-error') }}">
                            {{ Form::text('insurance', $data->insurance, ['class' => 'form-control',(($errors->first('insurance')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('name',trans('messages.insurance_company')) }}
                            </div>
                        </div>
                        
                         <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('policy_amt', 'has-error') }}">
                            {{ Form::text('policy_amt', $data->policy_amt, ['class' => 'form-control',(($errors->first('policy_amt')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off','onkeypress'=>'return isNumber(event,this)']) }}
                            {{ Form::label('name',trans('messages.policy_amt')) }}
                            </div>
                        </div>
                        
                        <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('policy_expiry', 'has-error') }}">
                            {{ Form::text('policy_expiry', $data->policy_expiry, ['class' => 'form-control',(($errors->first('policy_expiry')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('name',trans('messages.policy_expiry')) }}
                            </div>
                        </div>
                        
                         <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('route_id', 'has-error') }}">
                            {!! Form::select('route_id', $routes_date , $data->route_id, ['class' => 'form-control drop-select',(($errors->first('route_id')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) !!}
                            {{ Form::label('parent_id', trans('messages.route'),['class' => 'fill-this']) }}
                            </div>
                        </div>
                        
                        <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('service_date', 'has-error') }}">
                            {{ Form::text('service_date', $maintenance_date, ['class' => 'form-control get_date',(($errors->first('service_date')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off','readonly']) }}
                            {{ Form::label('name',trans('messages.maintenance_date')) }}
                            </div>
                        </div>
                        
                        <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('inspection_date', 'has-error') }}">
                            {{ Form::text('inspection_date', $inspection_date, ['class' => 'form-control get_date',(($errors->first('inspection_date')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off','readonly']) }}
                            {{ Form::label('name',trans('messages.inspection_date'),['class' => 'fill-this']) }}
                            </div>
                        </div>
                        
                        <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('capacity', 'has-error') }}">
                            {{ Form::text('capacity', $data->capacity, ['class' => 'form-control',(($errors->first('capacity')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off', 'onkeypress'=>'return isNumber(event,this)']) }}
                            {{ Form::label('name',trans('messages.capacity'),['class' => 'fill-this']) }}
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

@push('scripts')
<script>
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

</script>
@endpush
