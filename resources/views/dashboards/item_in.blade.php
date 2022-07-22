@extends('layouts.master')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
      <!--begin::Subheader-->
      <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
          <!--begin::Info-->
          <div class="d-flex align-items-center mr-1">
            <!--begin::Page Heading-->
            <div class="d-flex align-items-baseline flex-wrap mr-5">
              <!--begin::Page Title-->
              <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Bintang CCTV Cileungsi</h2>
              <!--end::Page Title-->
              <!--begin::Breadcrumb-->
              <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
                <li class="breadcrumb-item">
                  <a href="" class="text-muted">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="" class="text-muted">Supplier</a>
                </li>
              </ul>
              <!--end::Breadcrumb-->
            </div>
            <!--end::Page Heading-->
          </div>
          <!--end::Info-->
        </div>
      </div>
      <!--end::Subheader-->
      <!--begin::Entry-->
      <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
          <!--begin::Notice-->
         
          <!--end::Notice-->
          <!--begin::Card-->
          <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
              <div class="card-title">
                <h3 class="card-label">HTML Table
                <span class="d-block text-muted pt-2 font-size-sm">Datatable initialized from HTML table</span></h3>
              </div>
              <div class="card-toolbar">
              <!-- Button trigger modal-->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <span class="svg-icon svg-icon-md">
                  <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"/>
                      <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                      <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000"/>
                  </g>
                  </svg>
                  <!--end::Svg Icon-->
                </span>New
              </button>

              <!-- Modal-->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Item Out</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{ route('storeItemIn') }}" method="POST" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="modal-body">
                                <div class="form-group">
                                  <label for="exampleSelect1">Item Name
                                  <span class="text-danger">*</span></label>
                                  <select id="edit-name" name="item_name" class="form-control" id="exampleSelect1">
                                        <option value="">Pilih Item</option>
                                        @foreach ($items as $item)
                                        <option value="{{ $item->id_item }}">{{ $item->item_name }}</option>
                                        @endforeach
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="exampleSelect1">Category
                                  <span class="text-danger">*</span></label>
                                  <select name="category" class="form-control" id="exampleSelect1">
                                    <option value="CCTV">CCTV</option>
                                    <option value="Access Control">Access Control</option>
                                    <option value="Power Supply">Power Supply</option>
                                    <option value="DVR">DVR</option>
                                    <option value="Hardisk">Hardisk</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label>Merk
                                  <span class="text-danger">*</span></label>
                                  <input name="merk" type="text" class="form-control" placeholder="Masukkan merk" />
                                </div>
                                <div class="form-group">
                                  <label>Price
                                  <span class="text-danger">*</span></label>
                                  <input name="price" type="text" class="form-control" placeholder="Masukkan harga" />
                                </div>
                                <div class="form-group">
                                  <label>Quantity
                                  <span class="text-danger">*</span></label>
                                  <input name="qty" type="text" class="form-control" placeholder="Masukkan stock" />
                                </div>
                                <div class="form-group">
                                  <label>Total Price
                                  <span class="text-danger">*</span></label>
                                  <input name="total_price" type="text" class="form-control" placeholder="Masukkan stock" />
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary font-weight-bold">Tambah</button>
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
              </div>

              <!-- Modal Edit-->
              <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Item</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{ route('updateItem') }}" method="POST" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="modal-body">
                                <input id="edit-id" name="id" type="hidden" class="form-control @error('id') is-invalid @enderror" value="{{ old('id') }}" />
                                <div class="form-group">
                                  <label>Item Name  
                                  <span class="text-danger">*</span></label>
                                  <input id="edit-name" name="item_name" type="text" class="form-control" placeholder="Masukkan nama item" />
                                </div>
                                <div class="form-group">
                                  <label for="exampleSelect1">Category
                                  <span class="text-danger">*</span></label>
                                  <select id="edit-category" name="category" class="form-control" id="exampleSelect1">
                                    <option value="CCTV">CCTV</option>
                                    <option value="Access Control">Access Control</option>
                                    <option value="Power Supply">Power Supply</option>
                                    <option value="DVR">DVR</option>
                                    <option value="Hardisk">Hardisk</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label>Merk
                                  <span class="text-danger">*</span></label>
                                  <input id="edit-merk" name="merk" type="text" class="form-control" placeholder="Masukkan merk" />
                                </div>
                                <div class="form-group">
                                  <label>Price
                                  <span class="text-danger">*</span></label>
                                  <input id="edit-price" name="price" type="text" class="form-control" placeholder="Masukkan modal" />
                                </div>
                                <div class="form-group">
                                  <label>Quantity
                                  <span class="text-danger">*</span></label>
                                  <input id="edit-quantity" name="quantity" type="text" class="form-control" placeholder="Masukkan harga" />
                                </div>
                                <div class="form-group">
                                  <label>Total Price
                                  <span class="text-danger">*</span></label>
                                  <input id="edit-total_price" name="total_price" type="text" class="form-control" placeholder="Masukkan stock" />
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary font-weight-bold">Tambah</button>
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
              </div>
              </div>
            </div>
            <div class="card-body">
              <!--begin: Search Form-->
              <!--begin::Search Form-->
              <div class="mb-7">
                <div class="row align-items-center">
                  <div class="col-lg-9 col-xl-8">
                    <div class="row align-items-center">
                      <div class="col-md-4 my-2 my-md-0">
                        <div class="input-icon">
                          <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                          <span>
                            <i class="flaticon2-search-1 text-muted"></i>
                          </span>
                        </div>
                      </div>
                </div>
              </div>
              <!--end::Search Form-->
              <!--end: Search Form-->
              <!--begin: Datatable-->
              <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable" style="width:100%">
                <thead>
                  <tr>
                    <th title="Field #1" style="width:5%">Item Name</th>
                    <th title="Field #2">Category</th>
                    <th title="Field #3">Merk</th>
                    <th title="Field #4">Price</th>
                    <th title="Field #1">Qty</th>
                    <th title="Field #2">Total Price</th>
                    <th title="Field #3">Date</th>
                    <th title="Field #4">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $item_in as $io )
                  <tr>
                    <td>{{ $io->item_name }}</td>
                    <td>{{ $io->category }}</td>
                    <td>{{ $io->merk }}</td>
                    <td>{{ $io->price }}</td>
                    <td>{{ $io->quantity }}</td>
                    <td>{{ $io->total_price }}</td>
                    <td>{{ $io->created_at }}</td>
                    <td>
                      <!-- Button trigger modal-->
                      <button type="button" class="btn btn-icon btn-light-warning btn-sm mr-1" onclick="modalEdit(
                        '{{ $io->id_item }}',
                        '{{ $io->item_name }}',
                        '{{ $io->category }}',
                        '{{ $io->merk }}',
                        '{{ $io->price }}',
                        '{{ $io->quantity }}',
                        '{{ $io->total_price }}',
                      )">
                        <i class="flaticon2-edit"></i>
                    </button>
                      <a href="{{ route('deleteItemIn',['id'=>$io->id]) }}" class="btn btn-icon btn-light-primary btn-sm mr-0">
                        <i class="flaticon-delete"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!--end: Datatable-->
            </div>
          </div>
          <!--end::Card-->
        </div>
        <!--end::Container-->
      </div>
      <!--end::Entry-->
    </div>
      </div>
    <!--end::Content-->

@stop
@section('script')
<script>
  function modalEdit(
		id_item,
		item_name,
		category,
		merk,
		fund,
		price,
		stock,
	) {
		var id = id_item;
		var item_name = item_name;
		var category = category;
		var merk = merk;
		var price = price;
		var quantity = quantity;
		var total_price = total_price;
		$('#modalEdit').modal('show');
		$('#edit-name').val(item_name)
		$('#edit-category').val(category)
		$('#edit-merk').val(merk)
		$('#edit-price').val(price)
		$('#edit-quantity').val(quantity)
		$('#edit-total_price').val(total_price)
		$('#edit-id').val(id_item)
	}
	$("#delete").click(function(e) {
		Swal.fire("Good job!");
	});
</script>
@stop