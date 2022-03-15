{{-- <nav class="nav navbar-expand-sm bg-navbar">
    <div class="pt-2 px-2 pb-2 d-flex">
      <a href="/" class="navbar-brand d-flex justify-align-start mx-2 fw-bold">
        <img src="/image/logo.png" width="30" height="30" class="me-3 ms-1" >
        Online Class
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-end float-end" id="collapsibleNavbar">
        <ul class="navbar-nav mx-4">
          <li class="nav-item mx-1 ">
            <a class="nav-link {{ $page == "beranda" ? "active" : "" }}" href="/">Beranda</a>
          </li>
          <li class="nav-item mx-1 ">
            <a class="nav-link {{ $page == "tryout" ? "active" : "" }}" href="#">Tryout</a>
          </li>
          <li class="nav-item mx-1 ">
            <a class="nav-link {{ $page == "materi" ? "active" : "" }}" href="#">Materi</a>
          </li>
          <li class="nav-item mx-1 ">
            <a class="nav-link {{ $page == "kalender" ? "active" : "" }}" href="#">Kalender</a>
          </li>
          <li class="nav-item mx-1 ">
            <a class="nav-link {{ $page == "bank_soal" ? "active" : "" }}" href="#">Bank Soal</a>
          </li>
          <li class="nav-item mx-2">
            <a href="#" class="nav-link">
              <img src="/image/profpic.png" width="35" height="35" class="prof-img">
            </a>
          </li>
        </ul>
      </div>
    </div>
</nav> --}}

<nav class="navbar navbar-expand-sm bg-navbar">
  <div class="container-fluid">
    <a class="navbar-brand d-flex mx-2 nav-logo-txt" href="/">
      <img src="/image/logo.png" width="30" height="30">
      Online Class
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <i class="bi bi-list menu-icon"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item mx-1 ">
          <a class="nav-link {{ $page == "beranda" ? "active" : "" }}" href="/">Beranda</a>
        </li>
        <li class="nav-item mx-1 ">
          <a class="nav-link {{ $page == "tryout" ? "active" : "" }}" href="/dashboard/tryout">Tryout</a>
        </li>
        <li class="nav-item mx-1 ">
          <a class="nav-link {{ $page == "materi" ? "active" : "" }}" href="#">Materi</a>
        </li>
        <li class="nav-item mx-1 ">
          <a class="nav-link {{ $page == "kalender" ? "active" : "" }}" href="#">Kalender</a>
        </li>
        <li class="nav-item mx-1 ">
          <a class="nav-link {{ $page == "bank_soal" ? "active" : "" }}" href="#">Bank Soal</a>
        </li>
        <li class="nav-item dropdown justify-content-end">
          <a class="nav-link dropdown-toggle d-flex align-items-center" id="dropdownMenuLink" href="#" role="button" data-bs-toggle="dropdown">
            <img src="/image/profpic.png" width="35" height="35" class="prof-img">
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
            @if ($user != null)
              <li><a class="dropdown-item" href="#">Setting</a></li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            @else
              <li><a class="dropdown-item" href="/login">Login</a></li>
            @endif
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
