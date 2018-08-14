 <section class="content"> 
  <div class="main-content">
     <?= $breadcrumbs ?>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">         
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Data Konfirmasi</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                    </div>
                                    <div class="table-data__tool-right">
                                    </div>
                                </div>
                            
                                    <table id="example" class="slug-table table table-bordered table-striped table-responsive dt-responsive" cellpadding="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Member</th>
                                                <th>Email</th>
                                                <th>No.Hp</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                            $no = 1;
                                            foreach($konfirmasi as $u){ 
                                            ?>
                                        <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $u->customer_name ?></td>
                                        <td><?php echo $u->customer_email ?></td>
                                        <td><?php echo $u->customer_phone ?></td>
                                        
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