@extends('admin.admin_master')
@section('admin')

<!-- ini untuk isi home -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Tambah User</h2>
                                        <form class="custom-validation" action="{{ route('user1.store') }}" method="POST"  novalidate="">
                                            @csrf
                                            <div class="mb-3">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" required="" placeholder="silahkan masukan nama" name="name">
                                            </div>
                                            <div class="mb-3">
                                                <label>Username</label>
                                                <div>
                                                    <input type="username" class="form-control" required="" name="username" parsley-type="Email" placeholder="silahkan masukkan username yg benar">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>E-Mail</label>
                                                <div>
                                                    <input type="email" class="form-control" required="" name="email" parsley-type="Email" placeholder="silahkan masukkan email yg benar">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Level</label>
                                                <select name="level" class="form-select" aria-label="Default select example">
                                                    <option selected="">Pilih Level</option>
                                                    <option value="1">Admin</option>
                                                    <option value="2">User</option>
                                                    </select>
                                            </div>

                                            <div class="mb-3">
                                                <label>Password</label>
                                                <div>
                                                    <input type="password" class="form-control" required="" name="password" parsley-type="Password" placeholder="silahkan masukkan Password">
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
