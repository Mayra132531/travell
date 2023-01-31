<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{asset('regis/css/nunito-font.css')}}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('regis/css/style.css')}}">
</head>
<body class="form-v6">
	<div class="page-content">
		<div class="form-v6-content">
			<div class="form-left">
				<img src="regis/images/form-v6.jpg" alt="form">
			</div>
			<form class="form-detail" action="{{ route('register')}}" method="POST">
                @csrf
				<h2>Register Form</h2>
				<div class="form-row">
					<input type="text" name="name" class="input-text" placeholder="Your Name" required="">
				</div>
                <div class="form-row">
					<input type="text" name="username" class="input-text" placeholder="Your Username" required="">
				</div>
				<div class="form-row">
					<input type="text" name="email" class="input-text" required="" placeholder="Email Address">
				</div>

				<div class="form-row">
					<input type="password" name="password" class="input-text" placeholder="Password" required="">
				</div>
				<div class="form-row">
					<input type="password" name="password_confirmation" class="input-text" placeholder="Comfirm Password" required="">
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
                    <input type="hidden" value="User" name="level">
				</div>

                <div class="form-group mt-2 mb-0 row">
                                    <div class="col-12 mt-3 text-center">
                                        <a href="{{ route('login')}}" class="text-muted">Already have account?</a>
                                    </div>
			</form>
		</div>
	</div>
</body>
</html>
