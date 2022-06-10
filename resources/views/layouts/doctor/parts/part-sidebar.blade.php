<nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item active">
            <a class="nav-link" href="/admin">
                <i class="fa fa-home" style="font-size: 20px;"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/akun/pelanggan">
                <i class="fa fa-users" style="font-size: 20px;"></i>
                <span class="menu-title">Data Pelanggan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/pesan/masuk">
                <i class="fa fa-tag" style="font-size: 20px;"></i>
                <span class="menu-title">Pemesanan Masuk</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/kontak">
                <i class="fa fa-book" style="font-size: 20px;"></i>
                <span class="menu-title">Kontak Sarana Masuk</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out" style="font-size: 20px;"></i>
                <span class="menu-title">Keluar <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></span>
            </a>
        </li>
    </ul>
</nav>