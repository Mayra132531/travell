@extends('admin.admin_master')
@section('title')

@endsection

<!-- ini untuk isi home -->
@section('admin')
<div  id="layoutSidenav_content">
    <main>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
        <div class="col-xl-8">
                <div class="card">
                <div class="card-body">
                <h4 class="card-title">Edit Detail Pemesanan</h4>

                                                @if ($errors->any())
                                                <div class="alert alert-danger">
                                                <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                                     </ul>
                                                </div>
                                                @endif
                                        <form class="custom-validation" method="POST" action="{{ route('detail_pemesanan.update',[$detail_pemesanan->id]) }}" novalidate="">
                                            @csrf
                                            {{ method_field('PUT') }}



                                            <div class="mb-3">
                                                <label>Name</label>
                                                <div class="">
                                                    <select name="pemesanan_id" class="form-control">
                                                       <option value="{{ $detail_pemesanan->pemesanan->id }}">{{ $detail_pemesanan->pemesanan->name }}</option>
                                                       @foreach ($pemesanan as $row)
                                                       <option value="{{$row->id}}">{{$row->name}}</option>
                                                       @endforeach
                                                   </select>
                                                   </div>
                                            <div class="mb-3">
                                                <label>Pesawat</label>
                                                <div>
                                                    <select name="pesawat" class="form-select"  aria-label="Default select example">
                                                        <option selected="">Pilih Pesawat</option>
                                                        <option value="1">Batik Air</option>
                                                        <option value="2">Garuda</option>
                                                        <option value="3">Airbus 012</option>
                                                        <option value="2">Lion Air</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Tanggal Beli</label>
                                                <div>
                                                    <input type="date" name="tanggal_beli" class="form-control" required="" parsley-type="tanggal_beli" value="{{ $detail_pemesanan->tanggal_beli}}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Tanggal Berangkat</label>
                                                <div>
                                                    <input type="date" name="tanggal_berangkat" class="form-control" required="" parsley-type="tanggal_tanggal" value="{{ $detail_pemesanan->tanggal_berangkat}}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Bandara Asal</label>
                                                <input type="text" name="bandara_asal" class="form-control" required="" value="{{ $detail_pemesanan->bandara_asal}}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Kota Asal</label>
                                                <input type="text" name="bandara_tujuan" class="form-control" required="" value="{{ $detail_pemesanan->bandara_tujuan}}">
                                            </div>


                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                       Edit
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
