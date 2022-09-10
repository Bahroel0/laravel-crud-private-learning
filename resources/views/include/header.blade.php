<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Belajar Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item {{ Request::is('buku') ? 'active' : '' }}">
          <a class="nav-link" href="{{route('buku.index')}}">Buku</a>
        </li>
        <li class="nav-item {{ Request::is('penulis') ? 'active' : '' }}">
          <a class="nav-link" href="{{route('penulis.index')}}">Penulis</a>
        </li>
        <li class="nav-item {{ Request::is('hewan') ? 'active' : '' }}">
          <a class="nav-link" href="{{route('hewan.index')}}">Hewan</a>
        </li>
      </ul>
    </div>
  </nav>