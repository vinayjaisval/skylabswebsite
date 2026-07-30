<div role="main" class="main">
	<section class="page-header page-header-dark page-header-text-light">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb justify-content-start">
						<li><a href="<?= base_url('/'); ?>">Kay</a></li>
						<li class="active"><?= $name; ?></li>
					</ul>
				</div>
			</div>
			<div class="row text-left">
				<div class="col-md-12">
					<h1><?= $name; ?></h1>
					<p class="lead"><?= $short_content; ?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="product_listing">
		<article class="container">
		    
		    <?=$description;?>
		    
		    
			<?php
				$i=1;
				$sqlProd = $this->db->query("SELECT * FROM `tbl_products` WHERE `category_id` = '".$cat_id."' AND status = 1 order by `prod_id` DESC");
				foreach($sqlProd->result() as $rowProd){ 
			?>
			<div class="row mb-5 pb-4 border-bottom">
				<?php if($i%2==0){ ?>
				<div class="col-md-10 col-xs-12">
					<h4><?=$rowProd->prod_title;?></h4>
					<p> <?=$rowProd->prod_content;?> </p>
				</div>

				<div class="col-md-2 col-xs-12">
					<img src="<?php echo base_url('assets/admin/uploads/'.$rowProd->photo); ?>" class="img-fluid" alt="gis-solution">
				</div>
				
				<?php } else { ?>
				<div class="col-md-2 col-xs-12">
					<img src="<?php echo base_url('assets/admin/uploads/'.$rowProd->photo); ?>" class="img-fluid" alt="gis-solution">
				</div>
				<div class="col-md-10 col-xs-12">
					<h4><?=$rowProd->prod_title;?></h4>
					<p> <?=$rowProd->prod_content;?> </p>
				</div>
				
				
				<?php } ?>
			</div>
			<?php ++$i; } ?>
		</article>
	</section>
	
	<!---
	<section class="">
		<div class="container">
			<div class="col-md-12">

				<div class="row mb-5">
					<?php
					$sqlProd = $this->db->query("SELECT * FROM `tbl_products` WHERE `category_id` = '".$cat_id."' AND status = 1 order by `prod_id` DESC");
					foreach($sqlProd->result() as $rowProd){ 
					?>
					<div class="col-md-4 text-center mb-5 mb-md-4">
						<div class="block">
						<div class="image-frame">
							<img src="<?php echo base_url('assets/admin/uploads/'.$rowProd->photo); ?>" class="img-fluid" alt="gis-solution">
						</div>
						<h2 class="text-4  main-head font-weight-bold"><?=$rowProd->prod_title;?></h2>
						<?php if($rowProd->prod_content != '#'){ ?>
						<p class="py-2"> <?=$rowProd->prod_content;?></p>
						<?php } ?>
						</div>
					</div>
					
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	-->