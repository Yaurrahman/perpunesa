<nav class="navbar navbar-expand-lg navbar-light shadow-5-strong">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ URL::asset('assets/logo-navbar.png') }}" alt="" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page"
                        href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link "
                        href="/perpustakaan">Perpustakaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/buku">Buku</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/keranjang"><i class="bi bi-cart2 icon-nav"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="bi bi-coin icon-nav"></i>
                            {{ auth()->user()->poin }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle icon-nav"></i>
                            <span>{{ auth()->user()->username }}</span>
                        </a>
                        <ul class="dropdown-menu ms-auto mb-2 mb-lg-0" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/peminjaman"><i
                                        class="bi bi-bookmark-fill icon-nav me-2"></i>Peminjaman</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right icon-nav me-2"></i>Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link ms-3 me-2 d-flex justify-content-center fw-bold text-uppercase" href="/login">
                            <div class="icon-navbar nav-item" style="cursor: pointer">
                                <i class="bi bi-person-circle icon-nav me-2"></i>Login
                            </div>
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>