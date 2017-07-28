@extends('layouts.master')

@section('content')

<div class="row">
<div class="col-sm-12" >
    <div class="panel panel-bd" data-index="0">
        <div class="panel-heading">
            <div class="panel-title" >
                <h4>{{ trans('messages.task list') }} </h4>
    
            <a href="task/create" class="btn btn-sm btn-primary pull-right" data-toggle ='modal' onclick="filter()" data-target='#myModal'><i class="glyphicon glyphicon-pencil"></i></a>

            </div>
        </div>
<div class="panel-body">

<div class="table-responsive">
<div id="dataTableExample2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<table id="users-table" class="table table-bordered table-striped table-hover dataTable no-footer" role="grid" style="width: 100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th>User</th>
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




   <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_filter" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Orders</h3>
      </div>

      <div class="modal-body form">
       <form action="#" id="form" class="form-horizontal">
          <div class="form-body">

                 <div class="form-group row">
                <label class="control-label col-md-3">Title</label>
                <div class="col-md-9">
                <input type="text" name="title" class="form-control"/>
              </div>
            </div>

            </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="filterrecords()" class="btn btn-primary">Filter Records</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


@endsection

@push('scripts')
<script>


    function filter()
    {

      $('#modal_filter').modal('show'); // show bootstrap modal
      $('.modal-title').text('Filter Records'); // Set Title to Bootstrap modal title
    }


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
        ajax: '{!! route('tasks.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            { data: 'body', name: 'body' },
            { data: 'user_name', name: 'user_name' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});

});

function filterrecords()
{
  $('#users-table').dataTable().fnDestroy();
   url = "{!! route('tasks.data') !!}?";

   urrl=url+$('#form').serialize();

alert(urrl);

   $('#users-table').DataTable( {
        "ajax": {
            "url": urrl,
            "type": "POST"
        }, 
        dom: 'Bfrtip',
             lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
           buttons: [
                     'pageLength','copy', 'csv', 'excel', 'pdf', 'print','colvis'
                  ],
    } );
}

</script>
@endpush