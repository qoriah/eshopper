<section id="advertisement">
        <div class="container">
            <img src="<?php echo base_url('images/shop/advertisement.jpg')?>" alt="" />
        </div>
    </section>
<!--content-->
        <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="left-sidebar">
                       
                    </div>
                                <div class="card">
                                    <div class="card-header">
                                       <h2 class="title text-center">User Login</h2>
                                    </div>
                                     <div class="row form-group" id="result">
                                    <p><?php echo $this->session->flashdata('messagelogin'); ?></p>
                                    </div>

            <form action="<?php echo base_url('home/customer_shipping_login');?>" method="post">
                <input name="customer_email" placeholder="Enter Your Email" type="text"/>
                <input name="customer_password" placeholder="Enter Your Password" type="password"/>
                <p class="note">If you forgot your passoword just enter your email and click <a href="#">here</a></p>
                <div class="buttons"><div> <button type="submit" name="kirim" class="btn btn-primary btn-sm">
                  <i class="fa fa-dot-circle-o"></i> Sign In
                 </button></div></div>
            </form>
        </div>
         <h2 class="title text-center">User form</h2>
        <div class="register_account">
            <h3>Register New Account</h3>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
             <?php echo validation_errors() ?>
        <?php echo form_open_multipart('home/customer_shipping_register'); ?>
            <form method="post" action="<?php echo base_url('home/customer_shipping_register');?>">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="shipping_name" class=" form-control-label">Nama Lengkap</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                         <input type="hidden" name="shipping_id" value="<?php echo $shipping_id ?>">
                                         <input type="hidden" name="customer_id" value="<?php echo $customer_id ?>">
                                        <input type="text" id="shipping_name" name="shipping_name" class="form-control" placeholder="Isi Nama Lengkap" required="">
                                    </div>
                                     </div>
                                     <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="shipping_city" class=" form-control-label">Kota</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="shipping_city" name="shipping_city" class="form-control" placeholder="Isi Nama Kota" required="">
                                    </div>
                                     </div>
                               <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="shipping_phone" class=" form-control-label">No.Hp</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="shipping_phone" name="shipping_phone" class="form-control" placeholder="Isi No.Hp" required="">
                                    </div>
                                     </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email" class=" form-control-label">Email</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="shipping_email" name="shipping_email" class="form-control" placeholder="Isi Email anda" required="">
                                    </div>
                                     </div>
                                        <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="shipping_address" class=" form-control-label">Alamat</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="shipping_address" name="shipping_address" class="form-control" placeholder="Isi Alamat anda" required="">
                                    </div>
                                     </div>
                                      <div class="row form-group">
                                             <div class="col col-md-3">
                                          <label  for="shipping_country" class=" form-control-label">Negara</label>
                                      </div>
                                          <div class="col-12 col-md-9">
                                            <select class='form-control' name='shipping_country' required>
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
                                        <label for="shipping_zipcode" class=" form-control-label">Kode Pos</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="shipping_zipcode" name="shipping_zipcode" class="form-control" placeholder="Isi Kode Pos" required="">
                                    </div>
                                     </div>    
                            </td>
                        </tr> 
                    </tbody></table> 
                 <button type="submit" name="kirim" class="btn btn-primary btn-sm">
                  <i class="fa fa-dot-circle-o"></i> Submit
                 </button>
                <div class="clear"></div>
            </form>
            <?php echo form_close(); ?>
        </div>      
        <div class="clear"></div>
    </div>
</div>
</div>
</div>
</section>