 <section class="content"> 
  <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Data Produk</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-right">
                                           <a href="<?php echo site_url('admin/tambahproduk') ?>" class="au-btn au-btn-icon au-btn--green au-btn--small"> <i class="zmdi zmdi-plus"></i>add item</a>
                                    </div>
                                </div>
                               
                                   <div class="portlet-body">
                        <table id="example" class="table table-striped table-bordered table-news" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Produk</th>
                                                <th>Judul</th>
                                                <th>Penulis</th>
                                                <th>Penerbit</th>
                                                <th>Deskripsi</th>
                                                <th>Harga</th>
                                                <th>Gambar</th>
                                                <th>Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                            $no = 1;
                                            foreach($produk as $u){ 
                                            ?>
                                        <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $u->kode_produk ?></td>
                                        <td><?php echo $u->judul ?></td>
                                        <td><?php echo $u->penulis ?></td>
                                        <td><?php echo $u->penerbit ?></td>
                                        <td><?= substr($u->deskripsi, 3, 100);?></td>
                                        <td class="uang"><?php echo $u->harga ?></td>
                                        <td><img  src='<?php echo base_url($u->gambar1) ?>'></td>
                                        <td><?php echo $u->nama_kategori ?></td>
                                         <td>
                                            <div class="table-data-feature">
                                          <a href="<?php echo base_url() ?>admin/editproduk/<?php echo $u->kode_produk ; ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit" ><i class="zmdi zmdi-edit"></i></a>
                                          <a href="<?php echo base_url() ?>admin/produkhapus/<?php echo $u->kode_produk ; ?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete" ><i class="zmdi zmdi-delete"></i></a> 
                                          </div>             
                                          </td>
                                         </tr>
                                           <?php } ?>
                                    </tbody>
                                </table>
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