<ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
        </div>
      </div>
    </li>
    <li class="nav-item"> 
      <a class="nav-link" href="{{url('/')}}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('obats.index')}}">
          <i class="menu-icon mdi mdi-backup-restore"></i>
          <span class="menu-title">Data Obat</span>
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('transaksis.index')}}">
        <i class="menu-icon mdi mdi-backup-restore"></i>
        <span class="menu-title">Transaksi</span>
      </a>
    </li>
    
   
  </ul>