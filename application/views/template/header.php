<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>E-Shopper</title>

    <!-- Fontfaces CSS-->
     <link rel="shortcut icon" type="image/icon" href="<?php echo base_url('assets/img/shop.png')?>"/>
    <link href="<?php echo base_url('');?>/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('');?>/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('') ?>/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('');?>/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('');?>/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('');?>/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('');?>/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('');?>/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('');?>/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('');?>/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('');?>/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('');?>/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('');?>/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/datatables/datatables.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/vendor/datatables/plugins/bootstrap/datatables.bootstrap.css')?>" rel="stylesheet" type="text/css" />
    <!-- Main CSS-->
    <link href="<?php echo base_url('');?>/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo base_url('assets');?>/img/logo.png" alt="E-Shopper" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
             <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                              <li class="<?php if($this->uri->segment('2') == 'admin'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin') ?>"><i class="fas fa-home"></i>Home</a> 
                        </li>
                        <li class="<?php if($this->uri->segment('2') == '' || $this->uri->segment('2') == 'produk' || $this->uri->segment('2') == 'tambahproduk'|| $this->uri->segment('2') == 'editproduk'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin/produk') ?>"><i class="fas fa-table"></i>Master</a> 
                        </li>
                        <li class="<?php if($this->uri->segment('2') == 'stok'|| $this->uri->segment('2') == 'editstok'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin/stok') ?>">
                                <i class="fas fa-table"></i>Update Stok</a>
                        </li>
                        <li class="<?php if($this->uri->segment('2') == 'order'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin/order') ?>">
                                <i class="fas fa-suitcase"></i>Order</a>
                        </li>
                        <li class="<?php if($this->uri->segment('2') == 'konfirmasi'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin/konfirmasi') ?>">
                                <i class="far fa-check-square"></i>Data Member</a>
                        </li>
                       <li class="<?php if($this->uri->segment('2') == 'konfirmasireal'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin/konfirmasireal') ?>">
                                <i class="fas fa-users"></i>Konfirmasi</a>
                        </li>
                         <li class="<?php if($this->uri->segment('2') == 'laporan'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin/laporan') ?>">
                                <i class="fas fa-print"></i>Laporan</a>
                        </li>
                        <li class="<?php if($this->uri->segment('2') == 'slide'|| $this->uri->segment('2') == 'editslide'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin/slide') ?>">
                                <i class="fas fa-cogs"></i>Slide</a>
                        </li>
                         <li class="<?php if($this->uri->segment('2') == 'ongkir'|| $this->uri->segment('2') == 'inputprovinsi'|| $this->uri->segment('2') == 'tambahkota'|| $this->uri->segment('2') == 'edit_kota'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin/ongkir') ?>">
                                <i class="fas fa-cogs"></i>Ongkos Kirim</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>