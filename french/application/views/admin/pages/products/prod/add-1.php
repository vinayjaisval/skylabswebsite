<?php
$prod_id=0;
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



            <!------------------------->
            <div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab_1" data-toggle="tab">Product Details</a></li>
					<li><a>Price</a></li>
					<li><a>Categories</a></li>
					<li><a>Size</a></li>
					<li><a>Color</a></li>
					<li><a>Relative Products</a></li>
	                <li><a>Photos</a></li>
	                <li><a>Product Content</a></li>
	                <li><a>SEO</a></li>
				</ul>
				<div class="tab-content">
	  				<div class="tab-pane active" id="tab_1">
	  					<form class="form-horizontal" action="<?=base_url('Master/products/addProduct1');?>" method="post" enctype="multipart/form-data">
						<div class="box box-info">
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Product Code <span>*</span></label>
									<div class="col-sm-6">
										<input required type="text" class="form-control" name="prod_code" placeholder="Product Code" value="Alishan-<?=$prod_code;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Product Title <span>*</span></label>
									<div class="col-sm-6">
										<input required type="text" class="form-control" name="news_title" placeholder="Example: Product Headline">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Product Slug </label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="news_slug" placeholder="Example: product-headline">
									</div>
								</div>

								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Tags </label>
									<div class="col-sm-8">
										<input class="form-control form-tags-1" name="tags" type="text" value="">
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
	  				</div>
	  			</div>
			</div>


			<!--------------------->











			
		</div>
	</div>

</section>





