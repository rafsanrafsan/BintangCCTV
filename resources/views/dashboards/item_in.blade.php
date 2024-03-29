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
                <h3 class="card-label">Item In
                <span class="d-block text-muted pt-2 font-size-sm">Data Barang Masuk</span></h3>
              </div>
              <div class="card-toolbar">
                <div class="dropdown dropdown-inline mr-2">
                  <a href="{{ route('item-in.print') }}" class="btn btn-light-primary font-weight-bolder">
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
                </span>New
              </button>

               <!-- Modal-->
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Item In</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{ route('storeItemIn') }}" method="POST" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="modal-body">
                                <div class="form-group">
                                  <label for="getItem">Nomor Invoice
                                  <span class="text-danger">*</span></label>
                                  <select name="id_item" class="form-control" id="getItem" onchange="getItemIn()">
                                        <option value="">Pilih Item</option>
                                        @foreach ($order as $item)
                                        <option value="{{ $item->id_order }}">{{ $item->no_invoice }}</option>
                                        @endforeach
                                  </select>
                                </div>
                                <div class="form-group" id="supplier_section"  style="display: none;">
                                  <label>Nama Supplier<span class="text-danger">*</span></label>
                                  <input readonly type="text" class="form-control" value="read" id="supplier_name"/>
                                </div>
                                <div id="formItem"></div>
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
                          <form action="{{ route('updateItemIn') }}" method="POST" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="modal-body">
                                <input type="hidden" name="id" id="edit-id"/>
                                <div class="form-group">
                                  <label for="exampleSelect1">Item Name
                                  <span class="text-danger">*</span></label>
                                  <select id="edit-id-item" name="id_item" class="form-control" id="exampleSelect1">
                                        <option value="">Pilih Item</option>
                                        @foreach ($items as $item)
                                        <option value="{{ $item->id_item }}">{{ $item->item_name }}</option>
                                        @endforeach
                                  </select>
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
                </div>
              </div>
              <!--end::Search Form-->
              <!--end: Search Form-->
              <!--begin: Datatable-->
              <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
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
                    <td>{{ $io->items->item_name}}</td>
                    <td>{{ $io->category }}</td>
                    <td>{{ $io->merk }}</td>
                    <td>Rp.{{number_format($io->price)  }}</td>
                    <td>{{ $io->quantity }}</td>
                    <td>Rp.{{number_format($io->total_price)  }}</td>
                    <td>{{ $io->created_at->translatedFormat('d F Y H:i') }}</td>
                    <td>
                      <!-- Button trigger modal-->
                      <button type="button" class="btn btn-icon btn-light-warning btn-sm mr-1" onclick="modalEdit(
                        '{{ $io->id }}',
                        '{{ $io->id_item }}',
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
    <!--end::Content-->

    @stop
    @section('script')
    <script>
      function modalEdit(
            id,
            id_item,
            category,
            merk,
            price,
            quantity,
            total_price
      ) {
        var category = category;
        var merk = merk;
        var price = price;
        var quantity = quantity;
        var total_price = total_price;
        $('#modalEdit').modal('show');
        $('#edit-id').val(id)
        $('#edit-id-item').val(id_item)
        $('#edit-category').val(category)
        $('#edit-merk').val(merk)
        $('#edit-price').val(price)
        $('#edit-quantity').val(quantity)
        $('#edit-total_price').val(total_price)
      }
      $("#delete").click(function(e) {
        Swal.fire("Good job!");
      });
    </script>
    <script type='text/javascript'>
      var orders = @json($order);
    
      function getItemIn() {
        var item_id = document.getElementById("getItem").value;
        $("#formItem").empty();
        try {
          if(item_id > 0 || item_id != null){
            fetchRecords(item_id);
            var order = orders.filter( function (data) {
              if (data.id_order == item_id) {
                return data
              }
            })
            order = order[0]
            $('#supplier_name').val(order.supplier.supplier_name)
            document.getElementById("supplier_section").style.display = "block";
          } else {
            document.getElementById("supplier_section").style.display = "none";
          }
        } catch (error) {
          document.getElementById("supplier_section").style.display = "none";
        }
      }
    
      function fetchRecords(id){
        $.ajax({
          url: 'get-item-in/'+id,
          type: 'get',
          dataType: 'json',
          success: function(response){
              $("#formItem").append(response);
          }
        });
      }
      </script>
    @stop
    