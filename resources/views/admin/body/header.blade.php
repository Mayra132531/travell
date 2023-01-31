<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3 text-center" href="{{ route('dashboard') }}">LAT LSP</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto me-3 me-lg-4">

@php
$id = Auth::user()->id;
$admindata = App\Models\User::find($id);
@endphp
<div class="dropdown d-inline-block user-dropdown">
    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="rounded-circle header-profile-user" src="{{ (!empty($admindata->profile_image))? url('upload/admin_images/'.$admindata->profile_image):url('upload/no_image.png') }}"
            alt="Header Avatar">
        <span class="d-none d-xl-inline-block ms-1">{{$admindata->name}}</span>
        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-end">
        <!-- item-->
        <a class="dropdown-item" href="{{route('admin.profile')}}"><i class="ri-user-line align-middle me-1"></i> Profil</a>

        <a class="dropdown-item" href="{{route('change.password')}}"><i class="ri-key-line align-middle me-1"></i> Ubah Password</a>

        <div class="dropdown-divider"></div>
        <a class="dropdown-item text-danger" href="{{route('admin.logout')}}"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Keluar</a>
    </div>
</div>



                    </div>
                </div>
            </nav>
