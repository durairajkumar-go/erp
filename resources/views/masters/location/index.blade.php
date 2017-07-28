@extends('layouts.master')

@section('content')

<div class="row">
<div class="col-sm-12" >
    <div class="panel panel-bd" data-index="0">
        <div class="panel-heading">
            <div class="panel-title" >
                <h4>{{ trans('messages.location') }} </h4>
    
            <a href="location/create" class="btn btn-sm btn-primary pull-right" ><i class="glyphicon glyphicon-pencil"></i></a>

            </div>
        </div>
<div class="panel-body">

<div class="table-responsive">
<div id="dataTableExample2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<table id="users-table" class="table table-bordered table-striped table-hover dataTable no-footer" role="grid" style="width: 100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Location Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>{{ trans('messages.created at') }}</th>
                <th>{{ trans('messages.updated at') }}</th>
                <th>Action</th>
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

@push('scripts')
<script>


$(document).ready(function(){

$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        dom: 'Bfrtip',
        lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]],
        buttons: ['pageLength','copy', 'csv', 'excel', 'pdf', 'print'],
        ajax: '{!! route('location_data.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'location_name', name: 'location_name' },
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