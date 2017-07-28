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


                    {!! Form::open(['class' => 'form'],array('route' => ['location.update', $location->id] , 'method' => 'PUT')) !!}

                        <div class="form-group">
                           <div class="col-sm-6 col-md-3 col-lg-3">
                            {{ Form::label('location_name', 'Enter Location Name') }}
                            {{ Form::text('location_name', $location->location_name, ['class' => 'form-control']) }}
                          </div>          
                        </div>

                        <div class="form-group">
                           <div class="col-sm-6 col-md-3 col-lg-3">
                            {{ Form::label('address', 'Enter Address') }}
                            {{ Form::text('address', $location->address, ['class' => 'form-control']) }}
                          </div>          
                        </div>

                        <div class="form-group">
                           <div class="col-sm-6 col-md-3 col-lg-3">
                            {{ Form::label('email', 'Enter Email Address') }}
                            {{ Form::text('email', $location->email, ['class' => 'form-control']) }}
                          </div>          
                        </div>

                        <div class="form-group">
                           <div class="col-sm-6 col-md-3 col-lg-3">
                            {{ Form::label('phone', 'Enter Phone Number') }}
                            {{ Form::text('phone', $location->phone, ['class' => 'form-control']) }}
                          </div>          
                        </div>

                        <div class="form-group">
                           <div class="col-sm-6 col-md-3 col-lg-3">
                            {{ Form::label('prefix', 'Enter Prefix') }}
                            {{ Form::text('prefix', $location->prefix, ['class' => 'form-control']) }}
                          </div>          
                        </div>

                        <div class="form-group">
                           <div class="col-sm-6 col-md-3 col-lg-3">
                            {{ Form::label('suffix', 'Enter Suffix') }}
                            {{ Form::text('suffix', $location->suffix, ['class' => 'form-control']) }}
                          </div>          
                        </div>

</div>
<div class="panel-footer">
                        <div class="form-group">
                            {{ Form::button('Close', ['type' => 'button', 'class' => 'btn btn-danger', 'data-dismiss' => 'modal'])}}

                            {{ Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-success pull-right'])}}
                        </div>
                        </div>
                    {!! Form::close() !!}
</div>
</div>
</div>
</div>
@endsection
