<section id="advertisement">
		<div class="container">
			<img src="<?php echo base_url('images/shop/advertisement.jpg')?>" alt="" />
		</div>
	</section>
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php foreach ($data->result() as $row) { ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="home/kategori/<?php echo $row->nama_kategori ?>"><?php echo $row->nama_kategori ?></a></h4>
								</div>
							</div>
							<?php
							} ?>
						</div><!--/category-products-->
								
					</div>
				</div>
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">ALL PRODUCT</h2>
						<?php foreach ($produk->result() as $row) { ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<a href="detail/<?php echo $row->kode_produk ?>"><img src="<?php echo base_url($row->gambar1) ?>" alt="" style="width: 200px; height: 250px;" /></a>
										
											<h4><?php echo $row->judul ?></h4>
											<p class="uang"><?php echo $row->harga ?></p>
											<a href="detail/<?php echo $row->kode_produk ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
								</div>
							</div>
						</div>
						<?php
							} ?>
							</div>
					
				</div>
			</div>
		</div>
	</section>

				