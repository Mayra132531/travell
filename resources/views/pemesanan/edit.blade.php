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
                <h4 class="card-title">Edit Pemesanan</h4>

                                                @if ($errors->any())
                                                <div class="alert alert-danger">
                                                <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                                     </ul>
                                                </div>
                                                @endif
                                        <form class="custom-validation" method="POST" action="{{ route('pemesanan.update',[$pemesanan->id]) }}" novalidate="">
                                            @csrf
                                            {{ method_field('PUT') }}



                                            <div class="mb-3">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" required="" value="{{ $pemesanan->name }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>E-Mail</label>
                                                <div>
                                                    <input type="email" name="email" class="form-control" required="" parsley-type="email" value="{{ $pemesanan->email}}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>No Telp</label>
                                                <input type="no_telp" name="no_telp" class="form-control" required="" value="{{ $pemesanan->no_telp}}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Kota Asal</label>
                                                <input type="kota_asal" name="kota_asal" class="form-control" required="" value="{{ $pemesanan->kota_asal}}">
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
