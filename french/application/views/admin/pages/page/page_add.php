<section class="content-header">
	<div class="content-header-left">
		<h1>Add Page</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/page/page');?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">
			<?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success"><b>Success:-</b> <?=$this->session->flashdata('success');?></div>
            <?php } ?>
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger"><b>Error:-</b> <?=$this->session->flashdata('error');?></div>
            <?php } ?>
			
			<form class="form-horizontal" action="<?=base_url('Master/page/savePage');?>" method="post" enctype="multipart/form-data">

				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Page Name <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="page_name" placeholder="Example: About Us">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Page Slug </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="page_slug" placeholder="Example: about-us">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Page Layout </label>
							<div class="col-sm-2">
								<select class="form-control select2" name="page_layout" style="width:300px;" >
									<option value="Full Width Page Layout">Full Width Page Layout</option>
									<option value="About Us Page Layout">About Us Page Layout</option>
									<option value="Blog Page Layout">Blog Page Layout</option>
									<option value="Success Story Page Layout">Success Story Page Layout</option>
									<option value="Team Layout">Team Page Layout</option>
									<option value="Partner Layout">Partner Page Layout</option>
									<option value="Client Layout">Client Page Layout</option>
									<option value="Career Layout">Career Page Layout</option>
									<option value="Contact Us Page Layout">Contact Us Page Layout</option>
									<option value="LoRA Based Layout">LoRA Based Page Layout</option>
									<option value="Focused Verticle Are">Focused Verticle Are</option>
									<option value="Product Page Layout">Product Page Layout</option>
									<option value="Service Page Layout">Service Page Layout</option>
									<option value="Timeline Page Layout">Timeline Page Layout</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Page Content </label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="page_content"></textarea>
							</div>
						</div>	
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Banner </label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="banner">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>					
						<div class="form-group">
				            <label for="" class="col-sm-2 control-label">Active? </label>
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
							<label for="" class="col-sm-2 control-label">Related Page Slug </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="related_page" style="height:100px;" placeholder="Enter Slug Name by Comma Seperated"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"> Banner Tagline </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="short_content" style="height:100px;" placeholder="Enter Banner Tagline"></textarea>
							</div>
						</div> 
						<h3 class="seo-info">SEO Information</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Title </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_title">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Keywords </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_keyword" style="height:100px;"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Description </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" style="height:100px;"></textarea>
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

