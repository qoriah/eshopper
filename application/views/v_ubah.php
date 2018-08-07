
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                    <div class="col-lg-12">
                        <?php echo validation_errors();
                        echo form_open_multipart('admin/updateproduk'); 

                    foreach($produk as $row){ 
                        ?>
                        <h3 class="title-5 m-b-35">Edit Produk</h3>
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Update Produk</strong>
                                    </div>
                                    <div class="card-body card-block">
                                         <input type="text" name="kode_produk" value="<?php echo $row->kode_produk ?>" hidden="true">
                                       <form class="form-horizontal" method="POST" action="<?php echo site_url('admin/updateproduk') ?>" enctype="multipart/form-data" >
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="kode_produk" class=" form-control-label">Kode Produk</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                
                                                <input type='text' name='kode_produk' value="<?php echo $row->kode_produk ?>" style="color:red" class='form-control' required='required' disabled="disable">
                                                       
                                                </div>
                                            </div>
                                         
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="judul" class=" form-control-label">Judul</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="judul" name="judul" value="<?php echo $row->judul ?>" class="form-control" placeholder="Isi Judul Buku" required="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="penulis" class=" form-control-label">Penulis</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="penulis" name="penulis" value="<?php echo $row->penulis ?>" placeholder="Isi Nama Penulis" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="penerbit" class=" form-control-label">Penerbit</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="penerbit" name="penerbit" value="<?php echo $row->penerbit ?>" placeholder="Isi Nama Penerbit" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="harga" class=" form-control-label">Harga</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="harga" name="harga" value="<?php echo $row->harga ?>" placeholder="Isi Harga Buku" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="deskripsi" class=" form-control-label">Deskripsi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="deskripsi" id="deskripsi" rows="9" placeholder="Deskripsi Buku" class="form-control" required=""><?php echo $row->deskripsi ?></textarea>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="sinopsis" class=" form-control-label">Sinopsis</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="sinopsis" id="sinopsis" rows="9"  placeholder="Isi Sinopsis Buku" class="form-control" required=""><?php echo $row->sinopsis ?></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nama_kategori" class=" form-control-label" >Kategori</label>
                                                </div>

                                                <div class="col-12 col-md-9">
                                                    <select name="nama_kategori" id="nama_kategori" class="form-control" required>
                                                        <option value='' disabled selected>Pilih Kategori</option>
                                                     <option value='<?php echo $row->nama_kategori ?>' disabled selected><?php echo $row->nama_kategori ?></option>

                                                         <?php
                                                    foreach ($tbl_kategori->result() as $row_kategori) 
                                                    {  
                                                      echo "<option value='".$row_kategori->nama_kategori."'>".$row_kategori->nama_kategori."</option>";
                                                    }
                                                  ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="card-header">
                                                <strong>Spesifikasi</strong>
                                            </div>
                                             <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="sku" class=" form-control-label">SKU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sku" name="sku" value="<?php echo $row->sku ?>" placeholder="Isi SKU" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="isbn" class=" form-control-label">ISBN</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="isbn" value="<?php echo $row->isbn ?>" name="isbn" placeholder="Isi ISBN" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="berat" class=" form-control-label">Berat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="berat" value="<?php echo $row->berat ?>" name="berat" placeholder="Isi Berat Buku" class="form-control" required="">
                                                    <small class="help-block form-text">Berat dengan satuan "gram"</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="dimensi" class=" form-control-label">Dimensi (P/L/T)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="dimensi" value="<?php echo $row->dimensi ?>" name="dimensi" placeholder="Isi Dimensi Buku" class="form-control" required="">
                                                    <small class="help-block form-text">Contoh : 14 cm/ 20 cm/ 0 cm</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="halaman" class=" form-control-label">Halaman</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="halaman" value="<?php echo $row->halaman ?>" name="halaman" placeholder="Isi Halaman Buku" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="cover" class=" form-control-label">Jenis Cover</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="cover" name="cover" value="<?php echo $row->cover ?>" placeholder="Isi Jenis Cover Buku" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="card-header">
                                                <strong>Gambar Buku</strong>
                                            </div>
                                             <div class="card-body card-block">
                                              <div class="row form-group">
                                                 <label class="control-label col-sm-2" for="fieldtwo" class="form-control">Gambar</label>
                                            <img src="<?php echo base_url($row->gambar1) ?>" style="width: 110px; height: 150px;">
                                            </div>
                                             <div class="col-sm-5">
                                                 <input type="file" class="form-control" name="image" id="gambar1">
                                        <input type="text" hidden="true" name="image" id="gambar1" value="<?php echo $gambar1?>">
                                              
                                            </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit"class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                          </form>
                                    </div>
                                </div>
                                   <?php }echo form_close(); ?>
 