<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Home</div>
                    <a class="nav-link" href="{{route('dashboard')}}">
                        <div class="sb-nav-link-icon"><i class="ri-dashboard-fill"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="ri-menu-add-line"></i></div>
                        Menu
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            @can('user')
                            <a class="nav-link" href="/user1">User</a>
                            <a class="nav-link" href="/pemesanan">Pemesanan</a>
                            <a class="nav-link" href="/detail_pemesanan">Detail Pemesanan</a>
                            <a class="nav-link" href="/transaksi">Transaksi</a>
                            <a class="nav-link" href="/laporan">Laporan</a>

                            @endcan
                            @can('admin')
                            <a class="nav-link" href="/user">Admin</a>
                            @endcan

                            {{-- <a class="nav-link" href="">Produk</a>
                            <a class="nav-link" href="">Order</a>
                            <a class="nav-link" href="">Pembayaran</a>
                            <a class="nav-link" href="">Detail Pembayaran</a> --}}

                        </nav>
                    </div>
        </nav>
    </div>
