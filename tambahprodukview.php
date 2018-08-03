<div class="card-header">
                                                <strong>Spesifikasi</strong>
                                            </div>
                                             <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="sku" class=" form-control-label">SKU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sku" name="sku" placeholder="Isi SKU" class="form-control" required="">
                                                </div>
                                            </div>
                                             <input type="hidden" name="id_spek" value="<?php echo $id_spek ?>">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="isbn" class=" form-control-label">ISBN</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="isbn" name="isbn" placeholder="Isi ISBN" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="berat" class=" form-control-label">Berat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="berat" name="berat" placeholder="Isi Berat Buku" class="form-control" required="">
                                                    <small class="help-block form-text">Berat dengan satuan "gram"</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="dimensi" class=" form-control-label">Dimensi (P/L/T)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="dimensi" name="dimensi" placeholder="Isi Dimensi Buku" class="form-control" required="">
                                                    <small class="help-block form-text">Contoh : 14 cm/ 20 cm/ 0 cm</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="halaman" class=" form-control-label">Halaman</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="halaman" name="halaman" placeholder="Isi Halaman Buku" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="cover" class=" form-control-label">Jenis Cover</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="cover" name="cover" placeholder="Isi Jenis Cover Buku" class="form-control" required="">
                                                </div>
                                            </div>
                                             <input type="hidden" name="id_stok" value="<?php echo $id_stok ?>">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="stok" class=" form-control-label">Stok Buku</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="stok" name="stok" placeholder="Isi Stok Buku" class="form-control" required="">
                                                </div>
                                            </div>