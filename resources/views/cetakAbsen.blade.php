<!DOCTYPE html>
<html>
<head>
	<title>Data Absen</title>
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
				<th>Shift Pagi</th>
				<th>Shift Malam</th>
				<th>Jumlah Lembur</th>
				<th>STB</th>
				<th>TR</th>
				<th>Telat</th>
				<th>Jumlah Hari Kerja</th>
			</tr>
		</thead>
		<tbody>
			@foreach($absens as $a)
			<tr>
				<td>{{ $a->nip }}</td>
				<td>{{$a->nama}}</td>
				<td>{{$a->shift1}}</td>
				<td>{{$a->shift2}}</td>
				<td>{{$a->jumlah_lembur}}</td>
				<td>{{$a->stb}}</td>
				<td>{{$a->tr}}</td>
				<td>{{$a->telat}}</td>
				<td>{{$a->jumlah_hari_kerja}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>










