<!DOCTYPE html>
<html>
<head>
	<title>Data Pemesanan</title>
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
		<h5>Data Pemesanan Bintang CCTV Cileungsi</h4>
		<h6><a target="_blank" href="https://www.bintangcctvcileungsi.site/signin">www.bintangcctvcileungsi.site</a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th style="width:5% !important;">No</th>
				<th>No Invoice</th>
                <th>Supplier</th>
                <th>Item</th>
                <th>Total Qty</th>
                <th>Status</th></th>
                <th>Description</th>
                <th>Order Date</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($order as $o)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $o->no_invoice }}</td>
                  <td>{{ $o->supplier->supplier_name ?? 'Tidak Ada Supplier' }}</td>
                  <td>
                    @foreach ($o->item as $item_order )
                      <p class="mb-0 text-nowrap">- {{ $item_order->item->item_name }} | QTY : {{ $item_order->quantity }} </p>
                    @endforeach
                  </td>
                  <td>{{ $o->item->sum('quantity') }}</td>
                  <td>
                    <span class="label 
                        {{ $o->status == 'Pending' ? 'label-info' 
                        : $o->status == 'Batal' ? 'label-danger' 
                        : 'label-success' }} 
                        label-pill label-inline mr-2">
                        {{ $o->status }}
                    </span>
                  </td>
                  <td>{{ $o->description ?? '-' }}</td>
                  <td>{{ $o->created_at->format('d F Y H:i') }}</td>

			@endforeach
		</tbody>
	</table>
 
</body>
</html>