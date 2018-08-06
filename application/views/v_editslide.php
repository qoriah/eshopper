
	<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                    <div class="col-lg-12">
                        <h3 class="title-5 m-b-35">Edit Slide</h3>
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Update Slide</strong>
                                    </div>
							<?php echo validation_errors();
						 echo form_open_multipart('admin/halamanupdate'); 

						foreach($halaman as $a){ 
						?>
						<input type="hidden" name="iddepan" class="form-control" value="<?php echo $a->iddepan ?>">
						<div class="form-group">
							<label for="judul">Judul Foto</label>
							<input type="text" class="form-control" name="judul" id="judul" value="<?php echo $a->judul ?>" >
						</div>
						<div class="form-group">
							<label for="photo">Foto</label> 
							<td>
        					<input type="file"  class="form-control" id="photo" name="image"><?php echo $a->photo ?>
      						</td>
						</div>
						<div class="form-group">
							 <button class="btn btn-sm btn-primary save-artikel">Update</button>
							
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

						</div>

					</div>
				</div>
				<?php }echo form_close(); ?>
			<div class="box-body">
			</div>
		</div>
		


	</section>
	<?php
$this->load->view('template/js');
?>
