@extends('admin.admin_master')
@section('admin')


<!-- ini untuk isi home -->
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                    <h4 class="card-title">Data Transaksi</h4>
                        <!-- end page title -->
                        <div>
                        <a class="btn btn-primary waves-effect waves-light" href="{{ route('transaksi.create')}}" role="button"> Create (+)</a>
                        </p>
                        </div>

                        <!-- fungsi cart -->
                        <form method="get" action="{{route('transaksi.index')}}">
                            <div class="form-group">

                        </table>
                        </form>
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


                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($transaksi as $row)
                    <tr>
                        <td>{{ $loop->iteration + ($transaksi->perpage() *  ($transaksi->currentPage() -1)) }}</td>
                        <td>{{ $row->pemesanan->name }}</td>
                        <td>{{ $row->detail_pemesanan->pesawat }}</td>
                        <td>{{ $row->harga }}</td>
                        <td>{{ $row->pembayaran }}</td>
                        <td>{{ $row->status }}</td>


                        <td>
                        <form method="post" action="{{ route('transaksi.destroy',[$row->id]) }}" onsubmit="return confirm('Are you sure to delete, {{$row->id}}?')">
                                @csrf
                            {{ method_field('DELETE') }}
                            <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('transaksi.edit',[$row->id]) }}" title="Edit">
                             <i class="fas fa-pencil-alt"></i>
                             </a>

                             <button type="submit" href="{{ route('logout') }}" class="btn btn-outline-secondary btn-sm edit">
                                <i class="fas fa-trash-alt"></i>
                            </button>

                            <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('transaksi.show',[$row->id]) }}" title="Lihat">
                            <i class="fas fa-eye"></i>
                             </a>
                        </td>
                    </tr>
                </form>

                  @endforeach
                                                </tbody>
                                            </table>
                                            {{ $transaksi->appends(Request::all())->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
</div>
@endsection
