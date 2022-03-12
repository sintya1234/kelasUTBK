<nav class="nav navbar-expand-sm">
    <div class="d-flex bg-navbar w-100 pt-3 px-2 pb-2 align-items-center">
      <a href="/" class="navbar-brand d-flex justify-align-start mx-2 w-25 fw-bold">
        <img src="/image/logo.png" width="30" height="30" class="mr-3 ms-1" >
        Online Class
      </a>

      <div class="collapse navbar-collapse d-flex justify-content-end w-80" id="collapsibleNavbar">
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
        </ul>

        <a href="#" class="mx-0"><img src="#" class="/image/profpic.png"></a>

      </div>
    </div>
</nav>
