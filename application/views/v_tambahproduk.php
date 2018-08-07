
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
                                        <?php echo validation_errors() ?>
                                        <?php echo form_open_multipart('admin/inputproduk'); ?>
                                       <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data" >
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="fieldtwo">Kode Produk</label>
                                                <div class="col-sm-5">
                                                <input type='text' name='kode_produk' value="<?php echo $kodeunik ?>" style="color:red" class='form-control' required='required' disabled="disable">
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
                                                    <label for="harga" class="st-forminput">Harga</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="example2" name="harga" placeholder="Isi Harga Buku" class="form-control" required="">
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
                                                    <input type="text" id="sku" name="sku" placeholder="Isi SKU" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="isbn" class=" form-control-label">ISBN</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="isbn" name="isbn" placeholder="Isi ISBN" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="berat" class=" form-control-label">Berat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="berat" name="berat" placeholder="Isi Berat Buku" class="form-control" >
                                                    <small class="help-block form-text">Berat dengan satuan "gram"</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="dimensi" class=" form-control-label">Dimensi (P/L/T)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="dimensi" name="dimensi" placeholder="Isi Dimensi Buku" class="form-control" >
                                                    <small class="help-block form-text">Contoh : 14 cm/ 20 cm/ 0 cm</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="halaman" class=" form-control-label">Halaman</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="halaman" name="halaman" placeholder="Isi Halaman Buku" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="cover" class=" form-control-label">Jenis Cover</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="cover" name="cover" placeholder="Isi Jenis Cover Buku" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="card-header">
                                                <strong>Gambar Buku</strong>
                                            </div>
                                             <div class="card-body card-block">
                                              <div class="form-group">
                                        <label class="control-label col-sm-2" for="fieldtwo" class="form-control">Gambar</label>
                                       <td>
                                       <input type="file"  class="form-control" id="gambar1" name="image" required>
                                      
                                        </td>
                                    </div>
                                           <?php echo form_close(); ?>
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
                    
<script type="text/javascript">
$(function(){
      $('#example2').priceFormat({
      prefix: 'Rp ',
      centsSeparator: ',',
      thousandsSeparator: '.'
       });
})
</script>
 


