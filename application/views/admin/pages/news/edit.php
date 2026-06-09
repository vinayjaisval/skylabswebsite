

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit News</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/news/view');?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php
$statement = $this->db->query("SELECT * FROM tbl_news WHERE news_id=".$id);

foreach ($statement->result() as $row) {
	$news_title         = $row->news_title;
	$news_slug          = $row->news_slug;
	$news_content       = $row->news_content;
	$news_content_short = $row->news_content_short;
	$news_date          = $row->news_date;
	$photo              = $row->photo;
	$banner				= $row->banner;
	$category_id        = $row->category_id;
	$sub_category_id    = $row->sub_category_id;
	$publisher          = $row->publisher;
	$meta_title         = $row->meta_title;
	$meta_keyword       = $row->meta_keyword;
	$meta_description   = $row->meta_description;
	$tags 				= $row->tags;
	
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

			<form class="form-horizontal" action="<?=base_url('Master/news/updateNews');?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?=$id;?>">

				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">News Title <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="news_title" value="<?php echo $news_title; ?>">
							</div>
						</div>
						<div class="form-group">
		                    <label for="" class="col-sm-3 control-label">News Slug</label>
		                    <div class="col-sm-6">
		                        <input type="text" class="form-control" name="news_slug" value="<?php echo $news_slug; ?>">
		                    </div>
		                </div>
		                <hr>

		                
				        <input type="hidden" name="previous_photo" value="<?php echo $photo; ?>">
						<div class="form-group">
				            <label for="" class="col-sm-3 control-label">Featured Photo</label>
				            <div class="col-sm-4" style="padding-top:6px;">
				                <input type="file" name="photo">
				                <div><b>Note:-</b> Image Size Should be 790X510px</div>
				            </div>
				            <div class="col-sm-3">
				                <img src="<?=base_url('assets/admin/uploads/'.$photo);?>" class="existing-photo" style="max-width:100%;">
				            </div>
				        </div>
				        
						<input type="hidden" name="previous_banner" value="<?php echo $banner; ?>">
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Banner </label>
							<div class="col-sm-4" style="padding-top:5px">
								<input type="file" name="banner">
							</div>
							<div class="col-sm-3">
								<img src="<?=base_url('assets/admin/uploads/'.$banner);?>" alt="News Banner Photo" style="max-width:100%;">
							</div>
						</div>
						<hr>
						<div class="form-group">
				            <label for="" class="col-sm-3 control-label">Categories <span>*</span></label>
				            <div class="col-sm-3">
				            	<select class="form-control select2" name="category_id" id="type" onchange="myFunctn()">
								<?php
				            	$i=0;
				            	$statement = $this->db->query("SELECT * FROM tbl_category ORDER BY category_name ASC");
				            	
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
				            	<select class="form-control select2" name="sub_cat_name" id="removeNameAtr">
				            		<option value="">Select Sub Cat</option>
								<?php
				            	$i=0;
				            	$statement = $this->db->query("SELECT * FROM tbl_sub_category WHERE category_id = ".$category_id." ORDER BY name ASC");
				            	
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
					            <div class="col-md-4">
					              <select name="" id="type1" class="form-control select2" style="width: 100%;"></select>
					            </div>
					        </div>
				        </div> 

				        <hr>

				        <div class="form-group">
							<label for="" class="col-sm-3 control-label">News Publish Date <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="news_date" id="datepicker" value="<?php echo $news_date; ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Publisher </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="publisher" value="<?php echo $publisher; ?>">
							</div>
						</div>


						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Tags </label>
							<div class="col-sm-8">
								<input id="form-tags-1" class="form-control" name="tags" type="text" value="<?=$tags;?>">
							</div>
						</div>
						<hr>

						<div class="form-group">
							<label for="" class="col-sm-8 col-md-offset-2">News Content (Short) <span>*</span></label>
							<div class="col-sm-8 col-md-offset-2">
								<textarea class="form-control" name="news_content_short" style="height:100px;"><?php echo $news_content_short; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-12">News Content <span>*</span></label>
							<div class="col-sm-12">
								<textarea class="form-control editor" name="news_content"><?php echo $news_content; ?></textarea>
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
            url: "<?=base_url('Master/news/ajaxSubCat');?>",
            type: "POST",
            data: "categoryId="+categoryId,
            success: function (response) {
                $("#type1").html(response);
            },
        });
	}


	

</script>