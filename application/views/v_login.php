 <section id="contact">
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
                        <?php echo form_open('user/proseslogin'); ?>  
                        <div class="login-form">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username"  placeholder="Username">
                                      <?php echo form_error('username'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                      <?php echo form_error('password'); ?>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                                 <?php echo form_close(); ?>
                            </form>
                            <div class="form-group" style="padding-top:25px">

                            Belum punya akun? <a href="<?php echo base_url('user/registerview');?>">
                            <span class="badge badge-success">+ Daftar </span></a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</section>
   
