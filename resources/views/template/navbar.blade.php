<nav class="navbar fixed-top navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/sosmed">Beranda</a>
    <a class="navbar-brand" href="/sosmed/userfeed">UserFeed</a>
    <a class="navbar-brand" href="/sosmed/pengumuman">Pengumuman</a>
    @if($user->id >= 11000000 && $user->id <= 19000000 )
    <a class="navbar-brand" href="/sosmed/ukm">UKM</a>
    @endif
  </div>
</nav>