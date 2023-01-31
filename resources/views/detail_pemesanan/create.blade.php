@extends('admin.admin_master')
@section('admin')

<!-- ini untuk isi home -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Buat Detail Pemesanan</h2>
                                        <form class="custom-validation" action="{{ route('detail_pemesanan.store') }}" method="POST"  novalidate="">
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
                                                <div>
                                                    <select name="pesawat" class="form-select" aria-label="Default select example">
                                                        <option selected="">Pilih Pesawat</option>
                                                        <option value="1">Batik Air</option>
                                                        <option value="2">Garuda</option>
                                                        <option value="3">Airbus 012</option>
                                                        <option value="4">Lion Air</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Tanggal Beli</label>
                                                <div>
                                                    <input type="date" class="form-control" required="" name="tanggal_beli" parsley-type="Tanggal_Beli" placeholder="">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Tanggal Berangkat</label>
                                                <div>
                                                    <input type="date" class="form-control" required="" name="tanggal_berangkat" parsley-type="Tanggal_berangkat" placeholder="">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Bandara Asal</label>
                                                <div>
                                                    <input type="text" class="form-control" required="" name="bandara_asal" parsley-type="bandara_asal" placeholder="">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Bandara Tujuan</label>
                                                <div>
                                                    <input type="text" class="form-control" required="" name="bandara_tujuan" parsley-type="Bandara_tujuan" placeholder="">
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
