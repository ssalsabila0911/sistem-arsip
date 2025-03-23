<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - Sistem Informasi Arsip Digital</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.transitions.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/meanmenu.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/educate-custon-icon.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/morrisjs/morris.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/scrollbar/jquery.mCustomScrollbar.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/metisMenu/metisMenu.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/metisMenu/metisMenu-vertical.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/calendar/fullcalendar.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/calendar/fullcalendar.print.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/DataTables/datatables.css'); ?>">

    <script src="<?php echo base_url('assets/js/vendor/modernizr-2.8.3.min.js'); ?>"></script>

</head>
<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="../assets/img/logo/logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="../assets/img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">

                <nav class="sidebar-nav left-sidebar-menu-pro" style="margin-top: 30px">

                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="<?php echo base_url('admin/dashboard'); ?>">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('admin/kategori'); ?>" aria-expanded="false"><span class="educate-icon educate-course icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Kategori Surat</span></a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('admin/petugas'); ?>" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Petugas</span></a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('admin/unit'); ?>" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Unit</span></a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('admin/arsip'); ?>" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Arsip</span></a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('auth/logout'); ?>" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Logout</span></a>
                        </li>

                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href=""><img class="main-logo" src="../assets/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-12 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="educate-icon educate-nav"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">
                                        <ul class="nav navbar-nav mai-top-nav">
                                            <li class="nav-item"><a href="#" class="nav-link">Sistem Informasi Arsip Digital</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="header-top-menu tabl-d-n" style="float: right; margin-right: 20px;">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu ">
                                            <li class="nav-item dropdown">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <span class="admin-name"><b>
                                                    <?= $this->session->userdata('nama'); ?></b></span>
                                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right animated zoomIn">
                                                    <li><a href="<?php echo base_url('admin/profil'); ?>"><i class="edu-icon edu-home-admin"></i> Profil Saya</a></li>
                                                    <li><a href="<?php echo base_url('auth/logout'); ?>" onclick="return confirm('Apakah Anda yakin ingin keluar?');"><i class="edu-icon edu-locked"></i> Log Out</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li class="active">
                                    <a href="">
                                        <span class="educate-icon educate-home icon-wrap"></span>
                                        <span class="mini-click-non">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" aria-expanded="false"><span class="educate-icon educate-course icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Kategori Surat</span></a>
                                </li>

                                <li>
                                    <a href="" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Petugas</span></a>
                                </li>

                                <li>
                                    <a href="" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Unit</span></a>
                                </li>

                                <li>
                                    <a href="" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Arsip</span></a>
                                </li>

                                <li>
                                    <a href="<?= base_url('auth/logout'); ?>" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Logout</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


