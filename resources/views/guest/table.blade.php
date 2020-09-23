<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,td,td,th{
			border:solid 1px black;
			padding: 5px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>#</th>
			<th>name</th>
			<th>lastname</th>
			<th>address</th>
			<th>biography</th>
			<th>date_of_birth</th>
		</tr>
		<tr>
			@foreach ($newdata as $data)
				<td>{{ ++$loop->index }}</td>
				<td>{{ $data }}</td>
			@endforeach

		</tr>
	</table>
</body>
</html>

