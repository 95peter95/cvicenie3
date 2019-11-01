<?php ?>
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

			<table class="table table-hover">
					<thead>
					<tr>
						<th scope="col">name </th>
						<th scope="col">lastname</th>
						<th scope="col">email</th>
						<th scope="col">Edit</th>
						<th scope="col">Delete</th>
					</tr>
					</thead>
					<tbody>
					@foreach($users as $user)

						<tr>
						<td>{{ $user->name }}</td>
						<td>{{$user->lastname}}</td>
						<td>{{$user->email }}</td>
						<td><a class="btn btn-warning" href="{{action("UserController@showAction",['id' => $user->id])}}">update</a></td>
						<td><a class="btn btn-primary" href="{{action("UserController@deleteAction",['id' => $user->id])}}">delete</a></td>
					</tr>
					</tbody>
				@endforeach
				<td><a class="btn btn-primary" href="{{action("UserController@getAddUserForm",['id' => $user->id])}}">Add</a></td>
			</table>

		</div>
		<div class="col-sm">

		</div>
		<div class="col-sm">

		</div>
	</div>
</div>
</body>
</html>