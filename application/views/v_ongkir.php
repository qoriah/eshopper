 <section class="content"> 
  <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">         
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Data Ongkos Kirim</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href="<?php echo site_url('admin/inputprovinsi') ?>" class="au-btn au-btn-icon au-btn--green au-btn--small"> <i class="zmdi zmdi-plus"></i>Tambah Provinsi</a>
                                           <a href="<?php echo site_url('admin/tambahkota') ?>" class="au-btn au-btn-icon au-btn--green au-btn--small"> <i class="zmdi zmdi-plus"></i>Tambah Kota</a>
                                        </div>
                                    </div>
                                </div>
                                    <table id="example" class="slug-table table table-bordered table-striped table-responsive dt-responsive" cellpadding="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kota</th>
                                                <th>Ongkir</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <?php 
                            $no=1;
                            $sql="SELECT * FROM tbl_provinsi left join tbl_kota 
                            on tbl_provinsi.id_provinsi=tbl_kota.id_provinsi ";
                            $dts=$this->db->query($sql);
                            foreach ($dts->result() as $row) {
                            ?>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row->provinsi ?></td>
                                        <td><?php echo $row->kota ?></td>
                                        <td><?php echo $row->ongkos ?></td>
                                        <td>
                                            <div class="table-data-feature">
                                          <a href="<?php echo base_url() ?>admin/edit_kota/<?php echo $row->id_kota ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit" ><i class="zmdi zmdi-edit"></i></a>
                                          <a href="<?php echo base_url() ?>admin/hapuskota/<?php echo $row->id_kota ?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete" ><i class="zmdi zmdi-delete"></i></a> 
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