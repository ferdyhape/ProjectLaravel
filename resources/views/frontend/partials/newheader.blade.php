<nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="/">XStore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar navbar-inverse" id="navbarSupportedContent">
            <ul class="nav navbar-nav navbar-right text-uppercase">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Beranda" ? 'active' : '') }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Tentang Kami" ? 'active' : '') }}" href="/tentang-kami">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Katalog Produk" ? 'active' : '') }}" href="/katalog-produk">Katalog Produk</a>
                </li>
                @auth
                @if (auth()->user()->level == 'admin')
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-capitalize" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-capitalize" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a>
                        <a class="dropdown-item text-capitalize" href="/u/{{ auth()->user()->id }}/edit"><i class="bi bi-layout-text-sidebar-reverse"></i> Edit Profil</a>
                        <div class="dropdown-divider"></div>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="bi bi-box-arrow-right"></i> Logout</a>
                            </button>
                        </form>
                    </div>
                </li>
                @elseif (auth()->user()->level == 'user')
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-capitalize" href="/member-card"><i class="bi bi-card-text"></i> Member Card</a>
                        <a class="dropdown-item text-capitalize" href="/member-card/cetak"><i class="bi bi-printer-fill"></i> Cetak Member Card</a>
                        <a class="dropdown-item text-capitalize" href="/u/{{ auth()->user()->id }}/edit"><i class="bi bi-person-fill"></i> Edit Profil</a>
                        <div class="dropdown-divider"></div>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="bi bi-box-arrow-right"></i> Logout</a>
                            </button>
                        </form>
                    </div>
                </li>
                @endif
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($title === "Login" ? 'active' : '') }}"></i> Login</a>
                </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>
<style>
    .navbar {
        z-index: 99;
    }
</style>