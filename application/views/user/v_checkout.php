
<section class="content"> 
  <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3>Check Out</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-right">
                <?php if ($this->cart->total_items()) { ?>
                    <div class="portlet-body">
                        <table id="example" class="table table-striped table-bordered table-news" cellspacing="0" width="100%">
                              <thead>
                        <tr>
                            <th>Kode produk</th>
                            <th>Judul</th>
                            <th>Harga</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Remove</th>
                        </tr>
                          </thead>
                        <tbody>
                        <?php
                        $i = 0;
                        foreach ($cart_contents as $cart_items) {
                            $i++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $cart_items['name'] ?></td>
                                <td>Rp. <?php echo $this->cart->format_number($cart_items['price']) ?></td>
                                <td>
                                     <?php echo validation_errors() ?>
                                        <?php echo form_open_multipart('update/cart'); ?>
                                    <form action="<?php echo base_url('update/cart'); ?>" method="post">
                                        <input type="number" name="qty" value="<?php echo $cart_items['qty'] ?>"/>
                                        <input type="hidden" name="rowid" value="<?php echo $cart_items['rowid'] ?>"/>
                                        <input type="submit" name="submit" value="Update"/>
                                    </form>
                                    <?php echo form_close(); ?>
                                </td>
                                <td>Rp. <?php echo $this->cart->format_number($cart_items['subtotal']) ?></td>
                                <td>
                                    <?php echo validation_errors() ?>
                                        <?php echo form_open_multipart('remove/cart'); ?>
                                    <form action="<?php echo base_url('remove/cart'); ?>" method="post">
                                        <input type="hidden" name="rowid" value="<?php echo $cart_items['rowid'] ?>"/>
                                        <input type="submit" name="submit" value="X"/>
                                    </form>

                                </td>
                            </tr>
                        <?php } ?>
                         </tbody>
                    </table>
                </div>
                    <table style="float:right;text-align:left;" width="40%">
                        <tr>
                            <th>Sub Total : </th>
                            <td>Rp. <?php echo $this->cart->format_number($this->cart->total()) ?></td>
                        </tr>
                        <tr>
                            <th>Ongkir : </th>
                            <td>Rp. 
                                <?php
                                $total = $this->cart->total();
                                $tax = (10000);
                                echo $this->cart->format_number($tax);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Grand Total :</th>
                            <td>Rp. <?php echo $this->cart->format_number($tax + $this->cart->total()); ?> </td>
                        </tr>
                    </table>
                    <?php
                } else {
                    echo "<h1>Your Cart Empty</h1>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
            <div class="shopping">
                <div class="shopleft">
                    <a href="<?php echo base_url('home') ?>"> <img src="<?php echo base_url() ?>assets/images/shop.png" alt="" /></a>
                </div>
                <div class="shopright">
                    <?php
                    $customer_id = $this->session->userdata('customer_id');
                    if (empty($customer_id)) {
                        ?>
                        <a href="<?php echo base_url('home/user_form') ?>"> <img src="<?php echo base_url() ?>assets/images/check.png" alt="" /></a>
                        <?php
                    } elseif (!empty($customer_id)) {
                        ?>
                        <a href = "<?php echo base_url('home/customer_shipping') ?>"> <img src = "<?php echo base_url() ?>assets/images/check.png" alt = "" /></a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>      
       
    </div>
</div>
</div>
 <div class="clear"></div>
</section>