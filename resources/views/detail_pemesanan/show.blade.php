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
                       <td>Kode Detail Pemesanan</td>

                       <td>{{ $detail_pemesanan->id }}</td>
                   </tr>
                   <tr>
                       <td>Nama</td>

                       <td>{{ $detail_pemesanan->pemesanan->name }}</td>
                   </tr>
                   <tr>
                        <td>Pesawat</td>

                        <td>{{ $detail_pemesanan->pesawat }}</td>
                    </tr>
                    <tr>
                    <td>Tanggal Beli</td>

                    <td>{{ $detail_pemesanan->tanggal_beli}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Berangkat</td>

                        <td>{{ $detail_pemesanan->tanggal_berangkat }}</td>
                    </tr>
                    <tr>
                        <td>Bandara Asal</td>

                        <td>{{ $detail_pemesanan->bandara_asal }}</td>
                    </tr>
                    <tr>
                        <td>Bandara Tujuan</td>

                        <td>{{ $detail_pemesanan->bandara_tujuan }}</td>
                    </tr>


                                            </table>
                                            <a class="btn btn-primary waves-effect waves-light" href="/detail_pemesanan" role="button">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
</div>
@endsection
