<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary mx-auto ininavbar">
    <div class="container">
      <button
        data-mdb-collapse-init
        class="navbar-toggler"
        type="button"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
            src="{{ asset('assets/logo-telkom-university-surabaya.webp') }}"
            height="60"
          />
        </a>

        <ul class="navbar-nav me-auto mb-2 mx-auto mb-lg-0">
          <li class="nav-item">
            <a class="navbartext nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}" href="/">DASHBOARD</a>
          </li>
          <li class="nav-item">
            <a class="navbartext nav-link" href="#">INFORMASI BARANG</a>
          </li>
          <li class="nav-item">
            <a class="navbartext nav-link" href="#">PINJAM BARANG</a>
          </li>
          <li class="nav-item">
            <a class="navbartext nav-link" href="#">RIWAYAT PEMINJAMAN</a>
          </li>
          <li class="nav-item">
            <a class="navbartext nav-link" href="#">PROFIL</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
