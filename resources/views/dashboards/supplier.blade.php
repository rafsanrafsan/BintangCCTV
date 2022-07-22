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
                </span>
                New Supplier
              </button>

              <!-- Modal-->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Supplier</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{ route('storeSupplier') }}" method="POST" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="modal-body">
                                <div class="form-group">
                                  <label>Supplier Name
                                  <span class="text-danger">*</span></label>
                                  <input name="supplier_name" type="text" class="form-control" placeholder="Masukkan nama supplier" />
                                </div>
                                <div class="form-group">
                                  <label>Kontak
                                  <span class="text-danger">*</span></label>
                                  <input name="contact" type="text" class="form-control" placeholder="Masukkan kontak" />
                                </div>
                                <div class="form-group mb-1">
                                  <label for="exampleTextarea">Alamat
                                  <span class="text-danger">*</span></label>
                                  <textarea name="address" class="form-control" id="exampleTextarea" rows="3"></textarea>
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
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Supplier</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                          <input id="edit-id" name="id" type="hidden" class="form-control @error('id') is-invalid @enderror" value="{{ old('id') }}" />
                          <form action="{{ route('storeSupplier') }}" method="POST" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="modal-body">
                                <div class="form-group">
                                  <label>Supplier Name
                                  <span class="text-danger">*</span></label>
                                  <input id="edit-name" name="supplier_name" type="text" class="form-control" placeholder="Masukkan nama supplier" />
                                </div>
                                <div class="form-group">
                                  <label>Contact
                                  <span class="text-danger">*</span></label>
                                  <input id="edit-contact" name="contact" type="text" class="form-control" placeholder="Masukkan kontak" />
                                </div>
                                <div class="form-group mb-1">
                                  <label for="exampleTextarea">Address
                                  <span class="text-danger">*</span></label>
                                  <textarea id="edit-address" name="address" class="form-control" id="exampleTextarea" rows="3"></textarea>
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
                </div>
              </div>
              <!--end::Search Form-->
              <!--end: Search Form-->
              <!--begin: Datatable-->
              <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                <thead>
                  <tr>
                    <th title="Field #1">Supplier Name</th>
                    <th title="Field #2">Contact</th>
                    <th title="Field #3">Address</th>
                    <th title="Field #4">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $supplier as $supply )
                  <tr>
                    <td>{{ $supply->supplier_name }}</td>
                    <td>{{ $supply->contact }}</td>
                    <td>{{ $supply->address }}</td>
                    <td>
                      <!-- Button trigger modal-->
                      <button type="button" class="btn btn-icon btn-light-warning btn-sm mr-1" onclick="modalEdit(
                        '{{ $supply->id_supplier }}',
                        '{{ $supply->supplier_name }}',
                        '{{ $supply->contact }}',
                        '{{ $supply->address }}',
                      )">
                        <i class="flaticon2-edit"></i>
                    </button>
                    <a href="{{ route('deleteSupplier',['id'=>$supply->id_supplier]) }}" class="btn btn-icon btn-light-primary btn-sm mr-0">
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
    <!--end::Content-->

@stop
@section('script')
<script>
  function modalEdit(
		id_supplier,
		supplier_name,
		contact,
		addres
	) {
		var id = id_supplier;
		var supplier_name = supplier_name;
		var contact = contact;
		var address = address;
		$('#modalEdit').modal('show');
		$('#edit-name').val(supplier_name)
		$('#edit-contact').val(contact)
		$('#edit-address').val(address)
	}
	$("#delete").click(function(e) {
		Swal.fire("Good job!");
	});
</script>
@stop