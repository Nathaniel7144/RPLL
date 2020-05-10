<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Clinic">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/home.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="{{asset('js/userview.js')}}"></script>
	<script src="{{asset('js/home_factory.js')}}"></script>
	<script src="{{asset('js/util.js')}}"></script>
</head>

<body id="home">
	<header>
		<form id="search" class="search form-control">
			<img id="ic_search" src="/img/ic_search.png"/>
			<input 
				type="text" 
				class="form-control" 
				id="search__box" 
				placeholder="Search" 
				disabled>
		</form>
		<div class="profile">
			<div class="profile__text">
				<p id="user__name"></p>
				<a href="#" id="edit-profile">
					<img id="avatar__ic_edit" src="/img/ic_edit.png">
					Edit Profile
				</a>
			</div>
			<div id="home__avatar" class="avatar">
				<img src="/img/general_male.jpg" id="user__avatar__img">
			</div>
		</div>
		<img src="/img/ic_logout.png" id="ic_logout">
    </header>
    <aside>
        <ul class="nav flex-column" id="menu"></ul>
    </aside>
</body>

</html>