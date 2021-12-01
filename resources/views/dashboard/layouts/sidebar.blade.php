<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/barang*') ? 'active' : '' }}" href="/dashboard/barang">
                    <span data-feather="box"></span>
                    Barang
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/transaksi-suplier*') ? 'active' : '' }}" href="/dashboard/transaksi-suplier">
                    <span data-feather="shopping-cart"></span>
                    Transaksi Suplier
                </a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link border-0 bg-transparent">
                        <i data-feather="log-out"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</nav>