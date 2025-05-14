<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SI SMP </title>
        <base href="<?php echo base_url('assets') ?>/">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- IonIcons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- My css -->
        <link rel="stylesheet" href="css/adminstyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-dark cust-nav">
            <!-- Left navbar links -->
            <ul class="navbar-nav" style="width: 90%; display: flex; position: relative; align-items: center;">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>   
            <li class="nav-item" style="display: flex; align-items: center; position: absolute; right: 0;">
            <a href="/" class="fst-italic"><i class="fas fa-sign-out-alt"></i> Logout</a>

            </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 cust-sidenav">
            <!-- Brand Logo -->
            <a href="/admin" class="brand-link">
            <img src="/assets/img/UINSMDD.JPG" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Page</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="/assets/img/picture.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                <a href="#" class="d-block">Sungai Rangeh</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                        <a href="#" class="nav-link active" style="color: #fff; background-color: #F2CF30;">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/admin/pegawai" class="nav-link">
                        <p>Data Pegawai</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/guru" class="nav-link">
                        <p>Data Guru</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/siswa" class="nav-link">
                        <p>Data Siswa</p>
                        </a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/tamu" class="nav-link">
                        <p>Data Tamu</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/kegiatan" class="nav-link">
                        <p>Data Kegiatan</p>
                        </a>
                    </li>
                    </ul>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

