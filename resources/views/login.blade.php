<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="author" content="Clinic">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/login.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="{{asset('js/userview.js')}}"></script>
	<script src="{{asset('js/login.js')}}"></script>
	<script src="{{asset('js/apicall/api_login.js')}}"></script>
</head>

<body id="login">
	<div id="login__content" class="card">
		<div id="login__avatar" class="avatar">
			<img src="/img/general_male.jpg" id="user__avatar__img">
		</div>
		<div id="login__exp">
			<h5 class="welcome display-4">Welcome</h5>
			<p id="user__name"></p>
			<form method="get">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<img src="/img/ic_email.png" id="login__ic" width="19px" height="19px">
						</span>
					</div>
					<input 
						type="email" 
						class="form-control" 
						placeholder="Email" 
						id="login__input" 
						name="email"
						required
					>
				</div>
				<br>
				<input id="login__submit" type="submit" class="form-control" value="Login">
			</form>
		</div>
	</div>
</body>

</html>