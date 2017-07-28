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
@endsection
