<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
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
		<h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Item Name</th>
				<th>Category</th>
				<th>Merk</th>
				<th>Price</th>
				<th>Qty</th>
				<th>Total Price</th>
				<th>Date</th>
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
				<td>{{$it->price}}</td>
				<td>{{$it->quantity}}</td>
				<td>{{$it->total_price}}</td>
				<td>{{$it->created_at}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>