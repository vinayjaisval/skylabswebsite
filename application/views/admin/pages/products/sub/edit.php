

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Product</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/products/view_sub');?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php
$statement = $this->db->query("SELECT * FROM tbl_sub_sub_category_prod WHERE id=".$id);

foreach ($statement->result() as $row) {
	$news_title         = $row->name_sub;
	$news_slug          = $row->slug;
	$category_id        = $row->category_id;
	$sub_category_id    = $row->sub_category_id;
	
	$meta_title         = $row->meta_title;
	$meta_keyword       = $row->meta_keyword;
	$meta_description   = $row->meta_description;
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

			<form class="form-horizontal" action="<?=base_url('Master/products/updateSub');?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?=$id;?>">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Product Title <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="news_title" value="<?php echo $news_title; ?>">
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
				            	<select class="form-control select2" name="category_id" id="type" onchange="myFunctn()">
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
				        <div class="form-group sub_cat_hide">
				            <label for="" class="col-sm-3 control-label">Sub Categories </label>
				            <div class="col-sm-4">
				            	<select class="form-control select2" name="sub_cat_name" id="removeNameAtr" >
				            		<option value="">Select Sub Cat</option>
								<?php
				            	$i=0;
				            	$statement = $this->db->query("SELECT * FROM tbl_sub_category_prod WHERE category_id = ".$category_id." AND status = 1 ORDER BY name ASC");
				            	
				            	foreach ($statement->result() as $row) {
									?>
									<option value="<?php echo $row->id; ?>" <?php if($row->id==$sub_category_id){echo 'selected';} ?>><?php echo $row->name; ?></option>
	                                <?php
								}
								?>
								</select>
				            </div>
				        </div>
				        <div class="sub_cat_show">
					        <div class="form-group">
					            <label class="col-md-3 control-label">Sub Category :</label>
					            <div class="col-md-9">
					              <select name="sub_cat_name" id="type1" class="form-control select2"></select>
					            </div>
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

</script>