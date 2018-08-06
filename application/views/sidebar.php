  
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
                            <a href="<?php echo site_url('user/dashboard') ?>"><i class="fas fa-home"></i>Home</a> 
                        </li>
                        <li class="<?php if($this->uri->segment('2') == 'produk'){ echo "active" ; } ?>">
                       <a href="<?php echo site_url('user/produk') ?>"><i class="fas fa-table"></i>Master</a> 
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-suitcase"></i>Order</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Konfirmasi</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-users"></i>Data member</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-print"></i>Laporan</a>
                        </li>
                         <li>
                            <a href="map.html">
                                <i class="fas fa-cogs"></i>Pengaturan</a>
                        </li>
                         <li>
                            <a href="map.html">
                                <i class="fas fa-cogs"></i>Slide</a>
                        </li>
                         <li>
                            <a href="map.html">
                                <i class="fas fa-cogs"></i>Ongkos Kirim</a>
                        </li>
                      
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
   
          