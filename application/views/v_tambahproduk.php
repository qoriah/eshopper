
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                    <div class="col-lg-12">
                        <h3 class="title-5 m-b-35">Tambah Produk</h3>
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Insert Produk</strong>
                                    </div>
                                    <div class="card-body card-block">
                                       <form class="form-horizontal" method="POST" action="<?php echo base_url();?>admin/inputproduk" enctype="multipart/form-data" >
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="kode_produk" class=" form-control-label">Kode Produk</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $kodeunik ?>" id="kode_produk" name="kode_produk" disabled="" class="form-control" >
                                                     <input type="hidden" name="kode_produk" value="<?php echo $kodeunik ?>">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="judul" class=" form-control-label">Judul</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="judul" name="judul" class="form-control" placeholder="Isi Judul Buku" required="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="penulis" class=" form-control-label">Penulis</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="penulis" name="penulis" placeholder="Isi Nama Penulis" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="penerbit" class=" form-control-label">Penerbit</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="penerbit" name="penerbit" placeholder="Isi Nama Penerbit" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="harga" class=" form-control-label">Harga</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="harga" name="harga" placeholder="Isi Harga Buku" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="deskripsi" class=" form-control-label">Deskripsi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="deskripsi" id="deskripsi" rows="9" placeholder="Deskripsi Buku" class="form-control" required=""></textarea>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="sinopsis" class=" form-control-label">Sinopsis</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="sinopsis" id="sinopsis" rows="9" placeholder="Isi Sinopsis Buku" class="form-control" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nama_kategori" class=" form-control-label" >Kategori</label>
                                                </div>

                                                <div class="col-12 col-md-9">
                                                    <select name="nama_kategori" id="nama_kategori" class="form-control" required>
                                                     <option value='' disabled selected>Pilih Kategori</option>";
                                                    <?php
                                                    foreach ($tbl_kategori->result() as $row_kategori) 
                                                    {  
                                                      echo "<option value='".$row_kategori->id_kategori."'>".$row_kategori->nama_kategori."</option>";
                                                    }
                                                  ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="card-header">
                                                <strong>Gambar Buku</strong>
                                            </div>
                                             <div class="card-body card-block">
                                              <div class="row form-group">
                                                 <label class="control-label col-sm-2" for="fieldtwo" class="form-control">Gambar</label>
                                            <div class="col-sm-5">
                                                <input type="file" id="input-file-now" class="dropify" name="userfile[]" required />
                                                <input type="file" id="input-file-now" class="dropify" name="userfile[]" required />
                                                <input type="file" id="input-file-now" class="dropify" name="userfile[]" required />
                                            </div>
                                            </div>
                                           
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" name="kirim" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>

