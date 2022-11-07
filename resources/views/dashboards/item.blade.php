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
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Bintang CCTV Cileungsi
                    </h2>
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
                            <span class="d-block text-muted pt-2 font-size-sm">Datatable initialized from HTML
                                table
                            </span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <a href="{{ route('item.print') }}" type="button"
                        class="btn btn-primary">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                            fill="#000000" opacity="0.3" />
                                        <path
                                            d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                            fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>Export</a>
                        <!-- Button trigger modal-->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                        <path
                                            d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z"
                                            fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>New
                        </button>

                        <!-- Modal-->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">New</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('storeItem') }}" method="POST"
                                            enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Item Name
                                                        <span class="text-danger">*</span></label>
                                                    <input name="item_name" type="text" class="form-control"
                                                        placeholder="Masukkan nama item" />
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
                                                    <input name="merk" type="text" class="form-control"
                                                        placeholder="Masukkan merk" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Fund
                                                        <span class="text-danger">*</span></label>
                                                    <input name="fund" type="text" class="form-control"
                                                        placeholder="Masukkan modal" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Price
                                                        <span class="text-danger">*</span></label>
                                                    <input name="price" type="text" class="form-control"
                                                        placeholder="Masukkan harga" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Stock
                                                        <span class="text-danger">*</span></label>
                                                    <input name="stock" type="text" class="form-control"
                                                        placeholder="Masukkan stock" />
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="submit"
                                                    class="btn btn-primary font-weight-bold">Add</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Item</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('updateItem') }}" method="POST"
                                            enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <input id="edit-id" name="id" type="hidden"
                                                    class="form-control @error('id') is-invalid @enderror"
                                                    value="{{ old('id') }}" />
                                                <div class="form-group">
                                                    <label>Item Name
                                                        <span class="text-danger">*</span></label>
                                                    <input id="edit-name" name="item_name" type="text"
                                                        class="form-control" placeholder="Masukkan nama item" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleSelect1">Category
                                                        <span class="text-danger">*</span></label>
                                                    <select id="edit-category" name="category" class="form-control"
                                                        id="exampleSelect1">
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
                                                    <input id="edit-merk" name="merk" type="text" class="form-control"
                                                        placeholder="Masukkan merk" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Fund
                                                        <span class="text-danger">*</span></label>
                                                    <input id="edit-fund" name="fund" type="text" class="form-control"
                                                        placeholder="Masukkan modal" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Price
                                                        <span class="text-danger">*</span></label>
                                                    <input id="edit-price" name="price" type="text" class="form-control"
                                                        placeholder="Masukkan harga" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Stock
                                                        <span class="text-danger">*</span></label>
                                                    <input id="edit-stock" name="stock" type="text" class="form-control"
                                                        placeholder="Masukkan stock" />
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="submit"
                                                    class="btn btn-primary font-weight-bold">Add</button>
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
                                            <input type="text" class="form-control" placeholder="Search..."
                                                id="kt_datatable_search_query" />
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
                            <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th title="Field #1" style="width:5%">Item Name</th>
                                        <th title="Field #2">Category</th>
                                        <th title="Field #3">Merk</th>
                                        <th title="Field #4">Fund</th>
                                        <th title="Field #1">Price</th>
                                        <th title="Field #2">Stock</th>
                                        <th title="Field #3">Item In</th>
                                        <th title="Field #4">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $item as $i )
                                    <tr>
                                        <td>{{ $i->item_name }}</td>
                                        <td>{{ $i->category }}</td>
                                        <td>{{ $i->merk }}</td>
                                        <td>{{ $i->fund }}</td>
                                        <td>{{ $i->price }}</td>
                                        <td>{{ $i->stock }}</td>
                                        <td>{{ $i->created_at }}</td>
                                        <td>
                                            <!-- Button trigger modal-->
                                            <button type="button" class="btn btn-icon btn-light-warning btn-sm mr-1"
                                                onclick="modalEdit(
                                                    '{{ $i->id_item }}',
                                                    '{{ $i->item_name }}',
                                                    '{{ $i->category }}',
                                                    '{{ $i->merk }}',
                                                    '{{ $i->fund }}',
                                                    '{{ $i->price }}',
                                                    '{{ $i->stock }}',
                                                )">
                                                <i class="flaticon2-edit"></i>
                                            </button>
                                            <a href="{{ route('deleteItem',['id'=>$i->id_item]) }}"
                                                class="btn btn-icon btn-light-primary btn-sm mr-0">
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
            var fund = fund;
            var price = price;
            var stock = stock;
            $('#modalEdit').modal('show');
            $('#edit-name').val(item_name)
            $('#edit-category').val(category)
            $('#edit-merk').val(merk)
            $('#edit-fund').val(fund)
            $('#edit-price').val(price)
            $('#edit-stock').val(stock)
            $('#edit-id').val(id_item)
        }
        $("#delete").click(function (e) {
            Swal.fire("Good job!");
        });

    </script>
    @stop
