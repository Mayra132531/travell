@extends('admin.admin_master')
@section('admin')

<!-- ini untuk isi home -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Transaksi</h2>
                                        <form class="custom-validation" action="{{ route('transaksi.store') }}" method="POST"  novalidate="">
                                            @csrf
                                            <div class="mb-3">
                                                <label>Nama</label>
                                                <div class="value">
                                                    <select name="pemesanan_id" class="form-control">
                                                        <option value="">Choose</option>
                                                        @foreach ($pemesanan as $row)
                                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Pesawat</label>
                                                <div class="value">
                                                    <select name="detail_pemesanan_id" class="form-control">
                                                        <option value="">Choose</option>
                                                        @foreach ($detail_pemesanan as $row)
                                                        <option value="{{$row->id}}">{{$row->pesawat}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Harga</label>
                                                <div>
                                                    <input type="text" class="form-control" required="" name="harga" parsley-type="Harga" placeholder="">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Metode Pembayaran</label>
                                                <div>
                                                    <select name="pembayaran" class="form-select" aria-label="Default select example">
                                                        <option selected="">Pilih Metode pembayaran</option>
                                                        <option value="1">ATM</option>
                                                        <option value="2">Bank</option>
                                                        <option value="3">SMS Banking</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Status Pembayaran</label>
                                                <div>
                                                    <select name="status" class="form-select" aria-label="Default select example">
                                                        <option selected="">Status Pembayaran</option>
                                                        <option value="1">Sudah</option>
                                                        <option value="2">Belum</option>
                                                        </select>
                                                </div>
                                            </div>


                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    </div> <!-- container-fluid -->
    </div> <!-- page-content -->
    </div> <!-- main-content -->
@endsection
