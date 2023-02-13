<!DOCTYPE html>
<html>
<head>
	<title>Data Supplier</title>
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
		<h5>Data Supplier Bintang CCTV Cileungsi</h4>
		<h6><a target="_blank" href="https://www.bintangcctvcileungsi.site/signin">www.bintangcctvcileungsi.site</a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th style="width:5% !important;">No</th>
				<th title="Field #1">Supplier Name</th>
                <th title="Field #2">Contact</th>
                <th title="Field #3">Address</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($supplier as $supply)
			<tr>
				<td>{{ $i++ }}</td>
                <td>{{ $supply->supplier_name }}</td>
                <td>{{ $supply->contact }}</td>
                <td>{{ $supply->address }}</td>

			@endforeach
		</tbody>
	</table>
 
</body>
</html>