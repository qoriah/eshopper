 <section id="contact">
   <body class="animsition">
    <div class="scroll">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                 <img src="<?php echo base_url('assets');?>/img/logo.png" alt="E-shopper">
                            </a>
                        </div>
                           <font color="green"><?php echo $this->session->flashdata('pesan'); ?></font>

                      <?php echo form_open('user/register', ''); ?>
                        <div class="login-form">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username" required>
                                     <?php echo form_error('username', '<div class="text-danger"><small>', '</small></div>');?>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                                     <?php echo form_error('email', '<div class="text-danger"><small>', '</small></div>');?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                                     <?php echo form_error('password', '<div class="text-danger"><small>', '</small></div>');?>
                                </div>
                                <br>
                               <a href="<?php echo base_url('');?>">
                                  <button type="button" class="btn btn-dark">Back</button></a> &nbsp; &nbsp;
                                  <button type="submit" class="au-btn au-btn--block au-btn--green m-b-20">Register</button>
                                  <?php echo form_close(); ?>

                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="<?php echo base_url('user');?>">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
