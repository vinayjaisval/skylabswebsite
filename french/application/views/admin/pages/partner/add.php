<section class="content-header">
	<div class="content-header-left">
		<h1>Add Partner</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/partner/view');?>" class="btn btn-primary btn-sm">View All</a>
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

			<form class="form-horizontal" action="<?=base_url('Master/partner/addNewUser');?>" method="post" enctype="multipart/form-data">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Photo </label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Type <span>*</span></label>
							<div class="col-sm-6">
								<select class="form-control select2" name="type" required>
									<option value="">--- Select ---</option>
									<option value="1">Partner</option>
									<option value="4">Clients</option>
									<option value="2">G500X Feautures</option>
									<option value="3">Certificate</option>
									<option value="5">Company Timeline</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Link <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="link">
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Page Content </label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="5" name="role"></textarea>
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