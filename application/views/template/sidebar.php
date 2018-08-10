  
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
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
   
          