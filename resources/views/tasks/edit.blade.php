@extends('layouts.modal')

@section('content')
                    Our Form

            @if($errors->has())
                <ul class="alert alert-danger ">                
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            @endif

                    {!! Form::open(array('route' => ['task.update', $task->id] , 'method' => 'PUT')) !!}

                        <div class="form-group">
                            {{ Form::label('title', 'Enter Title') }}
                            {{ Form::text('title', $task->title , ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('body', 'Enter Body') }}
                            {{ Form::textarea('body', $task->body , ['class' => 'form-control']) }}
                        </div>


                        <div class="form-group">
                            {{ Form::label('user_id', 'Select User') }}
                            <?php $users = \App\User::pluck('name', 'id');
                                  $users->prepend('Please Select',0);
                             ?>
                            {{ Form::select('user_id', $users, $task->user->id , ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::button('Close', ['type' => 'button', 'class' => 'btn btn-danger', 'data-dismiss' => 'modal'])}}

                        <div class="pull-right">
                            {{ Form::button('Update', ['type' => 'submit', 'class' => 'btn btn-success'])}}
                        </div>

                        </div>


                    {!! Form::close() !!}
            

@endsection
