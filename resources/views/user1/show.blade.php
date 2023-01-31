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
                                        <h4 class="card-title">Tabel User</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                            <tr>
                       <td>Kode User</td>

                       <td>{{ $user->id }}</td>
                   </tr>
                   <tr>
                       <td>Nama</td>

                       <td>{{ $user->name }}</td>
                   </tr>
                   <tr>
                    <td>Username</td>

                    <td>{{ $user->username }}</td>
                </tr>

                   <tr>
                       <td>Email</td>

                       <td>{{ $user->email }}</td>
                   </tr>
                                            </table>
                                            <a class="btn btn-primary waves-effect waves-light" href="/user" role="button">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
</div>
@endsection
