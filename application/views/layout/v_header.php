<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>E  counseling SMANJA</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
</head>
<body>
	<div id="wrapper">
		<header>
			<hgroup>
				<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
				<h3>Membuat template sederhana codeigniter</h3>
			</hgroup>
			<?php if ($this->session->userdata('group')==1): ?> 
				<nav>
				<ul>
					<li><a href="<?php echo base_url().'admin/data_guru' ?>">Data Guru</a></li>
					<li><a href="<?php echo base_url().'admin/data_siswa' ?>">Data Siswa</a></li>
					<li><a href="<?php echo base_url().'admin/data_orangtua' ?>">Data Orang Tua</a></li>
					<li><a href="<?php echo base_url().'admin/data_kelas' ?>">Data Kelas</a></li>
					<li><a href="<?php echo base_url().'admin/buat_user' ?>">Buat user</a></li>
					<li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
				</ul>
			</nav>			
			<?php endif ?>
			<?php if ($this->session->userdata('group')==2): ?> 
			<nav>
				<ul>
					<li><a href="<?php echo base_url().'admin/data_orangtua' ?>">Data Orang Tua</a></li>
					<li><a href="<?php echo base_url().'admin/laporan_siswa' ?>">Laporan siswa</a></li>
					<li><a href="<?php echo base_url().'admin/data_kelas' ?>">Data Kelas</a></li>
					<li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
				</ul>
			</nav>
			<?php endif ?>
			<?php if ($this->session->userdata('group')==3): ?> 
			<nav>
				<ul>
					<li><a href="<?php echo base_url().'admin/data_siswa' ?>">Data Siswa</a></li>
					<li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
				</ul>
			</nav>
			<?php endif ?>
			<?php if ($this->session->userdata('group')==4): ?> 
			<nav>
				<ul>
					<li><a href="<?php echo base_url().'admin/data_kelas' ?>">Data Kelas</a></li>
					<li><a href="<?php echo base_url().'admin/rekap_absen' ?>">Rekap Absensi</a></li>
					<li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
				</ul>
			</nav>
			<?php endif ?>
			<div class="clear"></div>
		</header>