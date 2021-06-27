<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="<?= base_url() ?>assets/img/icons/icon-48x48.png" />

	<title>Kepegawaian</title>

	<!-- datapicker -->
	<!-- <link href="<?= base_url() ?>assets/datepicker/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="<?= base_url() ?>assets/datepicker/libraries/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">



	<link href="<?= base_url() ?>assets/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="align-middle">Sistem Informasi</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url() ?>C_page">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url() ?>C_skumptk">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">SKUMPK</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url() ?>C_pegawai">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">KGB</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url() ?>C_pegawai">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Kenaikan Pangkat</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url() ?>C_pegawai">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Cuti Tahunan</span>
						</a>
					</li>


			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">

						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
								<img src="<?= base_url() ?>assets/img/avatars/avatar.jpg" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="pages-settings.html"><i class="align-middle mr-1" data-feather="settings"></i> Ganti Password</a>
								<a class="dropdown-item" href="Login_operator/logout">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
