<!DOCTYPE html>
<html>
<head>
	<title>Penjualan Bulan Ini</title>
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
				<th>Upah Pokok</th>
				<th>Upah Lembur</th>
			</tr>
		</thead>
		<tbody>
			@foreach($gajis as $g)
			<tr>
				<td>{{ $g->nip }}</td>
				<td>{{$g->nama}}</td>
				<td>@currency($g->upah_pokok_bulan)</td>
				<td>@currency($g->total_lembur)</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>










