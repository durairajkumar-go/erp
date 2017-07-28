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
            
            @if($errors->has())
                <ul class="alert alert-danger ">                
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            @endif


                    {!! Form::open(array('route' => 'location.store')) !!}

                        <div class="form-group">
                            {{ Form::label('location_name', 'Enter Location Name') }}
                            {{ Form::text('location_name', null, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('address', 'Enter Address') }}
                            {{ Form::textarea('address', null, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('email', 'Enter Email Address') }}
                            {{ Form::text('email', null, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('phone', 'Enter Phone Number') }}
                            {{ Form::text('phone', null, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('prefix', 'Enter Prefix') }}
                            {{ Form::text('prefix', null, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('suffix', 'Enter Suffix') }}
                            {{ Form::text('suffix', null, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::button('Close', ['type' => 'button', 'class' => 'btn btn-danger', 'data-dismiss' => 'modal'])}}

                        <div class="pull-right">
                            {{ Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-success'])}}
                        </div>
                        </div>
                    {!! Form::close() !!}
</div>
</div>
</div>
</div>
@endsection
