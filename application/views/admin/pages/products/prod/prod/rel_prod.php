<?php
$statement = $this->db->query("SELECT * FROM tbl_products WHERE prod_id=".$id);

foreach ($statement->result() as $row) {
	$news_title         = $row->prod_title;
	$prod_code 			= $row->prod_code;
	
	$colors				= $row->colors;
	$rel_prod_code 		= $row->rel_prod_code;
}
$submenuColor = explode(",",$colors);
$rel_prod_code = explode( '@#@#', $rel_prod_code);
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
					<li class="active"><a href="#">Relative Products</a></li>
	                <li><a href="#">Photos</a></li>
	                <li><a href="#">Product Content</a></li>
	                <li><a href="#">SEO</a></li>
				</ul>
				<div class="tab-content">
	  				<div class="tab-pane active" id="tab_1">
	  					<form class="form-horizontal" action="<?=base_url('Master/products/addProduct6');?>" method="post" enctype="multipart/form-data">
	  			<input type="hidden" name="id" value="<?=$id;?>">
						<div class="box box-info">
							<div class="box-body">
								
						<div class="form-group">
				            <label class="col-md-1 control-label"></label>
				            <div class="col-md-10">
				            <div class="row">
				            <?php
				            	$c = -1; $d = -1;
						        $statement = $this->db->query("SELECT * FROM tbl_prod_color WHERE 1 ORDER BY id DESC");
						        foreach ($statement->result() as $row) {
						    ?>
				            <div class="col-md-2" style="margin-bottom: 10px;">
				            	<label>
				            	<input <?php if( in_array($row->id, $submenuColor)){ echo "checked";	} ?> type="checkbox" name="color[]" value="<?=$row->id;?>"> <span style="display: inline-block; width: 50px; height: 50px; border-radius: 50%; background-color: #<?=$row->name;?>; vertical-align: middle;"></span></label>
				            	<br>


				            	<?php if( in_array($row->id, $submenuColor)){ ?>

					            	<input type="text" class="form-control" name="rel_prod_code_<?=$row->id;?>" value="<?php if(isset($rel_prod_code[$c=$c+1])){ echo $rel_prod_code[$d=$d+1]; } ?>">

				            	<?php } else { ?>
					            	<input type="text" class="form-control" name="rel_prod_code_<?=$row->id;?>" placeholder="Product Code">
				            	<?php }; ?>


					            
				            </div>
				        	<?php } ?>
				        	</div>
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



