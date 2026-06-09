
<?php
$statement = $this->db->query("SELECT * FROM tbl_photo WHERE photo_id=".$id);
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Photo</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/gallery/photo');?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php							
foreach ($statement->result() as $row) {
	$photo_caption = $row->photo_caption;
	$photo_name = $row->photo_name;
	$p_category_id = $row->p_category_id;
	$photo_link = $row->photo_link;
	$photo_desc = $row->photo_desc;
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

			<form class="form-horizontal" action="<?=base_url('Master/gallery/updatePhoto');?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?=$id;?>">

				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Photo Caption <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="photo_caption" value="<?php echo $photo_caption ?>">
							</div>
						</div>
						<div class="form-group">
				            <label for="" class="col-sm-2 control-label">Existing Photo</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				                <img src="<?=base_url('assets/admin/uploads/'.$photo_name);?>" class="existing-photo" style="width:300px;">

				                <input type="hidden" name="previous_photo" value="<?php echo $photo_name; ?>">
				            </div>
				        </div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Upload New Photo <span>*</span></label>
							<div class="col-sm-4" style="padding-top:6px;">
								<input type="file" name="photo">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Photo Category <span>*</span></label>
							<div class="col-sm-4">
								<select class="form-control" name="p_category_id">
									<?php
$statement1 = $this->db->query("SELECT * FROM tbl_category_photo ORDER BY p_category_name ASC");
														
									foreach ($statement1->result() as $row) {
										if($row->p_category_id == $p_category_id) {
											$selected = 'selected';
										} else {
											$selected = '';
										}
										echo '<option value="'.$row->p_category_id.'" '.$selected.'>'.$row->p_category_name.'</option>';
									}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Photo Link </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="photo_link" value="<?=$photo_link?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Photo Description </label>
							<div class="col-sm-4">
								<textarea class="form-control" name="photo_desc" rows="3"><?=$photo_desc?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" >Submit</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

