
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
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Kategori :</b><?php echo $row->nama_kategori ?></p>
								<b><p class="uang"><?php echo $row->harga ?></p></b>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
								<span>
									<label>Quantity:</label>
									<input type="number" value="1" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
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
	