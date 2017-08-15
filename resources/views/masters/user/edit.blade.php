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
  header("user:".url('/logout'));
  exit();
}
$status= ['yes','no'];
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
            @if($add_role=='1')    
              <a href="{{ url('user/create') }}" class="btn btn-sm btn-primary pull-right hvr-buzz-out fa fa-pencil" style="color: #fff"  onclick="clickAndDisable(this);"></a>
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

{!! Form::open(array('route' => ['user.update', $data->id] , 'method' => 'PUT'),['class' => 'form']) !!}

 <?php
    $items = App\User::where('record_status','1')->orderBy('id')->pluck('name','email','username','status','shift_access','validity_date');
    $items->prepend('Select', '');
	
	if($data->validity_date == '0000-00-00')
	{
		$maintenance_date = '';
	}
	else
	{
		$maintenance_date = date('d-m-Y',strtotime($data->validity_date));
	}
	 $status1 = $data->status;
	 if($status1 == 'yes')
	 {
	 $status=['yes'];
	 }
	 else
	 {
	 $status=['no'];
	 }
 ?>

                        

                        <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('name', 'has-error') }}">
                            {{ Form::text('name', $data->name, ['class' => 'form-control',(($errors->first('name')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('name',trans('messages.name'),['class' => 'fill-this']) }}
                            </div>
                        </div>

                        <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('username', 'has-error') }}">
                            {{ Form::text('username', $data->username, ['class' => 'form-control',(($errors->first('username')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('fx_rate', trans('messages.username'),['class' => 'fill-this']) }}
                            </div>
                        </div>
						 <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('email', 'has-error') }}">
                            {{ Form::text('email', $data->email, ['class' => 'form-control',(($errors->first('email')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('email', trans('messages.email'),['class' => 'fill-this']) }}
                            </div>
                        </div>
						
						 <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('status', 'has-error') }}">
                      <!-- {{ Form::text('status', $data->status, ['class' => 'form-control',(($errors->first('status')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}-->
					   {!! Form::select('status', $status) !!}
                            {{ Form::label('status', trans('messages.status')) }}
                            
                            </div>
                        </div>
						<div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('validity_date', 'has-error') }}">
                            {{ Form::text('validity_date', $maintenance_date, ['class' => 'form-control get_date',(($errors->first('validity_date')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off','readonly']) }}
                            {{ Form::label('name',trans('messages.validity')) }}
                            </div>
                        </div>
						<div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('shift_access', 'has-error') }}">
                       {{ Form::text('shift_access', $data->shift_access, ['class' => 'form-control',(($errors->first('shift_access')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('shift_access', trans('messages.shiftaccess')) }}
                            
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
/
	
</script>
@endpush
