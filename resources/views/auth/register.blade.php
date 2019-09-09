@extends('find.app')

@section('content')
<div id="snippet--flashMessages"></div>
<div class="content header-banner" data-image="{{asset('/public')}}/new_trips_files/02.jpg" style="background-image: url('{{asset('/public')}}/new_trips_files/02.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-holder">
                <h1 class="header">Register</h1>
            </div>
        </div>
    </div>
</div>
<div class="content find-buddy">
    <div class="container">
        <div class="row">
            <div class="cd-tabs is-ended">
                <div class="nav pull-up">
                    <ul class="cd-tabs-navigation">
                        <li><a class="selected" data-content="tab01" href="{{ url('/register') }}/">register</a></li>
                        <li><a data-content="tab01" href="{{ url('/login') }}/">login</a></li>
                        <</li>
                    </ul>
                </div>

                <div class="cd-tabs-content" style="height: auto;">

<div class="cd-item selected" data-content="tab01">

    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>

</div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
