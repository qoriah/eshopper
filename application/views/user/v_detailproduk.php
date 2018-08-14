<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
							<?php foreach ($data->result() as $row) { ?>
							<?php
							} ?>
						</div><!--/category-products-->
					</div>
				</div>
			<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?php echo base_url($row->gambar1) ?>" alt="" />
							</div>
							
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo $row->judul ?></h2>
								<p><?php echo $row->penulis ?></p>
								<p><?php echo $row->penerbit ?></p>
								<img src="images/product-details/rating.png" alt="" />
								<div class="price">
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Kategori :</b><?php echo $row->nama_kategori ?></p>
								<b><p><?php echo $this->cart->format_number($row->harga)?></p></b>
								</div>
								<span>
									<div class="add_cart">
										 <?php echo validation_errors() ?>
        								<?php echo form_open_multipart('home/save_cart'); ?>
									  <form action="<?php echo base_url('home/save_cart');?>" method="post">
									<label>Quantity:</label>
									  <input type="number" class="buyfield" name="qty" value="1"/>
									   <input type="hidden" class="buyfield" name="kode_produk" value="<?php echo $row->kode_produk?>"/>
									<button type="submit" name="submit"class="btn btn-fefault cart" value="Buy Now">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</form>
									</div>
								</span>
								<?php echo form_close(); ?>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Deskripsi</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Sinopsis</a></li>
								<li ><a href="#reviews" data-toggle="tab">Spesifikasi</a></li>
								
							</ul>
						</div>
						<div class="tab-content">
							
							<div class="tab-pane fade active in" id="details" >
								<div class="col-sm-12">
									<p><?php echo $row->deskripsi ?></p>
									
								</div>
							</div>
							
							<div class="tab-pane fade active in" id="companyprofile" >
								<div class="col-sm-12">
									<p><?php echo $row->sinopsis ?></p>
									
								</div>
							</div>
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<p><b>SKU :</b><?php echo $row->sku ?></p>
									<p><b>ISBN :</b><?php echo $row->isbn ?></p>
									<p><b>Berat :</b><?php echo $row->berat ?></p>
									<p><b>Dimensi :</b><?php echo $row->dimensi ?></p>
									<p><b>Halaman :</b><?php echo $row->halaman ?></p>
									<p><b>Jenis Cover :</b><?php echo $row->cover ?></p>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					
					
				</div>
			</div>
		</div>
	</section>
	