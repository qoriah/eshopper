 <section class="content"> 
  <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">         
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Data Order</h3>
                                
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
                      