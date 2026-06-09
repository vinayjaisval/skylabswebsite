<section class="content-header">
	<div class="content-header-left">
		<h1>Add Sub Sub Category</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/products/view_sub');?>" class="btn btn-primary btn-sm">View All</a>
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

			<form class="form-horizontal" action="<?=base_url('Master/products/addSub');?>" method="post" enctype="multipart/form-data">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Name <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="news_title" placeholder="Example: Name">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label"> Slug </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="news_slug" placeholder="Slug">
							</div>
						</div>
						
						<hr>

						<div class="form-group">
				            <label for="" class="col-sm-3 control-label">Select Category <span>*</span></label>
				            <div class="col-sm-3">
				            	<select class="form-control select2" name="category_id" id="type" onchange="myFunctn()">
				            		<option value="">Select a category</option>
				            		<?php
						            	$i=0;
						            	$statement = $this->db->query("SELECT * FROM tbl_category_prod WHERE status = 1 ORDER BY category_name ASC");
						            	foreach ($statement->result() as $row) {
						            		?>
											<option value="<?php echo $row->category_id; ?>"><?php echo $row->category_name; ?></option>
						            		<?php
						            	}
					            	?>
				            	</select>
				            </div>
				        </div>


				        <div class="form-group">
				            <label class="col-md-3 control-label">Sub Category <span>*</span></label>
				            <div class="col-md-4">
				              <select name="sub_cat_name" id="type1" class="form-control select2"></select>
				            </div>
				        </div>

				        

						<h3 class="seo-info">SEO Information</h3>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Meta Title </label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="meta_title">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Meta Keywords </label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="meta_keyword">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Meta Description </label>
							<div class="col-sm-8">
								<textarea class="form-control" name="meta_description" style="height:200px;"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label"></label>
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



<script type="text/javascript">
	function myFunctn(){
		var categoryId = $('#type').val();
		$.ajax({
            url: "<?=base_url('Master/products/ajaxSubCat');?>",
            type: "POST",
            data: "categoryId="+categoryId,
            success: function (response) {
                $("#type1").html(response);
            },
        });
	}

</script>




