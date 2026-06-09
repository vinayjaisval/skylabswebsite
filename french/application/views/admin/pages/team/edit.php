<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Team Member</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/team/view');?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php
$statement = $this->db->query("SELECT * FROM tbl_team_member WHERE id=".$id);

foreach ($statement->result() as $row) {
	$name              = $row->name;
	$slug              = $row->slug;
	$designation_id    = $row->designation_id;
	$photo             = $row->photo;
	$banner            = $row->banner;
	$degree            = $row->degree;
	$detail            = $row->detail;
	$facebook          = $row->facebook;
	$twitter           = $row->twitter;
	$linkedin          = $row->linkedin;
	$youtube           = $row->youtube;
	$google_plus       = $row->google_plus;
	$instagram         = $row->instagram;
	$flickr            = $row->flickr;
	$address           = $row->address;
	$practice_location = $row->practice_location;
	$phone             = $row->phone;
	$email             = $row->email;
	$website           = $row->website;
	$status            = $row->status;
	$meta_title        = $row->meta_title;
	$meta_keyword      = $row->meta_keyword;
	$meta_description  = $row->meta_description;
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

			<form class="form-horizontal" action="<?=base_url('Master/team/updateTeam');?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="current_photo" value="<?php echo $photo; ?>">
				<input type="hidden" name="current_banner" value="<?php echo $banner; ?>">
				<input type="hidden" name="current_team_member_name" value="<?php echo $name; ?>">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name" value="<?php echo $name; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Slug </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="slug" value="<?php echo $slug; ?>">
							</div>
						</div>
						<div class="form-group">
				            <label for="" class="col-sm-2 control-label">Select Designation <span>*</span></label>
				            <div class="col-sm-3">
				            	<select class="form-control select2" name="designation_id" style="width:300px;">
								<?php
				            	$i=0;
$statement1 = $this->db->query("SELECT * FROM tbl_designation ORDER BY designation_name ASC");
				            	foreach ($statement1->result() as $row) {
									?>
									<option value="<?php echo $row->designation_id; ?>" <?php if($row->designation_id==$designation_id){echo 'selected';} ?>><?php echo $row->designation_name; ?></option>
	                                <?php
								}
								?>
								</select>
				            </div>
				        </div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Existing Photo</label>
							<div class="col-sm-9" style="padding-top:5px">
								<img src="<?=base_url('assets/admin/uploads/'.$photo);?>" alt="Team Member Photo" style="width:200px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Photo <span>*</span></label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">Existing Banner</label>
							<div class="col-sm-9" style="padding-top:5px">
								<img src="<?=base_url('assets/admin/uploads/'.$banner);?>" alt="Team Member Banner" style="width:200px;">
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">Banner </label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="banner">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Degree </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="degree" value="<?php echo $degree; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Detail </label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="5" name="detail"><?php echo $detail; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Facebook </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="facebook" value="<?php echo $facebook; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Twitter </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="twitter" value="<?php echo $twitter; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">LinkedIn </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="linkedin" value="<?php echo $linkedin; ?>">
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">YouTube </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="youtube" value="<?php echo $youtube; ?>">
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">Google Plus </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="google_plus" value="<?php echo $google_plus; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Instagram </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="instagram" value="<?php echo $instagram; ?>">
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">Flickr </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="flickr" value="<?php echo $flickr; ?>">
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">Address </label>
							<div class="col-sm-6">
								<textarea class="form-control" name="address" style="height: 140px"><?php echo $address; ?></textarea>
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">Practice Location </label>
							<div class="col-sm-6">
								<textarea class="form-control" name="practice_location" style="height: 140px"><?php echo $practice_location; ?></textarea>
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">Phone </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="phone" value="<?php echo $phone; ?>">
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">Email Address </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="email" value="<?php echo $email; ?>">
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">Website </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="website" value="<?php echo $website; ?>">
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
						<h3 class="seo-info">SEO Information</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Title </label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="meta_title" value="<?php echo $meta_title; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Keywords </label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="meta_keyword" value="<?php echo $meta_keyword; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Description </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" style="height:140px;"><?php echo $meta_description; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

</section>

