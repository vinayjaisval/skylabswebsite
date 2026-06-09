<?php
$statement = $this->db->query("SELECT * FROM tbl_products WHERE prod_id=".$id);

foreach ($statement->result() as $row) {
	$news_title         = $row->prod_title;
	$prod_code 			= $row->prod_code;
	
	$category_id        = $row->category_id;
	$sub_category_id    = $row->sub_category_id;
	$sub_sub_category_id= $row->sub_sub_category_id;
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
					<li class="active"><a href="<?=base_url('Master/products/cats/'.$id);?>">Categories</a></li>
					<li><a href="#">Size</a></li>
					<li><a href="#">Color</a></li>
					
	                <li><a href="#">Photos</a></li>
	                <li><a href="#">Product Content</a></li>
	                <li><a href="#">SEO</a></li>
				</ul>
				<div class="tab-content">
	  				<div class="tab-pane active" id="tab_1">


<?php if(!empty($category_id)){ ?>
<form class="form-horizontal" action="<?=base_url('Master/products/addProduct3');?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?=$id;?>">
	<div class="box box-info">
		<div class="box-body">
			<div class="form-group">
		        <label for="" class="col-sm-3 control-label">Categories <span>*</span></label>
		        <div class="col-sm-3">
		        	<select required class="form-control select2" name="category_id" id="type" onchange="myFunctn()">
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
		        <label for="" class="col-sm-3 control-label">Sub Categories <span>*</span></label>
		        <div class="col-sm-4">
		        	<select class="form-control select2" name="sub_cat_name" id="removeNameAtr" onchange="myFunctn1(this.value)">
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
		            <label class="col-md-3 control-label">Sub Category <span>*</span></label>
		            <div class="col-md-9">
		              <select name="" id="type1" class="form-control select2" onchange="myFunctn1(this.value)"></select>
		            </div>
		        </div>
		    </div>

		    <div class="form-group sub_brand_hide">
		        <label for="" class="col-sm-3 control-label"> Sub Sub Category <span>*</span></label>
		        <div class="col-sm-4">
		        	<select class="form-control select2" name="sub_sub_category_id" id="removeNameAtr1">
		        		<option value="">Select Sub Sub Category</option>
		        	<?php
			           $statement = $this->db->query("SELECT * FROM tbl_sub_sub_category_prod WHERE FIND_IN_SET({$sub_category_id}, sub_category_id) ORDER BY id ASC");
		            	foreach ($statement->result() as $row) {
		            		?>
							<option <?php if($row->id==$sub_sub_category_id){echo 'selected';} ?> value="<?php echo $row->id; ?>"><?php echo $row->name_sub; ?></option>
		            		<?php
		            	}
		            ?>
		        	</select>
		        </div>
		    </div>
		    <div class="sub_brand_show" style="display: none;">
		        <div class="form-group">
		            <label class="col-md-3 control-label">Sub Sub Category :</label>
		            <div class="col-md-9">
		              <select name="" id="sub_sub_category_id" class="form-control select2"></select>
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
<?php } else { ?>
<form class="form-horizontal" action="<?=base_url('Master/products/addProduct3');?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?=$id;?>">
	<div class="box box-info">
		<div class="box-body">

			<div class="form-group">
	            <label for="" class="col-sm-3 control-label">Select Category <span>*</span></label>
	            <div class="col-sm-3">
	            	<select class="form-control select2" name="category_id" id="type" onchange="myFunctn()">
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


	        <div class="form-group">
	            <label class="col-md-3 control-label">Sub Category :</label>
	            <div class="col-md-4">
	              <select name="sub_cat_name" onchange="sub_sub_cat(this.value)" id="type1" class="form-control select2"></select>
	            </div>
	        </div> 

	        <div class="form-group">
	            <label class="col-md-3 control-label"> Sub Sub Category :</label>
	            <div class="col-md-4">
	              <select name="sub_sub_category_id" id="brand1" class="form-control select2"></select>
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
<?php } ?>


	  					
	  				</div>
	  			</div>
			</div>


			<!--------------------->
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




