<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Bottom Slider</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/slider/left_slider');?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php
$statement = $this->db->query("SELECT * FROM tbl_slider_lr WHERE id=".$id);
foreach ($statement->result() as $row) {
	$name     = $row->name;
	$url     = $row->url;
	$date = $row->date;
	$side    = $row->side;
	$status      = $row->status;
	$photo       = $row->photo;
	$heading     = $row->heading;
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

			<form class="form-horizontal" action="<?=base_url('Master/slider/updateLeftSlider');?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<input type="hidden" name="side" value="left">
				<input type="hidden" name="current_photo" value="<?php echo $photo; ?>">
				<div class="box box-info">
					<div class="box-body">

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Existing Photo</label>
							<div class="col-sm-9" style="padding-top:5px">
								<img src="<?=base_url('assets/admin/uploads/'.$photo);?>" alt="Slider Photo" style="width:400px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Photo </label>
							<div class="col-sm-6" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Heading </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="heading" value="<?php echo $heading; ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name </label>
							<div class="col-sm-6">
								<textarea class="form-control" name="name" rows="4"><?php echo $name; ?></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Url </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="url" value="<?php echo $url; ?>">
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Date </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="date" id="datepicker" value="<?php echo $date; ?>">(Format: dd-mm-yy)
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