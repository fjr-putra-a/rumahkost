<!--Main Navigation-->
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3 shadow-none">
    <div class="container">

      <a class="navbar-brand" href="#!">
        Cost <span style="font-size:25px" class="font-weight-bold">Kost</span>an
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navResponsive" aria-controls="navResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fas fa-equals"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="navResponsive">
        <ul class="navbar-nav ml-auto"></ul>
        <ul class="navbar-nav nav-flex-icons">

          <!-- Jika ada sesi Login -->
          <li class="nav-item dropdown ml-auto">
            <a class="nav-link mr-1" id="kost" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span style="font-size:15px" class="text-white mr-2 font-weight-regular"></span>
              <img src="..\..\..\public\img\fotouser\default.png" class="rounded border" height="35">
            </a>

            <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="kost">
              <a class="dropdown-item" href="#">Edit Profile</a>
              <a class="dropdown-item" href="#">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!--Main Navigation-->

<!-- Nav -->
<div class="white shadow-sm sticky-top" style="z-index:1">
  <div class="container py-1">
    <ul class="nav md-tabs bg-transparent shadow-none mx-0 mb-0 pl-0">

      <li class="nav-item mr-2">
        <a href="dashboard.php" class="nav-link text-white bg-primary rounded ">Dashboard</a>
      </li>

      <li class="nav-item dropdown mr-2">
        <a class="nav-link dropdown-toggle text-primary" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manajemen</a>
        <div class="dropdown-menu dropdown-primary">
          <a href="v_fasilitas.php" class="dropdown-item">Fasilitas</a>
          <a href="v_kamar.php" class="dropdown-item">Kamar</a>
          <div class="dropdown-divider"></div>
          <a href="v_biaya.php" class="dropdown-item">Token Listrik</a>
        </div>
      </li>

      <li class="nav-item dropdown mr-2">
        <a class="nav-link dropdown-toggle text-primary" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Transaksi</a>
        <div class="dropdown-menu dropdown-primary">
          <a href="#!" class="dropdown-item">Kamar</a>
          <a href="v_transaksi_token.php" class="dropdown-item">Listrik</a>
        </div>
      </li>

      <li class="nav-item dropdown mr-2">
        <a class="nav-link dropdown-toggle text-primary" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Akun</a>
        <div class="dropdown-menu dropdown-primary">
          <a href="#!" class="dropdown-item">Pemilik</a>
          <a href="v_penyewa.php" class="dropdown-item">Penyewa</a>
        </div>
      </li>

      <li class="nav-item py-1 ml-auto">
        <input class="form-control form-control-sm p-3" type="text" placeholder="Search" style="width:170px">
      </li>

    </ul>
  </div>
</div>
<!-- Akhir Nav -->