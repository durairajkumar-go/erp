@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
       
          @foreach($tasks as $task)  
            <div class="panel panel-primary">
                <div class="panel-heading">{{ $task->title }}</div>

                <div class="panel-body">
                    {{ $task->body }}
                </div>
            </div>
           @endforeach   
        </div>
    </div>
</div>
@endsection
