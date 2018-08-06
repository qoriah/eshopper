 <!-- MAIN CONTENT-->
 <section id="contact">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                               
                                                <?php 
                                    $sql = "SELECT * FROM tbl_produk ";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo '<h2 style="color:red">'.$jum.'</h2>';

                                 ?>
                                                <span>Jumlah Produk</span>
                                                 <a href="<?php echo base_url('Admin/produk')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                               <?php 
                                    $sql = "SELECT * FROM tbl_cart ";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo '<h2 style="color:red">'.$jum.'</h2>';

                                 ?>
                                                <span>New Order</span>

                                                 <a href="<?php echo base_url('Admin/order')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                              <?php 
                                    $sql = "SELECT * FROM tbl_member ";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo '<h2 style="color:red">'.$jum.'</h2>';

                                 ?>
                                                <span>Jumlah Member</span>
                                                 <a href="<?php echo base_url('Admin/konfirmasi')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                       </div>
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Mizan. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
  <
