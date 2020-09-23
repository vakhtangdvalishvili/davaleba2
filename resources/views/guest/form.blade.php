<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route("posttest") }}" method="POST">
		@csrf
		<input type="text" name="name" placeholder="name">
		<input type="text" name="lastname" placeholder="lastname">
		<input type="text" name="address" placeholder="address">
		<input type="text" name="biography" placeholder="biography">
		<input type="date" name="date_of_birth" placeholder="date_of_birth">	

		<button>submit</button>
	</form>
</body>
</html>