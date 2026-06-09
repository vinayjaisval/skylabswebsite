<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Page</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/page/page')?>" class="btn btn-primary btn-sm">View All</a>
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

        <form class="form-horizontal" action="<?=base_url('Master/page/updatePage');?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="box box-info">

            <div class="box-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Page Name <span>*</span></label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="page_name" value="<?php echo $page_name; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Page Slug</label>
                    <div class="col-sm-4">
                        <input type="text"  <?php if($id == '11'){ echo "readonly";} ?> class="form-control" name="page_slug" value="<?php echo $page_slug; ?>">
                    </div>
                </div>
                <div class="form-group">
					<label for="" class="col-sm-2 control-label">Page Layout </label>
					<div class="col-sm-2">
						<select class="form-control select2" name="page_layout" style="width:300px;">
							<option value="Full Width Page Layout" <?php if($page_layout=='Full Width Page Layout') {echo 'selected';} ?>>Full Width Page Layout</option>
							<option value="About Us Page Layout" <?php if($page_layout=='About Us Page Layout') {echo 'selected';} ?>>About Us Page Layout</option>
							<option value="Blog Page Layout" <?php if($page_layout=='Blog Page Layout') {echo 'selected';} ?>>Blog Page Layout</option>
							<option value="Success Story Page Layout" <?php if($page_layout=='Success Story Page Layout') {echo 'selected';} ?>>Success Story Page Layout</option>
							<option value="Team Layout" <?php if($page_layout=='Team Layout') {echo 'selected';} ?>>Team Page Layout</option>
							<option value="Partner Layout" <?php if($page_layout=='Partner Layout') {echo 'selected';} ?>>Partner Page Layout</option>
							<option value="Client Layout" <?php if($page_layout=='Client Layout') {echo 'selected';} ?>>Client Page Layout</option>
							<option value="Career Layout" <?php if($page_layout=='Career Layout') {echo 'selected';} ?>>Career Page Layout</option>
							<option value="Contact Us Page Layout" <?php if($page_layout=='Contact Us Page Layout') {echo 'selected';} ?>>Contact Us Page Layout</option>
							<option value="LoRA Based Layout" <?php if($page_layout=='LoRA Based Layout') {echo 'selected';} ?>>LoRA Based Page Layout</option>
							<option value="Focused Verticle Are" <?php if($page_layout=='Focused Verticle Are') {echo 'selected';} ?>>Focused Verticle Are</option>
							<option value="Product Page Layout" <?php if($page_layout=='Product Page Layout') {echo 'selected';} ?>>Product Page Layout</option>
							<option value="Service Page Layout" <?php if($page_layout=='Service Page Layout') {echo 'selected';} ?>>Service Page Layout</option>
							<option <?php if($page_layout=='Timeline Page Layout') {echo 'selected';} ?> value="Timeline Page Layout">Timeline Page Layout</option>
						</select>
					</div>
				</div>
                <div class="form-group">
					<label for="" class="col-sm-2 control-label">Page Content </label>
					<div class="col-sm-9">
						<textarea class="form-control editor" name="page_content"><?php echo $page_content; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Existing Banner</label>
					<div class="col-sm-9" style="padding-top:5px">
						<img src="<?=base_url('assets/admin/uploads/'.$banner);?>" alt="Page Banner" style="width:200px;">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Banner </label>
					<div class="col-sm-9" style="padding-top:5px">
						<input type="file" name="banner">(Only jpg, jpeg, gif and png are allowed)
						<input type="hidden" name="oldFile" value="<?=$banner;?>">
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
					<label for="" class="col-sm-2 control-label">Related Page Slug </label>
					<div class="col-sm-9">
						<textarea class="form-control" name="related_page" style="height:100px;" placeholder="Enter Slug Name by Comma Seperated"><?php echo $related_page; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label"> Banner Tagline </label>
					<div class="col-sm-9">
						<textarea class="form-control" name="short_content" style="height:100px;" placeholder="Enter Banner Tagline"><?php echo $short_content; ?></textarea>
					</div>
				</div> 

                <h3 class="seo-info">SEO Information</h3>
                <div class="form-group">
					<label for="" class="col-sm-2 control-label">Meta Title </label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="meta_title" value="<?php echo $meta_title; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Meta Keywords </label>
					<div class="col-sm-9">
						<textarea class="form-control" name="meta_keyword" style="height:100px;"><?php echo $meta_keyword; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Meta Description </label>
					<div class="col-sm-9">
						<textarea class="form-control" name="meta_description" style="height:100px;"><?php echo $meta_description; ?></textarea>
					</div>
				</div>
                <div class="form-group">
                	<label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-success pull-left">Update</button>
                    </div>
                </div>

            </div>
        </div>
        </form>
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
                Are you sure want to delete this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

