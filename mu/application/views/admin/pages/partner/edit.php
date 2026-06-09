<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Partner</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/partner/view');?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php
$statement = $this->db->query("SELECT * FROM partner WHERE id=".$id);
foreach ($statement->result() as $row) {
	$photo      = $row->photo;
	$name     	= $row->name;
	$link     	= $row->link;
	$role  		= $row->role;
	$status     = $row->active;
	$type 		= $row->type;
}
?>

<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if ($this->session->flashdata('success')) { ?>
                <div class="callout callout-success"><b>Success:-</b> <?=$this->session->flashdata('success');?></div>
            <?php } ?>
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="callout callout-danger"><b>Error:-</b> <?=$this->session->flashdata('error');?></div>
            <?php } ?>

			<form class="form-horizontal" action="<?=base_url('Master/partner/updateUser');?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<input type="hidden" name="current_photo" value="<?php echo $photo; ?>">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Existing Photo</label>
							<div class="col-sm-9" style="padding-top:5px">
								<img src="<?=base_url('assets/admin/uploads/'.$photo);?>" alt="Slider Photo" style="max-width:50px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Photo </label>
							<div class="col-sm-6" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Type <span>*</span></label>
							<div class="col-sm-6">
								<select class="form-control select2" name="type" required>
									<option value="">--- Select ---</option>
									<option <?php if($type == 1){ echo "selected"; } ?> value="1">Partner</option>
									<option <?php if($type == 4){ echo "selected"; } ?> value="4">Clients</option>
									<option <?php if($type == 2){ echo "selected"; } ?> value="2">G500X Feautures</option>
									<option <?php if($type == 3){ echo "selected"; } ?> value="3">Certificate</option>
									<option <?php if($type == 5){ echo "selected"; } ?> value="5">Company Timeline</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name" value="<?php echo $name; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Link <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="link" value="<?php echo $link; ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label"> Content </label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="5" name="role"><?php echo $role; ?></textarea>
							</div>
						</div>
						
						   
				        <div class="form-group">
				            <label for="" class="col-sm-2 control-label">Active </label>
				            <div class="col-sm-6">
				                <label class="radio-inline">
				                    <input type="radio" name="status" value="Active" <?php if($status == 'Active') { echo 'checked'; } ?>>Yes
				                </label>
				                <label class="radio-inline">
				                    <input type="radio" name="status" value="Inactive" <?php if($status == 'Inactive') { echo 'checked'; } ?>>No
				                </label>
				            </div>
				        </div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

</section>