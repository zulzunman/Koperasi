<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url()?>">
                <div class="sidebar-brand-icon rotate-n-15">
                
                  <i class="fas fa-fw fa-wallet"></i>
                </div>
                <div class="sidebar-brand-text mx-3">KOPERASI UNLA</div>
            </a>

            <!-- Divider / Garis-->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Administrator
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url()?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <?php if ($this->session->userdata('tipe')=='Admin') { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('anggota')?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Kelola Anggota</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('user')?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Kelola Pengguna</span></a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="<?=site_url('kategori')?>">
                    <i class="fas fa-fw fa-code-branch"></i>
                    
                  
                    <span>Kelola Kategori</span></a>
            </li> 

            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('simpan/akhir')?>">
                    <i class="fas fa-fw fa-money-bill"></i>
                    
                  
                    <span>Jumlah Saldo</span></a>
            </li> 
            <?php } ?>


            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User
            </div>


            <!-- Nav Item - Charts -->
           

            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('simpan')?>">
                    <i class="fas fa-fw fa-piggy-bank"></i>
                    <span>Simpan</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('pinjam')?>">
                    <i class="fas fa-fw fa-money-bill"></i>
                    <span>Pinjam</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('pinjam/angsuran')?>">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Laporan Angsur</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('auth/changepass')?>">
                    <i class="fas fa-fw fa-key"></i>
                    <span>Ubah Password</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('auth/changephoto')?>">
                    <i class="fas fa-fw fa-images"></i>
                    <span>Ubah Foto</span></a>
            </li>

            <!-- Divider / Garis-->
            <hr class="sidebar-divider">


            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('auth/logout')?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Keluar</span></a>
            </li>

      

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->