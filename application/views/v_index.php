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
    <link href="<?php echo base_url('assets');?>/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets');?>/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets') ?>/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets');?>/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets');?>/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('assets');?>/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets');?>/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets');?>/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets');?>/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets');?>/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets');?>/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets');?>/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets');?>/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="<?php echo base_url('assets');?>/css/theme.css" rel="stylesheet" media="all">

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
                              <li class="<?php if($this->uri->segment('2') == '' || $this->uri->segment('2') == 'dashboard' || $this->uri->segment('2') == 'addnews'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin') ?>"><i class="fas fa-home"></i>Home</a> 
                        </li>
                        <li class="<?php if($this->uri->segment('2') == 'produk'){ echo "active" ; } ?>">
                       <a href="<?php echo site_url('admin/produk') ?>"><i class="fas fa-table"></i>Master</a> 
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
                         <li class="<?php if($this->uri->segment('2') == 'pengaturan'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin/pengaturan') ?>">
                                <i class="fas fa-cogs"></i>Pengaturan</a>
                        </li>
                        <li class="<?php if($this->uri->segment('2') == 'slide'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin/slide') ?>">
                                <i class="fas fa-cogs"></i>Slide</a>
                        </li>
                         <li class="<?php if($this->uri->segment('2') == 'ongkoskirim'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin/ongkoskirim') ?>">
                                <i class="fas fa-cogs"></i>Ongkos Kirim</a>
                        </li>
                      
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url('assets');?>/img/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url('assets');?>/img/icon/avatar-06.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url('assets');?>/img/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url('assets');?>/img/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo base_url('assets');?>/img/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo base_url('assets');?>/img/icon/avatar-06.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo base_url('assets');?>/img/icon/avatar-06.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

  <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url('assets');?>/img/logo.png" alt="E-Shopper" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="<?php if($this->uri->segment('2') == 'admin'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin') ?>"><i class="fas fa-home"></i>Home</a> 
                        </li>
                        <li class="<?php if($this->uri->segment('2') == '' || $this->uri->segment('2') == 'produk' || $this->uri->segment('2') == 'tambahproduk'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin/produk') ?>"><i class="fas fa-table"></i>Master</a> 
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
                         <li class="<?php if($this->uri->segment('2') == 'pengaturan'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin/pengaturan') ?>">
                                <i class="fas fa-cogs"></i>Pengaturan</a>
                        </li>
                        <li class="<?php if($this->uri->segment('2') == 'slide'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin/slide') ?>">
                                <i class="fas fa-cogs"></i>Slide</a>
                        </li>
                         <li class="<?php if($this->uri->segment('2') == 'ongkir'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin/ongkir') ?>">
                                <i class="fas fa-cogs"></i>Ongkos Kirim</a>
                        </li>
                      
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
   <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"><br><br><br>
        <!-- <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>&nbsp;<?php //echo $judul; ?></a></li>
                <li class="active"><?php //echo $sub_judul; ?></li>&nbsp;&nbsp;&nbsp;&nbsp;
            </ol>
        </div> -->
        <?php echo $this->load->view($content);  ?><br><br>
    </div>
              <!-- Footer -->
     <!-- Jquery JS-->
    <script src="<?php echo base_url('assets');?>/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('assets');?>/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url('assets');?>/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url('assets');?>/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url('assets');?>/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url('assets');?>/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url('assets');?>/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url('assets');?>/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url('assets');?>/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url('assets');?>/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url('assets');?>/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url('assets');?>/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url('assets');?>/vendor/select2/select2.min.js"> </script>
    <script src="<?php echo base_url('assets');?>/js/bootstrap-datepicker.js"></script>
   
    <script src="<?php echo base_url('assets');?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets');?>/js/bootstrap-table.js"></script>
    <!-- Main JS-->
    <script src="<?php echo base_url('assets');?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets');?>/js/jquery.form-validator.min.js' ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets');?>/js/jquery.priceformat.min.js' ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets');?>/js/jquery.dataTables.js' ?>"></script> 

<script type="text/javascript" src="<?php echo base_url('assets');?>/js/dataTables.bootstrap.js' ?>"></script> 

<script type="text/javascript" src="<?php echo base_url('assets');?>/js/dataTables.responsive.min.js' ?>"></script> 

<script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('js/jquery.min.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('js/jquery.ui.datepicker.js')?>"></script>


<script type="text/javascript">
   $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</body>

</html>
