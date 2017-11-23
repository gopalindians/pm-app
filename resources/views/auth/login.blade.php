@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    @if (session('info'))
                        <div class="alert alert-info  alert-dismissible" role="alert">
                            <button type="button" class="close"
                                    data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            {{ session('info') }}
                        </div>
                    @endif
                    <div class="panel-heading">Login</div>


                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">

                                    @if(Request::get('key')  || Request::get('from'))
                                        @php
                                            try{
                                                list($encSender,$encReceiver)= explode('.',Request::get('key'));
                                                $sender=Crypt::decryptString($encSender);
                                                $receiver=Crypt::decryptString($encReceiver);
                                                $from=Request::get('from');
                                            }catch (Exception $e){

                                            }
                                        @endphp
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ $receiver?? old('email') }}" required autofocus>

                                        <input type="hidden" name="sender"
                                               value="{{ $sender??old('sender') }}" required>

                                        <input type="hidden" name="receiver"
                                               value="{{ $receiver??old('receiver') }}" required>

                                        <input type="hidden" name="from"
                                               value="{{ $from??old('from') }}" required>


                                    @else
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}" required autofocus>
                                    @endif

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"
                                                   name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
