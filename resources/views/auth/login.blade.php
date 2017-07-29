@extends('layouts.login')

@section('content')



<div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>{{ trans('messages.login') }} </h3>
                                <br>
                                <small><strong>{{ trans('messages.please enter your credentials to login') }}.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="{{ url('/login') }}" id="loginForm" method="post" novalidate>
                         {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="control-label">{{ trans('messages.email') }}</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="{{ trans('messages.email') }}">
                                </div>
                                 @if ($errors->has('email'))
                                    <span class="help-block small">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                 @else   
                                <span class="help-block small">{{ trans('messages.your unique username to app') }}</span>
                                @endif

                            </div>
                            <div class="form-group">
                                <label class="control-label">{{ trans('messages.password') }}</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input id="pass" type="password" class="form-control" name="password" placeholder="******">
                                </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @else    
                                    <span class="help-block small">{{ trans('messages.your password to app') }}</span>
                                    @endif

                            </div>
                            <div>
                                <button class="btn btn-primary pull-right">{{ trans('messages.login') }}</button>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">{{ trans('messages.keep me signed in') }}</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="bottom_text">
                    {{ trans('messages.dont have an account') }}? <a href="{{ url('/register') }}">{{ trans('messages.sign up') }}</a><br>
                    {{ trans('messages.remind') }} <a href="{{ url('/password/reset') }}">{{ trans('messages.password') }}</a>
                </div>

@endsection
