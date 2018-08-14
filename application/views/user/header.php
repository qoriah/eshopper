<!DOCTYPE html>
<html lang="en">
<head>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url('assets/img/shop.png')?>"/>
    <link href="<?php echo base_url('assets');?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets');?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets');?>/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url('assets');?>/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url('assets');?>/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url('assets');?>/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url('assets');?>/css/responsive.css" rel="stylesheet">
	 <link href="<?php echo base_url('');?>/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('');?>/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">     
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('images/ico/apple-touch-icon-144-precomposed.png')?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('images/ico/apple-touch-icon-114-precomposed.png')?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('images/ico/apple-touch-icon-72-precomposed.png')?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('images/ico/apple-touch-icon-57-precomposed.png')?>">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> (021) 22741405</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
						
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php echo site_url('home') ?>"><img src="<?php echo base_url('images/home/logo.png')?>" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="<?php echo site_url('home/cart') ?>"><i class="fa fa-shopping-cart"></i><span class="cart_title">Cart</span>
                            <span class="no_product">(<?php echo $this->cart->total_items();?> Items)</span></a></li>
								<li><a href="<?php echo site_url('home/login') ?>"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li class="<?php
                if ($this->uri->uri_string() == '') {
                    echo "active";
                }
                ?>"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                <li class="<?php
                if ($this->uri->uri_string() == 'produk') {
                    echo "active";
                }
                ?>"><a href="<?php echo base_url('home/allproduk'); ?>">Products</a> </li>
                    <?php if ($this->cart->total_items()) { ?>
                    <li class="<?php
                    if ($this->uri->uri_string() == 'cart') {
                        echo "active";
                    }
                    ?>"><a href="<?php echo base_url('home/cart'); ?>">Cart</a></li>
                    <?php } ?>
                
                <?php if(!$this->session->userdata('customer_id')){?>
                
                <li class="<?php
                if ($this->uri->uri_string() == 'customer/login') {
                    echo "active";
                }
                ?>"><a href="<?php echo base_url('home/customer_login'); ?>">Login</a> </li>
                <li class="<?php
                if ($this->uri->uri_string() == 'customer/register') {
                    echo "active";
                }
                ?>"><a href="<?php echo base_url('home/customer_register'); ?>">Register</a> </li>
                
                <?php }?>
                
                                    </ul>
                                </li> 
								
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							 <form method="get" action="<?php echo base_url('search')?>">
							<input type="text" placeholder="Search"/>
							 <button type="submit" value="SEARCH" class="btn btn-primary btn-sm"> Search
                 </button>
             </form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	