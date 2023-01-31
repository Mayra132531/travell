@extends('admin.admin_master')
@section('admin')

<!-- ini untuk isi home -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                                        <h4 class="card-title">Data Pemesanan</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                            <tr>
                       <td>Kode Pemesan</td>

                       <td>{{ $pemesanan->id }}</td>
                   </tr>
                   <tr>
                       <td>Nama</td>

                       <td>{{ $pemesanan->name }}</td>
                   </tr>
                   <tr>
                        <td>Email</td>

                        <td>{{ $pemesanan->email }}</td>
                    </tr>
                    <tr>
                    <td>No Telp</td>

                    <td>{{ $pemesanan->no_telp }}</td>
                    </tr>
                    <tr>
                        <td>Kota Asal</td>

                        <td>{{ $pemesanan->kota_asal }}</td>
                    </tr>


                                            </table>
                                            <a class="btn btn-primary waves-effect waves-light" href="/pemesanan" role="button">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
</div>
@endsection
