

<?php
$statement = $this->db->query("SELECT * FROM tbl_category_prod WHERE category_id=".$id);
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Category</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/products/category');?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


<?php							
foreach ($statement->result() as $row) {
	$category_name = $row->category_name;
	$category_slug = $row->category_slug;
    $category_perc = $row->category_perc;
    $category_photo = $row->photo;
    $description = $row->description;
    $cat_order = $row->cat_order;
	$meta_title = $row->meta_title;
	$meta_keyword = $row->meta_keyword;
	$meta_description = $row->meta_description;
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

        <form class="form-horizontal" action="<?=base_url('Master/products/updateCategory');?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$id;?>">

        <div class="box box-info">

            <div class="box-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Category Name <span>*</span></label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="category_name" value="<?php echo $category_name; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Category Slug</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="category_slug" value="<?php echo $category_slug; ?>">
                    </div>
                </div>
                <div class="form-group" style="display: none;">
                    <label for="" class="col-sm-2 control-label">Percentage for Vendor</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="category_perc" value="<?php echo $category_perc; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Order</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="cat_order" value="<?php echo $cat_order; ?>">
                    </div>
                </div>
                <input type="hidden" name="previous_banner" value="<?php echo $category_photo; ?>">
                <div class="form-group" >
                    <label for="" class="col-sm-2 control-label">Photo </label>
                    <div class="col-sm-6" style="padding-top:5px">
                        <input type="file" name="banner">(Only jpg, jpeg, gif and png are allowed)
                        <div><b>Note:-</b> Image Size Should be 168X168px</div>
                    </div>
                    <div class="col-sm-3" style="padding-top:5px">
                        <img src="<?=base_url('assets/admin/uploads/'.$category_photo);?>" alt="News Banner Photo" style="max-width:100%;">
                    </div>
                </div>
                
                <div class="form-group">
					<label for="" class="col-sm-1 control-label">Description </label>
					<div class="col-sm-10">
						<textarea class="form-control ckeditor" rows="5" name="description"><?php echo $description; ?></textarea>
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

