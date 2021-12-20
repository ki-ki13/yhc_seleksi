
<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark sticky-top align-items-start sidebar sidebar-dark accordion bg-gradient-success p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-graduation-cap"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Mahasiswa</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="beranda"){echo "active";}?>"  href="<?= site_url('beranda')?>"><i class="fa fa-th-large"></i><span>Beranda</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="mahasiswa"){echo "active";}?>" href="<?= site_url('mahasiswa')?>"><i class="fa fa-users"></i><span>Mahasiswa</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php if($this->uri->segment(1)=="nilai"){echo "active";}?>" href="<?= site_url('nilai')?>"><i class="fas fa-table"></i><span>Nilai Mahasiswa</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('auth/logout')?>"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small"><?= $username?></span><img class="border rounded-circle img-profile" src="<?= base_url()?>assets/img/avatars/<?= $foto?>"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= site_url('auth/logout')?>"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                