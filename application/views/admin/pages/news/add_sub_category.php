<section class="content-header">
	<div class="content-header-left">
		<h1>Add Sub Category</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/news/sub_category');?>" class="btn btn-primary btn-sm">View All</a>
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

			<form class="form-horizontal" action="<?=base_url('Master/news/addSubCatValues');?>" method="post">

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
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Select Category <span>*</span></label>
							<div class="col-sm-4">
								<select class="form-control select2" name="category_id">
									<option value="">Select a category</option>
									<?php
$statement = $this->db->query("SELECT * FROM tbl_category ORDER BY category_id ASC");					
									foreach ($statement->result() as $row) {
										echo '<option value="'.$row->category_id.'">'.$row->category_name.'</option>';
									}
									?>
								</select>
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
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>

			</form>


		</div>
	</div>

</section>

