<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Estore Admin's Page | Login</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  	<!-- Ionicons -->
  	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  	<!-- icheck bootstrap -->
  	<link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  	<!-- Theme style -->
 	<link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  	<!-- Google Font: Source Sans Pro -->
 	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
  		<div class="login-logo">
    		<a href="#"><b>Estore</b>Admin</a>
  		</div>
  		<div class="card">
    		<div class="card-body login-card-body">
      			<p class="login-box-msg">Please sign in to start your session</p>

      				<form action="/admin/login/process" method="post">
      					@csrf
        				<div class="input-group mb-3">
          					<input type="text" class="form-control" placeholder="Username" name="username" autofocus>
          					@if($errors->has('username'))
                        	<span class="invalid-feedback" role="alert">
                            	<strong>{{ $errors->first('username') }}</strong>
                        	</span>
                        	@endif
          						<div class="input-group-append">
            						<div class="input-group-text">
              							<span class="fas fa-user"></span>
            						</div>
          						</div>
        				</div>
        				<div class="input-group mb-3">
          					<input type="password" class="form-control" placeholder="Password" name="password">
          					@if($errors->has('password'))
                        	<span class="invalid-feedback" role="alert">
                            	<strong>{{ $errors->first('password') }}</strong>
                        	</span>
                        	@endif
          					<div class="input-group-append">
            					<div class="input-group-text">
              						<span class="fas fa-lock"></span>
            					</div>
          					</div>
        				</div>
        				<div class="row">
          					<div class="col-8">
            					<div class="icheck-primary">
              						<input type="checkbox" id="remember">
              							<label for="remember">
                							Remember Me
              							</label>
            					</div>
          					</div>
			          <div class="col-4">
            				<button type="submit" class="btn btn-primary btn-block">Sign In</button>
          			</div>
        		</div>
        	</form>
        </div>


      <p class="mb-1">
        <a href="{{ route('password.request') }}">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="/admin/register" class="text-center">Register an admin account</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>

		
</body>
</html>