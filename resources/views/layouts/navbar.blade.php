<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <a href="{{route('home')}}" class="navbar-brand ml-lg-3">
            <h1 class="m-0 text-uppercase text-primary"><img src="{{asset('images/logo-nu.png')}}" alt="Logo NU" style="height: 80px; width: auto;"></h1>
            {{-- <h1 class="m-0 text-uppercase text-primary"><img src="{{asset('images/logo-nu.png')}}" alt=""></h1> --}}
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{route('home')}}" class="nav-item nav-link {{ request()->is('/*') ? 'active' : '' }}">Beranda</a>
                <a href="{{route('about')}}" class="nav-item nav-link {{ request()->is('tentang*') ? 'active' : '' }}">Tentang</a>
                <a href="{{route('cabang')}}" class="nav-item nav-link {{ request()->is('hikmah*') ? 'active' : '' }}">Hikmah</a>
                <a href="{{route('contact')}}" class="nav-item nav-link {{ request()->is('kontak*') ? 'active' : '' }}">Kontak</a>
            </div>
            <a href="{{route('team')}}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Kelompok IV</a>
        </div>
    </nav>
</div>
