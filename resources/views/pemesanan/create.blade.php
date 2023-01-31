@extends('admin.admin_master')
@section('admin')

<!-- ini untuk isi home -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Buat Pemesanan</h2>
                                        <form class="custom-validation" action="{{ route('pemesanan.store') }}" method="POST"  novalidate="">
                                            @csrf
                                            <div class="mb-3">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" required="" placeholder="silahkan masukan nama" name="name">
                                            </div>
                                            <div class="mb-3">
                                                <label>E-Mail</label>
                                                <div>
                                                    <input type="email" class="form-control" required="" name="email" parsley-type="Email" placeholder="silahkan masukkan email yg benar">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>No Telp</label>
                                                <div>
                                                    <input type="no_telp" class="form-control" required="" name="no_telp" parsley-type="No_telp" placeholder="silahkan masukkan nomor telpon anda">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Kota Asal</label>
                                                <div>
                                                    <input type="kota_asal" class="form-control" required="" name="kota_asal" parsley-type="Kota_asal" placeholder="silahkan masukkan kota asal anda">
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
