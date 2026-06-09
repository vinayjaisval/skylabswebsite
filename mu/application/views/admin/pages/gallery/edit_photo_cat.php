

<?php
$statement = $this->db->query("SELECT * FROM tbl_category_photo WHERE p_category_id=".$id);
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Photo Category</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/gallery/photo_category');?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php							
foreach ($statement->result() as $row) {
	$p_category_name = $row->p_category_name;
	$status = $row->status;
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

			<form class="form-horizontal" action="<?=base_url('Master/gallery/update_photo_category');?>" method="post">
				<input type="hidden" name="id" value="<?=$id;?>">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Category Name <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="p_category_name" value="<?php echo $p_category_name; ?>">
							</div>
						</div>
						<div class="form-group">
				            <label for="" class="col-sm-2 control-label">Active? </label>
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
								<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

</section>
