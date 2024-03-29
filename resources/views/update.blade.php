<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style>
		html, body {
			background-color: #fff;
			color: #636b6f;
			font-family: 'Raleway', sans-serif;
			font-weight: 100;
			height: 100vh;
			margin-top: 50px;}
	</style>

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm">
			<form method="post" action="{{ action('UserController@updateAction') }}">
				<div class="form-group">
					<label for="exampleInputPassword1">Firstname</label>
					<input type="text" class="form-control" id="exampleInputPassword1" name="name" value="{{ $user->name }}">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">LastName</label>
					<input type="text" class="form-control" id="exampleInputPassword1" name="lastname" value="{{ $user->lastname }}">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">LastName</label>
					<input type="text" class="form-control" id="exampleInputPassword1" name="email" value="{{ $user->email }}">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">LastName</label>
					<input type="number" class="form-control" id="exampleInputPassword1" name="age" value="{{ $user->age }}">
				</div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="id" value="{{ $user->id }}">
				<button type="submit" value="Update" class="btn btn-primary">Submit</button>
				<a class="btn btn-warning" href="{{route('showall')}}">back</a>
			</form>
		</div>
		<div class="col-sm">
		</div>
		<div class="col-sm">
		</div>
	</div>
</div>
</body>
</html>