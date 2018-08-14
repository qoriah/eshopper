

<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Register New Account</h3>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <?php echo validation_errors() ?>
        <?php echo form_open_multipart('home/customer_save'); ?>
            <form method="post" action="<?php echo base_url('home/customer_save');?>">
             <table>
                    <tbody>
                        <tr>
                            <td>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="customer_name" class=" form-control-label">Nama Lengkap</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="hidden" name="customer_id" value="<?php echo $customer_id ?>">
                                        <input type="text" id="customer_name" name="customer_name" class="form-control" placeholder="Isi Nama Lengkap" required="">
                                    </div>
                                     </div>
                                     <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="password" class=" form-control-label">Password</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="customer_password" name="customer_password" class="form-control" placeholder="Isi Password" required="">
                                    </div>
                                     </div>
                                     <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="customer_city" class=" form-control-label">Kota</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="customer_city" name="customer_city" class="form-control" placeholder="Isi Nama Kota" required="">
                                    </div>
                                     </div>
                               <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="customer_phone" class=" form-control-label">No.Hp</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="customer_phone" name="customer_phone" class="form-control" placeholder="Isi No.Hp" required="">
                                    </div>
                                     </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email" class=" form-control-label">Email</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="customer_email" name="customer_email" class="form-control" placeholder="Isi Email anda" required="">
                                    </div>
                                     </div>
                                        <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="customer_address" class=" form-control-label">Alamat</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="customer_address" name="customer_address" class="form-control" placeholder="Isi Alamat anda" required="">
                                    </div>
                                     </div>
                                      <div class="row form-group">
                                             <div class="col col-md-3">
                                          <label  for="customer_country" class=" form-control-label">Negara</label>
                                      </div>
                                          <div class="col-12 col-md-9">
                                            <select class='form-control' name='customer_country' required>
                                               <option value="null">Pilih Negara</option>         
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="India">India</option>
                                                <option value="India">Indonesia</option>
                                            </select>
                                          </div>
                                        </div>
                               <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="customer_zipcode" class=" form-control-label">Kode Pos</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="customer_zipcode" name="customer_zipcode" class="form-control" placeholder="Isi Kode Pos" required="">
                                    </div>
                                     </div>    
                            </td>
                        </tr>   
                    </tbody></table> 
                 <button type="submit" name="kirim" class="btn btn-primary btn-sm">
                  <i class="fa fa-dot-circle-o"></i> Submit
                 </button>
                <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
                <div class="clear"></div>
            </form>
        </div>  	
        <div class="clear"></div>
    </div>
</div>
<?php echo form_close(); ?>