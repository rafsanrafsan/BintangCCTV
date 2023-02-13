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
		<h5>Stok Barang Bintang CCTV Cileungsi</h4>
		<h6><a target="_blank" href="https://www.bintangcctvcileungsi.site/signin">www.bintangcctvcileungsi.site</a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th style="width:5% !important;">No</th>
				<th style="width:5% !important;">Item Name</th>
				<th  style="width:5% !important;">Category</th>
				<th title="Field #3">Merk</th>
				<th title="Field #4">Fund</th>
				<th title="Field #1">Price</th>
				<th title="Field #2">Stock</th>
				<th title="Field #3">Date</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($item as $it)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$it->item_name}}</td>
				<td>{{$it->category}}</td>
				<td>{{$it->merk}}</td>
				<td>Rp.{{number_format($it->fund) }}</td>
                <td>Rp.{{ number_format($it->price) }}</td>
				<td>{{$it->stock}}</td>
				<td>{{$it->created_at->translatedFormat('d F Y H:i')}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>