<nav class="navbar navbar-expand-md bg-white navbar-light" id="navTop">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="{{url('/')}}"> <span> Tiket Pesawat Online</span></a>
            
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav navbar-primary w-100 ml-auto">
            <li class="nav-item">
                <a @if($curpage == "about-us") class="nav-link nav-active" @else class="nav-link" @endif href="/profil/tentang-kami">Tentang Kami</a>
            </li>
            <li class="nav-item">
                <a @if($curpage == "about-us") class="nav-link nav-active" @else class="nav-link" @endif href="/profil/video">Video Pembuatan Web Tiket Pesawat</a>
            </li>
          
            <!-- <li class="nav-item">
                <a @if($curpage == "contact-us") class="nav-link nav-active" @else class="nav-link" @endif href="/kontak/create">Kontak Sarana</a>
            </li> -->
            <li class="nav-item">
                <a @if($curpage == "profile") class="nav-link nav-active dropdown-toggle" @else class="nav-link dropdown-toggle" @endif href="#" id="navbardrop" data-toggle="dropdown">
                    Masuk
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/login">Login</a>
                    <a class="dropdown-item" href="/register">Daftar</a>
                </div>
            </li>
        </ul>
        </div>
    </div>
</nav>