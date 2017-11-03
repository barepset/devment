<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Berita Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('beritum/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Judul</th>
						<th>Content</th>
						<th>Gambar</th>
						<th>Date</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($berita as $b){ ?>
                    <tr>
						<td><?php echo $b['id']; ?></td>
						<td><?php echo $b['judul']; ?></td>
						<td><?php echo $b['content']; ?></td>
						<td><?php echo $b['gambar']; ?></td>
						<td><?php echo $b['date']; ?></td>
						<td>
                            <a href="<?php echo site_url('beritum/edit/'.$b['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('beritum/remove/'.$b['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
