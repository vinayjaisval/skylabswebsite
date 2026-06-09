<?php
$statement = $this->db->query("SELECT * FROM tbl_products WHERE prod_id=".$id);

foreach ($statement->result() as $row) {
	$news_title         = $row->prod_title;
	$prod_code 			= $row->prod_code;
	
	$meta_title         = $row->meta_title;
	$meta_keyword       = $row->meta_keyword;
	$meta_description   = $row->meta_description;
}
?>


<section class="content-header">
	<div class="content-header-left">
		<h1><?=$news_title;?>(<?=$prod_code;?>)</h1>
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



            <!------------------------->
            <div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li><a href="<?=base_url('Master/products/prod_detail/'.$id);?>">Product Details</a></li>
					<li><a data-toggle="tab">Price</a></li>
					<li><a href="<?=base_url('Master/products/cats/'.$id);?>">Categories</a></li>
					<li><a href="<?=base_url('Master/products/size/'.$id);?>">Size</a></li>
					<li><a href="<?=base_url('Master/products/color/'.$id);?>">Color</a></li>
					
	                <li><a href="<?=base_url('Master/products/photos/'.$id);?>">Photos</a></li>
	                <li><a href="<?=base_url('Master/products/prod_content/'.$id);?>">Product Content</a></li>
	                <li class="active"><a href="<?=base_url('Master/products/seo/'.$id);?>">SEO</a></li>
				</ul>
				<div class="tab-content">
	  				<div class="tab-pane active" id="tab_1">
	  					<form class="form-horizontal" action="<?=base_url('Master/products/addProduct9');?>" method="post" enctype="multipart/form-data">
	  			<input type="hidden" name="id" value="<?=$id;?>">
						<div class="box box-info">
							<div class="box-body">
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
										<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
									</div>
								</div>
							</div>
						</div>
						</form>
	  				</div>
	  			</div>
			</div>


			<!--------------------->











			
		</div>
	</div>

</section>








