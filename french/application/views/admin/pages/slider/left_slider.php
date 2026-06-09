
<section class="content-header">
	<div class="content-header-left">
		<h1>View Bottom Sliders</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/slider/add_left');?>" class="btn btn-primary btn-sm">Add Left Slider</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<?php if ($this->session->flashdata('success')) { ?>
                <div class="callout callout-success"><b>Success:-</b> <?=$this->session->flashdata('success');?></div>
            <?php } ?>
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="callout callout-danger"><b>Error:-</b> <?=$this->session->flashdata('error');?></div>
            <?php } ?>
			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>SL</th>
								<th>Photo</th>
								<th>Heading</th>
								<th>Content</th>
								<th>Url</th>
								<th>Date</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
$statement = $this->db->query("SELECT * FROM tbl_slider_lr WHERE side = 'left'");						
							foreach ($statement->result() as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td style="width:150px;"><img src="<?=base_url();?>assets/admin/uploads/<?php echo $row->photo; ?>" alt="<?php echo $row->heading; ?>" style="width:140px;"></td>
									<td><?php echo $row->heading; ?></td>
									<td><?php echo $row->name; ?></td>
									<td><?php echo $row->url; ?></td>
									<td><?php echo $row->date; ?></td>
									<td>										
										<a href="<?=base_url('Master/slider/edit_left/'.$row->id);?>" class="btn btn-primary btn-xs">Edit</a>
										<a href="#" class="btn btn-danger btn-xs" data-href="<?=base_url('Master/slider/delete_left/'.$row->id);?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
									</td>
								</tr>
								<?php
							}
							?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure want to delete this item?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>
