

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Product</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/products/view');?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php
$statement = $this->db->query("SELECT * FROM tbl_products WHERE prod_id=".$id);

foreach ($statement->result() as $row) {
	$news_title         = $row->prod_title;
	$news_slug          = $row->prod_slug;
	$news_content       = $row->prod_content;
	$prod_code 			= $row->prod_code;
	
	$category_id        = $row->category_id;

	$tags 				= $row->tags;

	$prod_price_old		= $row->prod_price_old;
	
	$meta_title         = $row->meta_title;
	$meta_keyword       = $row->meta_keyword;
	$meta_description   = $row->meta_description;
	$photo 				= $row->photo;
}
?>

<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if ($this->session->flashdata('success')) { ?>
		            <div class="alert alert-success"><b>Success:-</b> <?=$this->session->flashdata('success');?></div>
		        <?php } ?>
		        <?php if ($this->session->flashdata('error')) { ?>
		            <div class="alert alert-danger"><b>Error:-</b> <?=$this->session->flashdata('error');?></div>
		        <?php } ?>

			<form class="form-horizontal" action="<?=base_url('Master/products/updateProductSS');?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?=$id;?>">
				<input type="hidden" name="current_photo" value="<?=$photo;?>">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Product Code <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="prod_code" placeholder="Product Code" value="<?=$prod_code;?>">
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Product Title <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" required class="form-control" name="news_title" value="<?php echo $news_title; ?>">
							</div>
						</div>
						<div class="form-group">
		                    <label for="" class="col-sm-3 control-label">Product Slug</label>
		                    <div class="col-sm-6">
		                        <input type="text" class="form-control" name="news_slug" value="<?php echo $news_slug; ?>">
		                    </div>
		                </div>

		                <hr>

		               


						<div class="form-group">
				            <label for="" class="col-sm-3 control-label">Categories <span>*</span></label>
				            <div class="col-sm-3">
				            	<select required class="form-control select2" name="category_id" >
								<?php
				            	$i=0;
				            	$statement = $this->db->query("SELECT * FROM tbl_category_prod WHERE status = 1 ORDER BY category_name ASC");
				            	
				            	foreach ($statement->result() as $row) {
									?>
									<option value="<?php echo $row->category_id; ?>" <?php if($row->category_id==$category_id){echo 'selected';} ?>><?php echo $row->category_name; ?></option>
	                                <?php
								}
								?>
								</select>
				            </div>
				        </div>
				        
				        <hr>


				        

						<div class="form-group">
				            <label for="" class="col-sm-3 control-label">Existing Photos</label>
				            <div class="col-sm-9" style="padding-top:6px;">
							<img src="<?=base_url('assets/admin/uploads/'.$photo);?>" class="img-responsive" style="max-width: 100px;" >
				            </div>
				        </div>
						<div class="form-group">
				            <label for="" class="col-sm-3 control-label">New Photos</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				                <input type="file" name="photo" multiple >
				                <div><b>Note:-</b> Image Size Should be 460X380px</div>
				            </div>
				        </div>
				        
						

						<hr>

						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Tags </label>
							<div class="col-sm-8"> 
								<input id="form-tags-1" class="form-control" name="tags" type="text" value="<?=$tags;?>">
							</div>
						</div>

						<hr>

						
						<div class="form-group">
							<label for="" class="col-sm-1 control-label">Product Content <span>*</span></label>
							<div class="col-sm-10">
								<textarea class="form-control editor" rows="5" name="news_content"><?php echo $news_content; ?></textarea>
							</div>
						</div>
						
						
						
						<h3 class="seo-info">SEO Information</h3>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Meta Title </label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="meta_title" value="<?php echo $meta_title; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Meta Keywords </label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="meta_keyword" value="<?php echo $meta_keyword; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Meta Description </label>
							<div class="col-sm-8">
								<textarea class="form-control" name="meta_description" style="height:200px;"><?php echo $meta_description; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" >Update</button>
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

		$('.sub_cat_show').css('display', 'block');
		$('.sub_cat_hide').css('display', 'none');

		$('#type1').attr('name', 'sub_cat_name');
		$('#removeNameAtr').removeAttr('name');


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

	function myFunctn1(sub_cat){
		var sub_cat = sub_cat;

		

		$('.sub_brand_show').css('display', 'block');
		$('.sub_brand_hide').css('display', 'none');

		$('#brand1').attr('name', 'brand');
		$('#removeNameAtr1').removeAttr('name');

		
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