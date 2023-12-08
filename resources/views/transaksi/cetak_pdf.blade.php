<!DOCTYPE html>
<html>
<head>
	<title>Laporan Transaksi Laundry</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Transaksi Laundry</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Outlet</th>
				<th>Nama Member</th>
				<th>Tanggal</th>
				<th>Status</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($transaksi as $key => $transaksi)
			<tr>
                <td>{{ $i++ }}</td>
                <td>{{ $transaksi->outlet->nama }}</td>
                <td>{{ $transaksi->member->nama }}</td>
                <td>{{ $transaksi->tgl }}</td>
                <td>{{ $transaksi->status }}</td>
                <td>{{ $transaksi->keterangan }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
<script type="text/javascript">
window.print();

</script>
</body>
</html>