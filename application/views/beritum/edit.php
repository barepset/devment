<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Beritum Edit</h3>
            </div>
			<?php echo form_open('beritum/edit/'.$beritum['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="judul" class="control-label">Judul</label>
						<div class="form-group">
							<input type="text" name="judul" value="<?php echo ($this->input->post('judul') ? $this->input->post('judul') : $beritum['judul']); ?>" class="form-control" id="judul" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="content" class="control-label">Content</label>
						<div class="form-group">
							<input type="text" name="content" value="<?php echo ($this->input->post('content') ? $this->input->post('content') : $beritum['content']); ?>" class="form-control" id="content" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gambar" class="control-label">Gambar</label>
						<div class="form-group">
							<input type="text" name="gambar" value="<?php echo ($this->input->post('gambar') ? $this->input->post('gambar') : $beritum['gambar']); ?>" class="form-control" id="gambar" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date" class="control-label">Date</label>
						<div class="form-group">
							<input type="text" name="date" value="<?php echo ($this->input->post('date') ? $this->input->post('date') : $beritum['date']); ?>" class="has-datetimepicker form-control" id="date" />
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