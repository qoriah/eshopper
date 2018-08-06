  
  <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url('assets');?>/img/logo.png" alt="E-Shopper" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="<?php if($this->uri->segment('2') == 'dashboard'){ echo "active" ; } ?>">
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
                         <li class="<?php if($this->uri->segment('2') == 'ongkoskirim'){ echo "active" ; } ?>">
                            <a href="<?php echo site_url('admin/ongkoskirim') ?>">
                                <i class="fas fa-cogs"></i>Ongkos Kirim</a>
                        </li>
                      
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
   
          