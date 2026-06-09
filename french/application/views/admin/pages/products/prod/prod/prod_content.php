<?php
$statement = $this->db->query("SELECT * FROM tbl_products WHERE prod_id=".$id);

foreach ($statement->result() as $row) {
	$news_title         = $row->prod_title;
	$news_content       = $row->prod_content;
	$prod_code 			= $row->prod_code;
	$description = $row->description;
	$details = $row->details;
	$video_link = $row->video_link;
}
?>


<section class="content-header">
	<div class="content-header-left">
		<h1><?=$news_title;?>(<?=$prod_code?>)</h1>
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
					<li><a href="<?=base_url('Master/products/price/'.$id);?>">Price</a></li>
					<li><a href="<?=base_url('Master/products/cats/'.$id);?>">Categories</a></li>
					<li><a href="<?=base_url('Master/products/size/'.$id);?>">Size</a></li>
					<li><a href="<?=base_url('Master/products/color/'.$id);?>">Color</a></li>
	                <li><a href="<?=base_url('Master/products/photos/'.$id);?>">Photos</a></li>
	                <li class="active"><a href="#">Product Content</a></li>
	                <li><a href="#">SEO</a></li>
				</ul>
				<div class="tab-content">
	  				<div class="tab-pane active" id="tab_1">
	  					<form class="form-horizontal" action="<?=base_url('Master/products/addProduct8');?>" method="post" enctype="multipart/form-data">
	  			<input type="hidden" name="id" value="<?=$id;?>">
						<div class="box box-info">
							<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-1 control-label">Short Content</label>
							<div class="col-sm-10">
								<textarea class="form-control editor" name="news_content"><?php echo $news_content; ?></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-1 control-label">Description</label>
							<div class="col-sm-10">
								<textarea class="form-control editor" name="description"><?php echo $description; ?></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-1 control-label">Details</label>
							<div class="col-sm-10">
								<textarea class="form-control editor" name="details"><?php echo $details; ?></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-1 control-label">Video Link</label>
							<div class="col-sm-10">
								<input type="text" name="video_link" value="<?php echo $video_link; ?>" class="form-control">
							</div>
						</div>

								<div class="form-group">
									<label for="" class="col-sm-3 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form1">Next</button>
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

