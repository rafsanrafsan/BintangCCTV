<!DOCTYPE html>
<html>
<head>
	<title>Stok Barang</title>
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
		<h5>Data Barang Masuk Bintang CCTV Cileungsi</h4>
		<h6><a target="_blank" href="https://www.bintangcctvcileungsi.site/signin">www.bintangcctvcileungsi.site</a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th style="width:5% !important;">No</th>
				<th title="Field #1" style="width:5%">Item Name</th>
                <th title="Field #3">Merk</th>
                <th title="Field #2">Category</th>
                <th title="Field #4">Price</th>
                <th title="Field #1">Qty</th>
                <th title="Field #2">Total Price</th>
                <th title="Field #3">Date</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($item_in as $io)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $io->items->item_name}}</td>
                <td>{{ $io->merk }}</td>
                <td>{{ $io->category }}</td>
                <td>Rp.{{number_format($io->price)  }}</td>
                <td>{{ $io->quantity }}</td>
                <td>Rp.{{number_format($io->total_price)  }}</td>
                <td>{{ $io->created_at->translatedFormat('d F Y H:i') }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>