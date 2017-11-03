<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Galery Edit</h3>
            </div>
			<?php echo form_open('galery/edit/'.$galery['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="judul" class="control-label">Judul</label>
						<div class="form-group">
							<input type="text" name="judul" value="<?php echo ($this->input->post('judul') ? $this->input->post('judul') : $galery['judul']); ?>" class="form-control" id="judul" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="link" class="control-label">Link</label>
						<div class="form-group">
							<input type="text" name="link" value="<?php echo ($this->input->post('link') ? $this->input->post('link') : $galery['link']); ?>" class="form-control" id="link" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>