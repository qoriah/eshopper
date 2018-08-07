
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
                        echo form_open_multipart('admin/updateslide'); 

                    foreach($slide as $row){ 
                        ?>
						<input type="hidden" name="id_slide" class="form-control" value="<?php echo $row->id_slide ?>">
					
                            <div class="card-body card-block">
                            <div class="row form-group">
                                 <label class="control-label col-sm-2" for="fieldtwo" class="form-control">Gambar</label>
                                  <img src="<?php echo base_url($row->slide1) ?>" style="width: 110px; height: 150px;">
                                  <img src="<?php echo base_url($row->slide2) ?>" style="width: 110px; height: 150px;">
                                  <img src="<?php echo base_url($row->slide3) ?>" style="width: 110px; height: 150px;">        
                            </div>
                                <div class="col-sm-5">
                                  <input type="file" id="input-file-now" class="dropify" name="userfile[]"  value="<?php echo $row->slide1 ?>"required />
                                
					            <input type="file" id="input-file-now" class="dropify" name="userfile[]"  value="<?php echo $row->slide2 ?>" required />
					          
					            <input type="file" id="input-file-now" class="dropify" name="userfile[]"  value="<?php echo $row->slide3 ?> " required />
                                 </div> 
                                 
						  <div class="card-footer">
							<button type="submit" name="kirim" class="btn btn-primary btn-sm">
                               <i class="fa fa-dot-circle-o"></i> Update
                            </button>
	
						</div>

					</div>
				</div>
				<?php }echo form_close(); ?>
			<div class="box-body">
			</div>
		</div>
	</section>
