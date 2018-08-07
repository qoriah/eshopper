 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                    <div class="col-lg-12">
                        <h3 class="title-5 m-b-35">Tambah Kota</h3>
              <div class="col-md-12">
                <div class="form-horizontal">
               <form method="post" action="<?php echo base_url(); ?>admin/proses_input_kota" enctype="multipart/form-data"> 
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Provinsi</label>
                      <div class="col-md-5">
                    <select name="id_provinsi" class="form-control">
                     <?php $sql = "select * from tbl_provinsi "; $rs=$this->db->query($sql); foreach ($rs->result() as $row) { ?>
                       <option value="<?php echo $row->id_provinsi; ?>"><?php echo $row->provinsi; ?></option>
                      <?php 
                     } ?>
                     </select>
                    </div>
                  </div>
                  
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Kota</label>
                    <div class="col-md-5">
                      <input type="text" class="form-control"  name="kota" placeholder="Kota" required>
                    </div>
                  </div>
              <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Ongkos Kirim</label>
                    <div class="col-md-5">
                      <input type="text" class="form-control"  name="ongkos" placeholder="Ongkos Kirim" required>
                    </div>
                  </div>
               
                        <div class="card-footer">
                        <button type="submit" name="kirim" class="btn btn-primary btn-sm">
                         <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                              </div>                                 

                     </form>
                </div>
            </div>