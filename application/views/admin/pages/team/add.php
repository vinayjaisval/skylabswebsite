


<section class="content-header">
	<div class="content-header-left">
		<h1>Add Team Member</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/team/view');?>" class="btn btn-primary btn-sm">View All</a>
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

			<form class="form-horizontal" action="<?=base_url('Master/team/addTeam');?>" method="post" enctype="multipart/form-data">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name" >
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Slug </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="slug" >
							</div>
						</div>
						<div class="form-group">
				            <label for="" class="col-sm-2 control-label">Select Designation <span>*</span></label>
				            <div class="col-sm-3">
				            	<select class="form-control select2" name="designation_id" style="width:300px;">
				            		<option value="">Select a designation</option>
				            		<?php
						            	$i=0;
$statement = $this->db->query("SELECT * FROM tbl_designation ORDER BY designation_name ASC");
						            	foreach ($statement->result() as $row) {
						            		?>
											<option value="<?php echo $row->designation_id; ?>"><?php echo $row->designation_name; ?></option>
						            		<?php
						            	}
					            	?>
				            	</select>
				            </div>
				        </div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Photo <span>*</span></label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
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
								<input type="text" autocomplete="off" class="form-control" name="degree" >
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Detail </label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="5" name="detail"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Facebook </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="facebook" >
							</div>
						</div>
						<div class="form-group" >
							<label for="" class="col-sm-2 control-label">Twitter </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="twitter" value="">
							</div>
						</div>
						<div class="form-group" >
							<label for="" class="col-sm-2 control-label">LinkedIn </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="linkedin" >
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">YouTube </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="youtube" >
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">Google Plus </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="google_plus" >
							</div>
						</div>
						<div class="form-group" >
							<label for="" class="col-sm-2 control-label">Instagram </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="instagram" >
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">Flickr </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="flickr" >
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">Address </label>
							<div class="col-sm-6">
								<textarea class="form-control" name="address" style="height: 140px"></textarea>
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">Practice Location </label>
							<div class="col-sm-6">
								<textarea class="form-control" name="practice_location" style="height: 140px"></textarea>
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">Phone </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="phone" >
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">Email Address </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="email" >
							</div>
						</div>
						<div class="form-group" style="display:none;">
							<label for="" class="col-sm-2 control-label">Website </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="website" >
							</div>
						</div>				        
				        <div class="form-group">
				            <label for="" class="col-sm-2 control-label">Active </label>
				            <div class="col-sm-6">
				                <label class="radio-inline">
				                    <input type="radio" name="status" value="Active" checked>Yes
				                </label>
				                <label class="radio-inline">
				                    <input type="radio" name="status" value="Inactive">No
				                </label>
				            </div>
				        </div>
						<h3 class="seo-info">SEO Information</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Title </label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="meta_title" >
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Keywords </label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="meta_keyword" >
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Description </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" style="height:140px;"></textarea>
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

