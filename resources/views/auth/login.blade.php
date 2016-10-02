@extends('layouts.master')
 
@section('content')
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">
            <div class="panel-heading"><h3>Login to CornerStone</h3></div>
                <div class="panel-body">      
                <form class="form-vertical" id="login" role="form" method="post" action="{{ route('auth.login') }}">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <!--<label for="email" class="control-label">Email</label>-->
                        <input type="text" name="name" class="form-control" id="name" placeholder="name">
                        @if ($errors->has('name'))
                            <span class="help-block">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <!--<label for="password" class="control-label">Password</label>-->
                        <input type="password" name="password" class="form-control" id="password" placeholder="password">
                        @if ($errors->has('password'))
                            <span class="help-block">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>
        </div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	</div>
</div>
@stop