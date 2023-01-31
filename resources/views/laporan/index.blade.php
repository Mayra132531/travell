@extends('admin.admin_master')
@section('admin')


<!-- ini untuk isi home -->
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                    <h4 class="card-title">Data Laporan</h4>
                        <!-- end page title -->
                        <div>
                        {{-- <a class="btn btn-primary waves-effect waves-light" href="/laporan/cetak_pdf" role="button"> Cetak PDF (+)</a> --}}
                        <a href="{{ route('laporan.cetak_pdf')}}" class="btn btn-primary" target="_blank">Cetak PDF</a>
                        <a href="/laporan/export_excel" class="btn btn-success my-3" target="_blank">EXCEL</a>

                        </p>
                        </div>

                        <!-- fungsi cart -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tabel</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr style="cursor: pointer;">
                                                        <th>Id</th>
                                                        <th>Name</th>
                                                        <th>Pesawat</th>
                                                        <th>Harga</th>
                                                        <th>Pembayaran</th>
                                                        <th>Status Pembayaran</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($transaksi as $row)
                    <tr>
                        {{-- <td>{{ $loop->iteration + ($transaksi->pe rpage() *  ($transaksi->currentPage() -1)) }}</td> --}}
                        <td>{{$row->id}}</td>
                        <td>{{ $row->pemesanan->name }}</td>
                        <td>{{ $row->detail_pemesanan->pesawat }}</td>
                        <td>{{ $row->harga }}</td>
                        <td>{{ $row->pembayaran }}</td>
                        <td>{{ $row->status }}</td>
                    </tr>
                </td>
            </tr>
            @endforeach
                                                </tbody>
                                                {{-- {{ $transaksi->appends(Request::all())->links() }} --}}
                                            </table>
                                        </div>
                                    </div>
                                </div>
@endsection
