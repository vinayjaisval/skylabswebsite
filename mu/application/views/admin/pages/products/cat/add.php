
<section class="content-header">
	<div class="content-header-left">
		<h1>Add Category</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/products/category');?>" class="btn btn-primary btn-sm">View All</a>
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

			<form class="form-horizontal" action="<?=base_url('Master/products/addCatValues');?>" method="post" enctype="multipart/form-data">

				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Category Name <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="category_name" placeholder="Example: Health Tips">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Category Slug </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="category_slug" placeholder="Example: health-tips">
							</div>
						</div>
						<div class="form-group" style="display: none;">
							<label for="" class="col-sm-2 control-label"> Photo </label>
							<div class="col-sm-4" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
								<div><b>Note:-</b> Image Size Should be 168X168px</div>
							</div>
						</div>
						<div class="form-group" style="display: none;">
							<label for="" class="col-sm-2 control-label">Percentage for Vendor </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="category_perc" placeholder="Example: Percentage for Vendor">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Order </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="cat_order" placeholder="Example: 1">
							</div>
						</div>
						<div class="form-group">
        					<label for="" class="col-sm-1 control-label">Description </label>
        					<div class="col-sm-10">
        						<textarea class="form-control ckeditor" rows="5" name="description"></textarea>
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

