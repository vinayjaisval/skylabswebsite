<?php
$statement = $this->db->query("SELECT prod_id FROM tbl_products");
foreach ($statement->result() as $row) {
	$prod_id = $row->prod_id;
}
$prod_code=($prod_id+1);
?>


<section class="content-header">
	<div class="content-header-left">
		<h1>Add Product</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/products/View');?>" class="btn btn-primary btn-sm">View All</a>
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

			<form class="form-horizontal" action="<?=base_url('Master/products/addProductComp');?>" method="post" enctype="multipart/form-data">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Product Code <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="prod_code" placeholder="Product Code" value="skylabs-<?=$prod_code;?>">
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Product Title <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="news_title" placeholder="Example: Product Headline">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Product Slug </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="news_slug" placeholder="Example: product-headline">
							</div>
						</div>

						<hr>

						

						<div class="form-group">
				            <label for="" class="col-sm-3 control-label">Select Category <span>*</span></label>
				            <div class="col-sm-3">
				            	<select class="form-control select2" name="category_id" >
				            		<option value="">Select a category</option>
				            		<?php
						            	$i=0;
						            	$statement = $this->db->query("SELECT * FROM tbl_category_prod WHERE status = 1 ORDER BY cat_order ASC");
						            	foreach ($statement->result() as $row) {
						            		?>
											<option value="<?php echo $row->category_id; ?>"><?php echo $row->category_name; ?></option>
						            		<?php
						            	}
					            	?>
				            	</select>
				            </div>
				        </div>

				        <hr>

				        

				        <hr>

						<div class="form-group">
				            <label for="" class="col-sm-3 control-label"> Photo <span>*</span></label>
				            <div class="col-sm-6" style="padding-top:6px;">
				                <input type="file" name="photo"  >
				                <div><b>Note:-</b> Image Size Should be 460X380px </div>
				            </div>
				        </div>
				        

						<hr>

						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Tags </label>
							<div class="col-sm-8">
								<input class="form-control form-tags-1" name="tags" type="text" value="">
							</div>
						</div>


						<hr>

						
						<div class="form-group">
							<label for="" class="col-sm-1 control-label">Product Content <span>*</span></label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="5" name="news_content"></textarea>
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

	function sub_sub_cat(sub_cat){
		$('.size').css('display', 'block');
		var sub_cat = sub_cat;
		$.ajax({
            url: "<?=base_url('Master/products/ajaxsub_sub_cat');?>",
            type: "POST",
            data: "sub_cat="+sub_cat,
            success: function (response) {
                $("#brand1").html(response);
            },
        });
	}

</script>




