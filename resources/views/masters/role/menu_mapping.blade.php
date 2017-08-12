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
                <h4>{{ trans('messages.role menu mapping') }} </h4>
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

{!! Form::open(array('route' => ['role.update', $data->id] , 'method' => 'PUT'),['class' => 'form']) !!}

 

                        <!--  <div class="form-group">
                           <div class=" styled-input col-sm-6 col-md-3 col-lg-3 {{ $errors->first('name', 'has-error') }}">
                           <div><h4><strong>{{ trans('messages.role name') }} : </strong></h4><h4>{{ $data->name }}  </h4></div>
                          
                            {{ Form::text('name', $data->name, ['class' => 'form-control',(($errors->first('name')) || empty($erros)?'autofocus':null),'onfocus'=>'this.value = this.value','autocomplete' => 'off']) }}
                            {{ Form::label('name',trans('messages.role name')) }}
                            </div>
                        </div> -->

               <!-- <div class="checkbox">   
                <input type="checkbox" id="select_checkbox"><label for="select_checkbox">  Check</label>      
                 
                 </div>-->
                        
                  
  
                        
                        
                        <div id="treeview-container">
            <ul>
                <li>Item 1</li>
                <li>Item 2
                    <ul>
                        <li>Item 2.1</li>
                        <li>Item 2.2
                            <ul>
                                <li data-value="2.2.1">Item 2.2.1</li>
                                <li data-value="2.2.2">Item 2.2.2</li>
                                <li data-value="2.2.3">Item 2.2.3</li>
                            </ul>
                        </li>
                        <li>Item 2.3</li>
                    </ul>
                </li>
                <li>Item 3
                    <ul>
                        <li data-value="3.1">Item 3.1</li>
                        <li data-value="3.2">Item 3.2</li>
                    </ul>
                </li>
            </ul>
        </div>
         <button type="button" id="show-values">Get Values</button>
        <pre id="values"></pre>
                        
                       
                       

                 

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

            $('#treeview-container').treeview({
                debug : true,
                data : ['3.2', '2.2.3']
            });
           /* $('#show-values').on('click', function(){ 
                $('#values').text(
                    $('#treeview-container').treeview('selectedValues')
                );
            });*/
        



</script>
@endpush
