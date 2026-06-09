<?php
$statement = $this->db->query("SELECT * FROM tbl_products WHERE prod_id=".$id);

foreach ($statement->result() as $row) {
	$news_title         = $row->prod_title;
	$prod_code 			= $row->prod_code;
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
					<li><a href="<?=base_url('Master/products/price/'.$id);?>">Price</a></li>
					<li><a href="<?=base_url('Master/products/cats/'.$id);?>">Categories</a></li>
					<li><a href="<?=base_url('Master/products/size/'.$id);?>">Size</a></li>
					<li><a href="<?=base_url('Master/products/color/'.$id);?>">Color</a></li>
					
	                <li class="active"><a href="#">Photos</a></li>
	                <li><a href="#">Product Content</a></li>
	                <li><a href="#">SEO</a></li>
				</ul>
				<div class="tab-content">
	  				<div class="tab-pane active" id="tab_1">
	  					<form class="form-horizontal" action="<?=base_url('Master/products/addProduct7');?>" method="post" enctype="multipart/form-data">
	  					<input type="hidden" name="id" value="<?=$id;?>">
						<div class="box box-info">
							<div class="box-body">
						<div class="form-group">
				            <label for="" class="col-sm-3 control-label">Existing Photos</label>
				            <div class="col-sm-9">
				            	<?php
				            	$imageExist="";
				            	$img = $this->db->query("SELECT * FROM tbl_prod_image WHERE status = 1 AND prod_id = ".$id);
				            	foreach ($img->result() as $row) {
				            		$imageExist="y";
								?>
								<div class="col-md-2">
					            	<img src="<?=base_url('assets/admin/uploads/'.$row->image);?>" class="img-responsive" >
					            	<a onclick="return confirm('Are you sure?');" href="<?=base_url('Master/products/delete_image/'.$row->id.'/'.$id);?>">Delete</a>
				            	</div>
				            	<?php } ?>
				                
				            </div>
				        </div>
						<div class="form-group">
				            <label for="" class="col-sm-3 control-label">New Photos</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				                <input type="file" name="files" multiple >
				                <div><b>Note:-</b> Image Size Should be 700X1048px</div>
				            </div>
				        </div>

								<div class="form-group">
									<label for="" class="col-sm-3 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success" name="form1">Add Image</button>
										<?php
										if(!empty($imageExist)){ 
										?>
										&nbsp;
										<a href="<?=base_url('Master/products/prod_content/'.$id);?>" class="btn btn-success">Next</a>
										<?php } ?>
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

]