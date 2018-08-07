
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                    <div class="col-lg-12">
                        <h3 class="title-5 m-b-35">Tambah Provinsi</h3>
              <div class="col-md-12">
                <div class="form-horizontal">
               <form method="post" action="<?php echo base_url(); ?>admin/proses_input_provinsi" enctype="multipart/form-data"> 
                  <div class="row form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Provinsi</label>
                    <div class="col-md-5">
                          <input type="hidden" name="id_provinsi" value="<?php echo $id_provinsi ?>">
                    <input type="text" name="provinsi" required>
                       </select>
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
            <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                              
                                    </div>
                                    <div class="table-data__tool-right">
                                           <a href="<?php echo site_url('admin/tambahproduk') ?>" class="au-btn au-btn-icon au-btn--green au-btn--small"> <i class="zmdi zmdi-plus"></i>add item</a>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                               
                                    <table id="example" class="slug-table table table-bordered table-striped table-responsive dt-responsive" cellpadding="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                      $no=1;
                                      foreach ($data->result() as $row) {
                                      ?>
                                        <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row->provinsi ?></td>
                                         <td>
                                          <a href="<?php echo base_url() ?>admin/provinsihapus/<?php echo $row->id_provinsi; ?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete" ><i class="zmdi zmdi-delete"></i></a> 
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


