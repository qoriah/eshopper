<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						<?php
					   //$no = $offset;
					   foreach($is_data as $row ) {
					   ?>
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-12">
									<img src="<?php echo $row->slide1?>" class="img-responsive" style="width: 100%;" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12">
									<img src="<?php echo $row->slide2?>" class="img-responsive" alt="" style="width: 100%;"/>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12">
									<img src="<?php echo $row->slide3?>" class="img-responsive" alt="" style="width: 100%;"/>
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					  <?php } ?>
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
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
									<h4 class="panel-title"><a href="home/kategori/<?php echo $row->nama_kategori?>"><?php echo $row->nama_kategori ?></a></h4>
								</div>
							</div>
							<?php
							} ?>
						</div><!--/category-products-->
								
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Buku Terbaru</h2>
						<?php foreach ($produk->result() as $row) { ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<a href="home/detail/<?php echo $row->kode_produk ?>"><img src="<?php echo base_url($row->gambar1) ?>" alt="" style="width: 200px; height: 250px;" /></a>
											<a href="home/detail/<?php echo $row->kode_produk ?>"><h4><?php echo $row->judul ?></h4></a>
											<p name="harga" class="uang"><?php echo $row->harga ?></p>
									<a href="home/detail/<?php echo $row->kode_produk ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
								</div>
							</div>
						</form>
						</div>
						<?php
							} ?>
						
					</div><!--features_items-->
					 <div class="modal-footer">
					<a  class="btn btn-primary" style="text-align: right;" href="<?php echo base_url('home/allproduk'); ?>">Selengkapnya</a>
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Buku Terlaris</h2>
						<?php foreach ($terlaris->result() as $row) { ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<a href="home/detail/<?php echo $row->kode_produk ?>"><img src="<?php echo base_url($row->gambar1) ?>" alt="" style="width: 200px; height: 250px;" /></a>
											<a href="home/detail/<?php echo $row->kode_produk ?>"><h4><?php echo $row->judul ?></h4></a>
											<p class="uang"><?php echo $row->harga ?></p>
											
											<a href="home/detail/<?php echo $row->kode_produk ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
								</div>
							</div>
						</div>
						<?php
							} ?>
						</div>
						<div class="modal-footer">
					<a  class="btn btn-primary" style="text-align: right;" href="<?php echo base_url('home/allproduk'); ?>">Selengkapnya</a>
					
				</div>
			</div>
		</div>
	</section>