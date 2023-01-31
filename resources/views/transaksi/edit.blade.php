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
                                        <form class="custom-validation" method="POST" action="{{ route('transaksi.update',[$transaksi->id]) }}" novalidate="">
                                            @method('PUT')
                                            @csrf
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                            <ul>
                                            @foreach ($errors->all() as $error)
                                             <li>{{ $error }}</li>
                                             @endforeach
                                             </ul>
                                              </div>
                                             @endif
                                             <div class="mb-3">
                                                <label>Nama</label>
                                               <div class="">
                                                 <select name="pemesanan_id" class="form-control">
                                                    <option value="{{ $transaksi->pemesanan->id }}">{{ $transaksi->pemesanan->name }}</option>
                                                    @foreach ($pemesanan as $row)
                                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Harga</label>
                                                <div>
                                                    <input type="text" name="harga" class="form-control" required="" parsley-type="harga" placeholder="Silahkan masukan jumlah" value="{{ $transaksi->harga }}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Pesawat</label>
                                               <div class="">
                                                 <select name="detail_pemesanan_id" class="form-control">
                                                    <option value="{{ $transaksi->detail_pemesanan->id }}">{{ $transaksi->detail_pemesanan->pesawat }}</option>
                                                    @foreach ($detail_pemesanan as $row)
                                                    <option value="{{$row->id}}">{{$row->pesawat}}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label>Metode Pembayaran</label>
                                                <select name="pembayaran" class="form-select" aria-label="Default select example">
                                                    <option selected="" >{{ $transaksi->metode }}</option>
                                                    <option value="ATM">ATM</option>
                                                    <option value="BANK">BANK</option>
                                                    <option value="SMS Banking">SMS Banking</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label>Status Pembayaran</label>
                                                <select name="status" class="form-select" aria-label="Default select example">
                                                    <option selected="" >{{ $transaksi->metode }}</option>
                                                    <option value="Sudah">Sudah</option>
                                                    <option value="Belum">Belum</option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>

                                </div>



                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Add
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
@endsection
