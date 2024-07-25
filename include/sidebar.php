<?php 
error_reporting(0);
?>
<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
					<li class="dropdown header-profile">
						<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
							<?php  if($_SESSION['foto'] == ''){ ?>
							<img src="images/profile/profil.jpg" width="20" alt=""/>
							<?php }else{ ?>
                            <img src="./foto/<?php echo $_SESSION['foto']; ?>" width="20" alt=""/>
							<?php } ?>
							<div class="header-info ms-3">
								<span class="font-w600 ">Hi,<b> <?php echo $_SESSION['nama']; ?></b></span>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="./profile.php" class="dropdown-item ai-icon">
								<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
								<span class="ms-2">Profile </span>
							</a>
							<a href="./logout.php" class="dropdown-item ai-icon">
								<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
								<span class="ms-2">Logout </span>
							</a>
						</div>
					</li>
					<li><a href="home.php" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
					
					<?php if ($_SESSION['role'] == '0' || $_SESSION['role'] == '1'){ ?>
                    <li><a href="produk.php" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-017-clipboard"></i>
							<span class="nav-text">Produk</span>
						</a>
					</li>
                    <li><a href="kategori.php" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-043-menu"></i>
							<span class="nav-text">Kategori</span>
						</a>
					</li>
                    <li><a href="ruangan.php" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-home-1"></i>
							<span class="nav-text">Ruangan</span>
						</a>
					</li>
                    <li><a href="supplier.php" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-news"></i>
							<span class="nav-text">Supplier</span>
						</a>
					</li>
					<?php } ?>
					<?php if ($_SESSION['role'] == '0' || $_SESSION['role'] == '1'){ ?>
                    <li><a href="user.php" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-381-user"></i>
						<span class="nav-text">User</span>
						</a>
					</li>
					<?php } ?>
					<?php if ($_SESSION['role'] == '0' && $_SESSION['username'] == 'admin'){ ?>
					<li><a href="log.php" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-088-time"></i>
						<span class="nav-text">Log System</span>
					</a>
					</li>
					<?php } ?>
                </ul>
				<div class="copyright">
					<p><strong>Aplikasi Stok Barang</strong> © <?php echo date('Y'); ?> All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by Budi Luhur</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->