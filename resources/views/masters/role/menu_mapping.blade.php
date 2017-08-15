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
/*echo 'In view<br>';
print_r($design_data);exit;*/


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

<span><strong>Role Name: </strong></span>{{ $data->name }}



 <div id="example-0">
<?php
print_r($design_data);
?>
               
</div>

 
   <!-- <div id="example-0">
       
            
            
     <!--<div class="i-check">
            <ul>
                <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 1</label>
                    <ul>
                        <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 1.1</label>
                            <ul>
                                <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 1.1.1</label>
                            </ul>
                    </ul>
                    <ul>
                        <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 1.2</label>
                            <ul>
                                <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 1.2.1</label>
                                <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 1.2.2</label>
                                <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 1.2.3</label>
                                    <ul>
                                        <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 1.2.3.1</label>
                                        <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 1.2.3.2</label>
                                    </ul>
                                <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 1.2.4</label>
                                <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 1.2.5</label>
                                <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 1.2.6</label>
                            </ul>
                    </ul>
                <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 2</label>
                    <ul>
                        <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 2.1</label>
                            <ul>
                                <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 2.1.1</label>
                            </ul>
                        <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 2.2</label>
                            <ul>
                                <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 2.2.1</label>
                                <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 2.2.2</label>
                                <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 2.2.3</label>
                                    <ul>
                                        <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 2.2.3.1</label>
                                        <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 2.2.3.2</label>
                                    </ul>
                                <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 2.2.4</label>
                                <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 2.2.5</label>
                                <li><input class="icheckbox_minimal" type="checkbox"><label for="select_checkbox">Node 2.2.6</label>
                            </ul>
                    </ul>
            </ul>
        </div>--> 
        
        
   <!--</div>-->
                

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

            /*$('#treeview-container').treeview({
                debug : true,
                data : ['3.2', '2.2.3']
            });*/
           /* $('#show-values').on('click', function(){ 
                $('#values').text(
                    $('#treeview-container').treeview('selectedValues')
                );
            });*/
        


 $(document).ready(function () {
            $("#accordion").accordion({
                'collapsible': true,
                'active': null,
                'heightStyle': 'content'
            });
            $('.jquery').each(function () {
                eval($(this).html());
            });
			
			$('#example-0 div').tree({
            });
			
            $('.button').button();
        });

</script>
@endpush
