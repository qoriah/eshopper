<section id="advertisement">
		<div class="container">
			<img src="<?php echo base_url('images/shop/advertisement.jpg')?>" alt="" />
		</div>
	</section>
<!--content-->
		<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2 class="title text-center">Buku Per-Kategori</h2>
						
						<?php foreach ($data->result() as $row) { ?>
						<div class="col-sm-12">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<a href="home/detail/<?php echo $row->kode_produk ?>"><img src="<?php echo base_url($row->gambar1) ?>" alt="" style="width: 200px; height: 250px;" />
											<h4><?php echo $row->judul ?></h4>
											<p class="uang"><?php echo $row->harga ?></p>
											<a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
								</div>
							</div>
						</div>
						<?php
							} ?>
						</div>
					</div>
					<div class="col-sm-9 padding-right">
						<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Buku Terbaru</h2>
			<?php $populer = "SELECT * from tbl_produk where jenis='terbaru' limit 4";
				   $rsp    = $this->db->query($populer);
				   foreach ($rsp->result() as $view) {
				   	?>
				<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<a href="home/detail/<?php echo $view->kode_produk ?>"><img src="<?php echo base_url($view->gambar1) ?>" alt="" style="width: 200px; height: 250px;" />
											<h4><?php echo $view->judul ?></h4>
											<p class="uang"><?php echo $view->harga ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
								</div>
							</div>
						</div>
				   	<?php
				   }
			 ?>
</div>
			
						<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Buku Terlaris</h2>
			<?php $populer = "SELECT * from tbl_produk where jenis='terlaris' limit 4";
				   $rsp    = $this->db->query($populer);
				   foreach ($rsp->result() as $view) {
				   	?>
				<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<form action="home/cart" method="post">
										<div class="productinfo text-center">
											<a href="home/detail/<?php echo $view->kode_produk ?>"><img src="<?php echo base_url($view->gambar1) ?>" alt="" style="width: 200px; height: 250px;" />
										
											<h4><?php echo $view->judul ?></h4>
											<p class="uang"><?php echo $view->harga ?></p>
											<input type="hidden" name="kode_produk" value="<?php echo $row->kode_produk ?>">
											<input type="hidden" name="jumlah_beli" value="1">
											<a href="<?php echo base_url('home/cart'); ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
								</div>
							</div>
						</div>
				   	<?php
				   }
			 ?>

<!--//seller-->
<!--tag-->
								
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!--//content-->