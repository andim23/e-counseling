<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url('assets/ionicons-2.0.1/css/ionicons.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/dist/css/skins/_all-skins.min.css') ?>" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
        
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
        
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.css"/>
        
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap.css"/>

        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
    <div data-url="<?=base_url()?>" id="codeigniter"></div>
        <!-- Site wrapper -->
        <div class="wrapper">

            <header class="main-header">
                <a href="<?php echo site_url('admin/index') ?>" class="logo"><b>SMANJA</b></a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <!-- Notifications: style can be found in dropdown.less -->
                            
                            <!-- Tasks: style can be found in dropdown.less -->
                            <!-- User Account: style can be found in dropdown.less -->
                            <?php if ($this->session->userdata('group')==3): ?> 
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <i class="fa fa-bell-o"></i>
                                  <span class="label label-warning">absensi</span>
                                </a>

                                <?php 
                                    if(isset($siswaku)){
                                    $no = 1; 
                                    foreach($siswaku as $hasil2){
                                        $sql_sakit = "SELECT * 
                                                  FROM tbl_absensi
                                                  WHERE id_siswa=$hasil2->id_siswa and absensi='S' and tanggal between adddate(now(),-7) and now()";
                                        $sql_ijin = "SELECT * 
                                                  FROM tbl_absensi
                                                  WHERE id_siswa=$hasil2->id_siswa and absensi='I' and tanggal between adddate(now(),-7) and now()";
                                        $sql_alfa = "SELECT * 
                                                  FROM tbl_absensi
                                                  WHERE id_siswa=$hasil2->id_siswa and absensi='A' and tanggal between adddate(now(),-7) and now()";

                                        $sakit = $this->db->query($sql_sakit)->num_rows();
                                        $sakit1 = $this->db->query($sql_sakit)->result_array();
                                        $ijin = $this->db->query($sql_ijin)->num_rows();
                                        $ijin1 = $this->db->query($sql_ijin)->result_array();
                                        $alfa = $this->db->query($sql_alfa)->num_rows();
                                        $alfa1 = $this->db->query($sql_alfa)->result_array();

                                ?>
                                <ul class="dropdown-menu">
                                  <li class="header">Absensi <?= $hasil2->nama_siswa ?> selama 1 minggu</li>
                                  <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                      <li>
                                        <a href="#">
                                          <i class="fa fa-warning text-yellow"></i> <?= $alfa ?> alfa <br>
                                          <?php
                                            foreach ($alfa1 as $al) {
                                                # code...
                                                echo $al['tanggal'].'<br>';
                                            }
                                          ?>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          <i class="fa fa-users text-red"></i> <?= $sakit ?> sakit
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          <i class="fa fa-shopping-cart text-green"></i> <?= $ijin ?> ijin <br>
                                          <?php
                                            foreach ($ijin1 as $ij) {
                                                # code...
                                                echo $ij['tanggal'].'<br>';
                                            }
                                          ?>
                                        </a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li class="footer"><a href="#">View all</a></li>
                                </ul>
                                <?php
                                }}
                                ?>
                              </li>
                              <?php endif ?>
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/images.jpg') ?>" class="user-image" alt="User Image"/>
                                    <span class="hidden-xs"><?php echo $this->session->userdata("nama"); ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/images.jpg') ?>" class="img-circle" alt="User Image" />
                                        <p>
                                            <?php echo $this->session->userdata("nama"); ?> 
                                            <small>Member E-counsuling</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('login/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

        <!-- =============================================== -->
        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/164448-logo.png') ?>" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>E - Counseling </p>

                        <a href="#"><i></i> SMA N 01 Jatibarang</a>
                    </div>
                </div>
                <!-- search form -->
                <!-- <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
                        <span class="input-group-btn">
                            <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form> -->
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">Menu Setup</li>
                    <?php if ($this->session->userdata('group')==1): ?> 
                    <li><a href="<?php echo site_url('admin/index') ?>"><i class="fa fa-dashboard"></i> DashBoard</a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-book"></i> <span>Data Induk</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                     
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('admin/data_siswa') ?>"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
                            <li><a href="<?php echo site_url('admin/data_guru') ?>"><i class="fa fa-circle-o"></i> Data Guru</a></li>
                             <li><a href="<?php echo site_url('admin/data_orangtua') ?>"><i class="fa fa-circle-o"></i> Data Orangtua</a></li>
                        </ul>
                    </li>

                    <li><a href="<?php echo site_url('admin/data_kelas') ?>"><i class="fa fa-table"></i> Data Kelas</a></li>            
                    <li><a href="<?php echo site_url('admin/buat_user') ?>"><i class="fa fa-edit"></i> Buat Akun</a></li>
                <?php endif ?>
                <?php if ($this->session->userdata('group')==2): ?> 
                    <li><a href="<?php echo site_url('admin/index') ?>"><i class="fa fa-dashboard"></i> DashBoard</a></li>
                    <li><a href="<?php echo site_url('admin/data_kelas') ?>"><i class="fa fa-table"></i> Data Kelas</a></li>            
                <?php endif ?>
                 <?php if ($this->session->userdata('group')==3): ?> 
                    <li><a href="<?php echo site_url('admin/index') ?>"><i class="fa fa-dashboard"></i> DashBoard</a></li>
                    <li><a href="<?php echo site_url('admin/data_siswa') ?>"><i class="fa fa-book"></i> Data Siswa</a></li>            
                <?php endif ?>

                 <?php if ($this->session->userdata('group')==4): ?> 
                    <li><a href="<?php echo site_url('admin/index') ?>"><i class="fa fa-dashboard"></i> DashBoard</a></li>
                    <li><a href="<?php echo site_url('admin/data_kelas') ?>"><i class="fa fa-table"></i> Data Kelas</a></li> 
                    <li><a href="<?php echo site_url('admin/rekap_absen') ?>"><i class="fa fa-pie-chart"></i> Rekap Absensi</a></li>            
                <?php endif ?>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
