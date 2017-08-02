@extends('layouts.master')

@section('breadcrumb')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="header-icon">
        </div>
        <div class="header-title">
            <h1>&nbsp;</h1>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> {{ trans('messages.home') }} </a></li>
                <li><a href="#">{{ trans('messages.masters') }} </a></li>
                <li class="active">{{ trans('messages.location') }} </li>
            </ol>
        </div>
    </div> <!-- /. Content Header (Page header) -->
@endsection

@section('content')

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
                <h4>{{ trans('messages.location') }}  </h4>
    
            <a href="{{ url('location/create') }}" class="btn btn-sm btn-primary pull-right hvr-buzz-out fa fa-pencil" style="color: #fff"  onclick="clickAndDisable(this);"></a>

            </div>
        </div>
<div class="panel-body">

<div class="table-responsive">
<div id="dataTableExample2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<table id="users-table" class="table table-bordered table-striped table-hover dataTable no-footer" role="grid" style="width: 100%">
        <thead>
            <tr>
                <th>{{ trans('messages.id') }} </th>
                <th>{{ trans('messages.location') }} </th>
                <th>{{ trans('messages.address') }} </th>
                <th>{{ trans('messages.phone') }} </th>
                <th>{{ trans('messages.email') }} </th>
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





@endsection

<?php

    $current_language = url('assets/localization/'.Session::get('locale').'.json');

    $buttons ="['pageLength'";
    $buttons .=",{ extend: 'copy', title: '".trans('messages.location')."',exportOptions: { columns: ':visible' } }";
    $buttons .=",{ extend: 'csv', title: '".trans('messages.location')."', exportOptions: { columns: ':visible' } }";
    $buttons .=",{ extend: 'excel', title: '".trans('messages.location')."', exportOptions: { columns: ':visible' }}";
    $buttons .=",{ extend: 'pdf', title: '".trans('messages.location')."' , exportOptions: { columns: ':visible'}}";
    $buttons .=",{ extend: 'print', title: '".trans('messages.location')."', exportOptions: { columns: ':visible' }}";
    $buttons .=",'colvis']";

    /*    if(Session::get('locale')=="sh"){
            $current_language='//cdn.datatables.net/plug-ins/1.10.15/i18n/Swahili.json';
        }else if(Session::get('locale')=="hi"){
            $current_language='//cdn.datatables.net/plug-ins/1.10.15/i18n/Hindi.json';    
        }
*/
?>

@push('scripts')
<script>
$(document).ready(function(){

$(function() {

    $('#users-table').DataTable({
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
        ajax: '{!! route('location_data.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'address', name: 'address' },
            { data: 'phone', name: 'phone' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
             {data: 'action', name: 'action', orderable: false, searchable: false}
        ]

    });

});

});

</script>
@endpush