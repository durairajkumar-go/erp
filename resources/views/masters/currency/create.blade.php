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
                <h4>{{ trans('messages.currency') }} </h4>
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

 {!! Form::open(array('route' =>  'currency.store')) !!}

 <?php
    $items = App\Model\Masters\Currency::where('record_status','1')->orderBy('id')->pluck('name','exchange_rate','symbol','ledger','default');
    $items->prepend('Select', '');

 ?>
                       <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('name', 'has-error') }}">
                            {{ Form::text('name', null, ['class' => 'form-control',(($errors->first('name')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('name',trans('messages.currency'),['class' => 'fill-this']) }}
                            </div>
                        </div> 

                        <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('exchange_rate', 'has-error') }}">
                            {{ Form::text('exchange_rate', null, ['class' => 'form-control',(($errors->first('exchange_rate')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off','onkeypress'=>'return isNumber(event,this)']) }}
                            {{ Form::label('exchange_rate',trans('messages.fx_rate'),['class' => 'fill-this']) }}
                            </div>
                        </div>
						
						<div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('symbol', 'has-error') }}">
                            {{ Form::text('symbol', null, ['class' => 'form-control',(($errors->first('symbol')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('symbol', trans('messages.symbol')) }}
                            </div>
                        </div>
                   

                        <div class="form-group">
                           <div class="styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('ledger', 'has-error') }}">
                            {{ Form::text('ledger', null, ['class' => 'form-control',(($errors->first('ledger')) ? 'autofocus': null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('ledger', trans('messages.ledger')) }}
                            </div>
                        </div>
                   
					<div class="form-group">
                           <div class="i-check col-sm-6 col-md-3 col-lg-3 {{ $errors->first('default', 'has-error') }}">
						    <input class="icheckbox_minimal" type="checkbox" id="default1" name="default" onclick="return validate();">
			  <input type="hidden" id="default" name="default" value="0">
			   {{ Form::label('default', trans('messages.default')) }}
                        
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
