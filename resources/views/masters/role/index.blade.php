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
$delete_role=$roles->delete;
$pdf_role=$roles->pdf;
$csv_role=$roles->csv;
$excel_role=$roles->excel;
$copy_role=$roles->copy;
$print_role=$roles->print;
$view_role=$roles->view;
$search_role=$roles->search;

$role_action_column=5;
$other_columns="0,1,2,3,4";
// End of Roldes Section

?>

            @if(Session::has('message'))
            <script type="text/javascript">            
                $(document).ready(function () {
                    toastr.success('<?= trans('messages.'.Session::get('message')) ?>', '{{ trans('messages.success') }}' ); 
                });
             </script>
            @endif

<div class="row">
<div class="col-sm-12" >
    <div class="panel panel-bd" data-index="0">
        <div class="panel-heading">
            <div class="panel-title" >
                <h4>{{ trans('messages.role') }}  </h4>
            @if($add_role=='1')    
            <a href="{{ url('role/create') }}" class="btn btn-sm btn-primary pull-right hvr-buzz-out fa fa-pencil" style="color: #fff"  onclick="clickAndDisable(this);"></a>
            @endif
            </div>
        </div>
<div class="panel-body">

<div class="table-responsive">
<div id="dataTableExample2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<table id="users-table" class="table table-bordered table-striped table-hover dataTable no-footer" role="grid" style="width: 100%">
        <thead>
            <tr>
                <th>{{ trans('messages.id') }} </th>
                <th>{{ trans('messages.name') }} </th>
                <th>{{ trans('messages.short name') }} </th>
                <th>{{ trans('messages.created at') }}</th>
                <th>{{ trans('messages.updated at') }}</th>
                <th>{{ trans('messages.action') }} </th>
            </tr>
        </thead>
    </table>
</div> 
</div>
</div>
</div>
</div>
</div>

<?php

//Language
    $current_language = url('assets/localization/'.Session::get('locale').'.json');

//Column filter visibility
    $column_visiblity="";
    $column_visiblity_reverse="";
    if($view_role=='1'){
       $column_visiblity .=$other_columns;
        if($edit_role=='1' || $delete_role=='1'){
            $column_visiblity .=",".$role_action_column;       
        }else{
           $column_visiblity_reverse.=",".$role_action_column;        
        }
    }else{
      $column_visiblity_reverse.=$other_columns;       
      $column_visiblity_reverse.=",".$role_action_column;        
    }

//buttons option
    $buttons ="['pageLength'";
    if($copy_role=='1')
    $buttons .=",{ extend: 'copy', title: '".trans('messages.role')."',exportOptions: { columns: ':visible' } }";
    if($csv_role=='1')
    $buttons .=",{ extend: 'csv', title: '".trans('messages.role')."', exportOptions: { columns: ':visible' } }";
    if($excel_role=='1')
    $buttons .=",{ extend: 'excel', title: '".trans('messages.role')."', exportOptions: { columns: ':visible' }}";
    if($pdf_role=='1')
    $buttons .=",{ extend: 'pdf', title: '".trans('messages.role')."' , exportOptions: { columns: ':visible'}}";
    if($print_role=='1')
    $buttons .=",{ extend: 'print', title: '".trans('messages.role')."', exportOptions: { columns: ':visible'}}";
    $buttons .=",{
        extend: 'colvis',
        columns: [".$column_visiblity."]
        }]";        

//search_option
   if($search_role=='0'){
        $searchable="'searching': false";
    }else{
        $searchable="'searching': true";        
    }
    
?>


@endsection

@push('scripts')
<script>
$(document).ready(function(){

$(function() {

   var dt= $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        stateSave: true,
        dom: 'Bfrtip',
        lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]],
        buttons: [<?= $buttons ?>],
        language: {
                url: '{{ $current_language }}'
            },
        ajax: '{!! route('role_data.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'short_name', name: 'short_name' },
		    { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
           <?= ",".$searchable ?> 
    });

    <?php
            echo "dt.columns([".$column_visiblity_reverse."]).visible(false)";
    ?>

});

});

</script>
@endpush