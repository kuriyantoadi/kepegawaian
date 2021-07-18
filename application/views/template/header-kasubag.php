<?php
$ses_nama = $this->session->userdata('ses_username');
$ses_id = $this->session->userdata('ses_id');

?>


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
	<link href="<?= base_url() ?>assets/datepicker/libraries/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

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
						<a class="sidebar-link" href="<?= base_url() ?>C_kasubag">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>
						<a class="sidebar-link" href="<?= base_url() ?>C_kasubag/pengumuman">
							<i class="align-middle" data-feather="alert-circle"></i> <span class="align-middle">Pengumuman</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url() ?>C_kasubag/tampil_pns">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Data PNS</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url() ?>C_kasubag/lap_berkas">
							<i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Laporan Upload Berkas</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url() ?>C_kasubag/belum_upload">
							<i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Belum Upload Berkas</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url() ?>C_operator/profil_user">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profil User</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url() ?>Login_operator/logout">
							<i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Logout</span>
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
							<a class="nav-link d-none d-sm-inline-block" href="#" data-toggle="dropdown">
								<span class="text-dark"><?= $ses_nama ?></span>
								<img src="<?= base_url() ?>assets/img/avatars/avatar.jpg" class="avatar img-fluid rounded mr-1" alt="Charles Hall" />
							</a>

						</li>
					</ul>
				</div>
			</nav>
