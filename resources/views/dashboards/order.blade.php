@extends('layouts.master')

@section('content')
          {{-- @if (session('sukses'))

          <div role="alert" data-toggle="sweet-alert" data-sweet-alert="success">
            {{ session('sukses') }}
          </div>


            @endif --}}

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
            <h3 class="card-label">Orders
            <span class="d-block text-muted pt-2 font-size-sm">Request Orders to Suppliers</span></h3>
          </div>
          <div class="card-toolbar">
            <div class="dropdown dropdown-inline mr-2">
              <a href="{{ route('order.print') }}" class="btn btn-light-primary font-weight-bolder">
              <span class="svg-icon svg-icon-md">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
                    <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
                  </g>
                </svg>
                <!--end::Svg Icon-->
              </span>Export</a>
            </div>
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
            </span>New     Order
          </button>

          <!-- Modal-->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{ route('storeOrder') }}" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="modal-body">
                            <div class="form-group">
                              <label for="exampleSelect1">Supplier
                              <span class="text-danger">*</span></label>
                              <select name="supplier" class="form-control" id="exampleSelect1" onchange="updateItem(this.value)">
                                <option value="">Pilih Supplier</option>
                                @foreach ($suppliers as $supplier )
                                <option value="{{ $supplier->id_supplier }}">{{ $supplier->supplier_name }}</option>
                                @endforeach
                              </select>
                            </div>

                            <div id="formRepeater">
                              <div id="formOrder-0">
                                  <label for="exampleSelect1">Item
                                    <span class="text-danger">*</span></label>
                                    <div class="row no-gutters">
                                      <div class="col-8 pr-1">
                                    <div class="form-group">
                                      <select name="items[0][item]" class="form-control" id="exampleSelect1">
                                        <option value="">Pilih Item</option>
                                        @foreach ($items as $item)
                                        <option value="{{ $item->id_item }}">{{ $item->item_name }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-2 px-1">
                                    <button type="button" class="btn btn-block btn-light-success" onclick="addForm('formOrder-1')">
                                      <i class="flaticon2-plus pl-1"></i></button>
                                  </div>
                                  <div class="col-2 px-1">
                                    <button type="button" class="btn btn-block btn-light-danger" onclick="deleteForm('formOrder-0')">
                                      <i class="flaticon2-trash pl-1"></i>
                                    </button>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Qty
                                  <span class="text-danger">*</span></label>
                                  <input name="items[0][qty]" type="text" class="form-control" placeholder="Masukkan jumlah item" />
                                </div>
                                <div class="form-group">
                                  <label>Price
                                  <span class="text-danger">*</span></label>
                                  <input name="items[0][price]" type="text" class="form-control item-price-create" placeholder="Masukkan jumlah harga terkini" />
                                </div>
                                <hr/>
                              </div>
                            </div>
                            <div class="form-group mb-1">
                              <label for="exampleTextarea">Description
                              <span class="text-danger">*</span></label>
                              <textarea name="description" class="form-control" id="exampleTextarea" rows="3"></textarea>
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
                            <h5 class="modal-title" id="exampleModalLabel">Update Order</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('order-update') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <input id="edit-id" name="id" type="hidden" class="form-control @error('id') is-invalid @enderror" value="{{ old('id') }}" />
                                    <div class="form-group">
                                        <label for="exampleSelect1">Category
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select id="edit-status" name="status" class="form-control">
                                            <option value="Pending">Pending</option>
                                            <option value="Batal">Batal</option>
                                            <option value="Selesai">Selesai</option>
                                        </select>
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
          <div class="table-responsive">
            <table class="table table-bordered table-head-custom" id="datatable-order" style="width:100%">
              <thead>
                <tr>
                  <th>No Invoice</th>
                  <th>Supplier</th>
                  <th>Item</th>
                  <th>Total Qty</th>
                  <th>Status</th></th>
                  <th>Description</th>
                  <th>Order Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($order as $o )
                <tr>
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
                  <td>
                    <!-- Button trigger modal-->
                    <button type="button" class="btn btn-icon btn-light-warning btn-sm mr-1" onclick="modalEdit(
                        '{{ $o->id_order }}',
                        '{{ $o->status }}',
                      )">
                        <i class="flaticon2-edit"></i>
                    </button>
                    <a href="{{ route('deleteOrder',['id'=>$o->id_order]) }}" class="btn btn-icon btn-light-primary btn-sm mr-0">
                      <i class="flaticon-delete"></i>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--end::Card-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::Entry-->
</div>
<!--end::Content-->
@endsection

@section('script')
<script>
  var formRepeater = 0;
  var items = @json($items, JSON_PRETTY_PRINT);
  var itemsSelect = '';

  $('#datatable-order').DataTable({
    responsive: true,
    order: [],

    lengthMenu: [5, 10, 25, 50],

    pageLength: 10,

  });

  function addForm(repeater) {
    formRepeater++;
    var nameForm = repeater;
    var nextForm = 'formOrder-'+formRepeater;
    var html = '<div id="'+ nameForm +'">'+
                  '<label for="exampleSelect1">Item'+
                    '<span class="text-danger">*</span></label>'+
                    '<div class="row no-gutters">'+
                      '<div class="col-8 pr-1">'+
                    '<div class="form-group">'+
                      '<select name="items['+ formRepeater +'][item]" class="form-control" id="exampleSelect1">'+
                        itemsSelect+
                      '</select>'+
                    '</div>'+
                  '</div>'+
                  '<div class="col-2 px-1">'+
                    '<button type="button" class="btn btn-block btn-light-success" onclick="addForm(\''+nextForm+'\')">'+
                      '<i class="flaticon2-plus pl-1"></i></button>'+
                  '</div>'+
                  '<div class="col-2 px-1">'+
                    '<button type="button" class="btn btn-block btn-light-danger" onclick="deleteForm(\''+nameForm+'\')">'+
                      '<i class="flaticon2-trash pl-1"></i>'+
                    '</button>'+
                  '</div>'+
                '</div>'+
                '<div class="form-group">'+
                  '<label>Qty'+
                  '<span class="text-danger">*</span></label>'+
                  '<input name="items['+ formRepeater +'][qty]" type="text" class="form-control" placeholder="Masukkan jumlah item" />'+
                '</div>'+
                '<div class="form-group">'+
                  '<label>Price'+
                  '<span class="text-danger">*</span></label>'+
                  '<input name="items['+ formRepeater +'][price]" type="text" class="form-control item-price-create" placeholder="Masukkan jumlah harga terkini" />'+
                '</div>'+
                '<hr/>'+
              '</div>'+
            '</div>';
    $('#formRepeater').append(html);
  }
  function deleteForm(repeater) {
    $("#"+repeater).remove();
  }
  function beautifyItem() {
    var select = '';
    for (let index = 0; index < items.length; index++) {
      select = select+'<option value="'+items[index]['id_item']+'">'+items[index]['item_name']+'</option>'
    }
    itemsSelect = select;
  }
  beautifyItem();

  function modalEdit(
		id_order,
        status
	) {
		$('#modalEdit').modal('show');
		$('#edit-id').val(id_order)
		$('#edit-status').val(status)
	}
	$("#delete").click(function(e) {
		Swal.fire("Good job!");
	});
</script>
@endsection
