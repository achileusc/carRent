<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="{{ route('car') }}" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-car"></i>
          <span class="menu-title">Data Mobil</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#" aria-expanded="false" aria-controls="form-elements">
          <i class="menu-icon mdi mdi-account"></i>
          <span class="menu-title">Customer</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#transaction" aria-expanded="false" aria-controls="transaction">
          <i class="menu-icon mdi mdi-cash-multiple"></i>
          <span class="menu-title">Transaksi</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="transaction">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">Penyewaan</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Pengembalian</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>