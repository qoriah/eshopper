
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                    <div class="col-lg-12">
                        <?php echo validation_errors();
                        echo form_open_multipart('admin/prosestambahstok'); 

                    foreach($stok['results'] as $row){ 
                        ?>
                        <h3 class="title-5 m-b-35">Edit Stok</h3>
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Update Stok</strong>
                                    </div>
                                    <div class="card-body card-block">
                                     
                                       <form class="form-horizontal" method="POST" action="<?php echo base_url(). 'admin/prosestambahstok'; ?>" enctype="multipart/form-data" >
                                        <div class="row form-group">
                                           <input type="hidden" name="id_stok" class="form-control" value="<?php echo $row->id_stok ?>">
                                         <input type="text" name="kode_produk" value="<?php echo $row->kode_produk ?>" hidden="true">
                                                <div class="col col-md-3">
                                                    <label for="kode_produk" class=" form-control-label">Kode Produk</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                
                                                <input type='text' name='kode_produk' value="<?php echo $row->kode_produk ?>" style="color:red" class='form-control' required='required' disabled="disable">
                                                       
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="stok" class=" form-control-label">Stok Buku</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="stok" name="stok" value="<?php echo $row->stok ?>" class="form-control" placeholder="Isi Stok Buku" required="">
                                                </div>
                                            </div>
                                            
                                          </div>
                                    <div class="card-footer">
                                        <button type="submit" name="kirim" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                          </form>
                                    </div>
                                </div>
                                   <?php }echo form_close(); ?>
 