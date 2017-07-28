@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            @if(Session::has('message'))
                <div class="alert alert-success"> {{ Session::get('message') }} </div>
            @endif
            
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>User</td>
                            <td>Email</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td> {!! link_to_route('user.edit', 'Edit', [$user->id], ['class' => 'btn btn-warning', 'data-toggle' => 'modal', 'data-target' => '#myModal']) !!} </td>
                                <td> Delete </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            
            {!! link_to_route('user.create', 'Add New User', null, ['class' => 'btn btn-primary', 'data-toggle' => 'modal', 'data-target' => '#myModal' ]) !!}

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Modal title</h4>

            </div>
            <div class="modal-body"><div class="te"></div></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
        </div>
    </div>
</div>
@endsection
