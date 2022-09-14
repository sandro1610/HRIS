<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>NIP</th>
				<th>Nama</th>
				<th>Status</th>
				<th>Departemen</th>
			</tr>
		</thead>
		<tbody>
			@foreach($karyawan as $k)
			<tr>
				<td>{{ $k->nip }}</td>
				<td>{{$k->nama}}</td>
				<td>{{$k->status}}</td>
				<td>{{$k->departemen}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>










