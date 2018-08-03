 <section class="content"> 
  <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">         
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Data Order</h3>
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
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
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
                                                <th>Invoice</th>
                                                <th>Member</th>
                                                <th>Email</th>
                                                <th>No Hp</th>
                                                <th>Total</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                            $no = 1;
                                            foreach($order as $u){ 
                                            ?>
                                        <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $u->invoice ?></td>
                                        <td><?php 
                                            if($u->kode_member == NULL){
                                              ?>
                                              <b class="btn btn-danger btn-rounded waves-effect waves-light">Non Member</b>
                                              <?php
                                            }else{
                                              ?>
                                              <b class="btn btn-success btn-rounded waves-effect waves-light">Member</b>

                                              <?php
                                            }
                                         ?></td>
                                        <td><?php echo $u->email ?></td>
                                        <td><?php echo $u->no_hp ?></td>
                                        <td><?php echo $u->total ?></td>
                                        <td>
                                            <div class="table-data-feature">
                                          <a href="<?php echo base_url().'#'.$row->id_user ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit" ><i class="zmdi zmdi-edit"></i></a>
                                          <a href="<?php echo base_url().'#'.$row->id_user ?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete" ><i class="zmdi zmdi-delete"></i></a> 
                                          </div>             
                                          </td>
                                      </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <center>
                            <?php echo $pagination ?>
                        </center>