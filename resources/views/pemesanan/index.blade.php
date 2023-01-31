@extends('admin.admin_master')
@section('admin')


<!-- ini untuk isi home -->
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                    <h4 class="card-title">Data Pemesanan</h4>
                        <!-- end page title -->
                        <div>
                        <a class="btn btn-primary waves-effect waves-light" href="{{ route('pemesanan.create')}}" role="button"> Create (+)</a>
                        </p>
                        </div>

                        <!-- fungsi cart -->
                        <form method="get" action="{{route('pemesanan.index')}}">
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
                                                        <th>Email</th>
                                                        <th>No Telp</th>
                                                        <th>Kota Asal</th>

                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($pemesanan as $row)
                    <tr>
                        <td>{{ $loop->iteration + ($pemesanan->perpage() *  ($pemesanan->currentPage() -1)) }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->no_telp }}</td>
                        <td>{{ $row->kota_asal }}</td>

                        <td>
                        <form method="post" action="{{ route('pemesanan.destroy',[$row->id]) }}" onsubmit="return confirm('Are you sure to delete, {{$row->name}}?')">
                                @csrf
                            {{ method_field('DELETE') }}
                            <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('pemesanan.edit',[$row->id]) }}" title="Edit">
                             <i class="fas fa-pencil-alt"></i>
                             </a>

                             <button type="submit" href="{{ route('logout') }}" class="btn btn-outline-secondary btn-sm edit">
                                <i class="fas fa-trash-alt"></i>
                            </button>

                            <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('pemesanan.show',[$row->id]) }}" title="Lihat">
                            <i class="fas fa-eye"></i>
                             </a>
                        </td>
                    </tr>
                </form>

                  @endforeach
                                                </tbody>
                                            </table>
                                            {{ $pemesanan->appends(Request::all())->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
</div>
@endsection
