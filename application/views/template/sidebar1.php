<!-- Sidebar <link rel="stylesheet" href="<?php echo base_url()?>admin/login/css/style.css"> -->
<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark shadow accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<br><br>
	<a class="sidebar-brand d-flex align-items-center justify-content-center;" href="<?= base_url('Admin'); ?>"><img class="img-fluid" src=" <?=base_url('assets/img/logo.png')?> "
				style="width: 130px; height: 116px; margin-left: 30px; top: 50px; right: 100px; position: center">
		<div class="sidebar-brand-icon"></div>
		<div class="sidebar-brand-text mx-3"></div>
	</a>

	<!-- Divider 
	<hr class="sidebar-divider">-->

	<li class="nav-item">
	<!-- Nav Item - Dashboard 
	
		<a class="nav-link">
			<img class="img-fluid" src=" <?=base_url('assets/img/logo.png')?> "
				style="width: 114px; height: 100px; left: 120px; top: 20px; position: center">
		</a>-->
	</li>

	<br><br>

	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('Admin'); ?>">
			<i class="fas fa-home" style="color: #000000"></i>
			<span style="color: #000000"> Homepage</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Profile -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('Admin/profile');?>">
			<i> <img src=" <?=base_url('assets/img/group.svg')?> " style="height : 24px; width :18.41px"> </i>
			<span style="color: #000000">Data Warga</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Profile -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('Admin/edit');?>">
			<i class="fas fa-fw fa-user" style="color: #000000"></i>
			<span style="color: #000000">Data Admin</span></a>
	</li>


	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Profile -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('Admin/Menu');?>">
			<i> <img src="<?=base_url('assets/img/folder (1).svg')?>" style="height : 24px; width :18.41px"> </i>
			<span style="color: #000000">Data Rekap</span></a>
	</li>


	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Profile -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('auth/logout');?>">
			<i class="fas fa-fw fa-sign-out-alt" style="color: #000000"></i>
			<span style="color: #000000">Logout</span></a>
	</li>


	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->
