@extends('layouts.master')

@section('content')

<div class="row">
<div class="col-sm-12" >
    <div class="panel panel-bd" data-index="0">
        <div class="panel-heading">
            <div class="panel-title" >
                <h4>{{ trans('messages.task list') }} </h4>
    
            <a href="task/create" class="btn btn-sm btn-primary pull-right" ><i class="glyphicon glyphicon-pencil"></i></a>

            </div>
        </div>
<div class="panel-body">
            
            @if($errors->has())
                <ul class="alert alert-danger ">                
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            @endif


                    {!! Form::open(array('route' => 'task.store')) !!}

                        <div class="form-group">
                            {{ Form::label('title', 'Enter Title') }}
                            {{ Form::text('title', null, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('body', 'Enter Body') }}
                            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('user_id', 'Select User') }}
                            <?php $users = \App\User::pluck('name', 'id'); 
                                    $users->prepend('Please Select');
                            ?>
                            {{ Form::select('user_id', $users, null, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::button('Close', ['type' => 'button', 'class' => 'btn btn-danger', 'data-dismiss' => 'modal'])}}

                        <div class="pull-right">
                            {{ Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-success'])}}
                        </div>

                    {!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>

@endsection
