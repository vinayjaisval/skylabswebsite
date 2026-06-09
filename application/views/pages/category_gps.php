<div role="main" class="main">
	<section class="page-header page-header-dark page-header-text-light">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb justify-content-start">
						<li><a href="<?= base_url('/'); ?>">Home</a></li>
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



	<section class=" custom-top-image-border-1" style="">
 	<div class="container">
	 	<?php
			$sqlProd = $this->db->query("SELECT * FROM `tbl_products` WHERE `category_id` = '".$cat_id."' order by `prod_id` DESC");
			foreach($sqlProd->result() as $rowProd){ 
		?>
 		<div class="row align-items-center">
 			<div class="col-lg-6 pb-5 mb-5 pb-md-0 mb-lg-0">

 				<div class="overflow-hidden mb-3">
 					<h1 class="font-weight-bold text-9 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms;"><span class="text-9"> <?=$rowProd->prod_title;?></h1>
 				</div>
 				<div class="overflow-hidden mb-5">
 					<p class="lead text-color-dark mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="400" style="animation-delay: 400ms;"><?=$rowProd->prod_content;?></p>
 				</div>

 			</div>
 			<div class="col-6 col-md-10 col-lg-5 mx-auto mx-lg-0 ml-lg-auto appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">

 				<img src="<?php echo base_url('assets/admin/uploads/'.$rowProd->photo); ?>" class=" img-responsive border border-light" alt="" data-plugin-float-element="" data-plugin-options="{'startPos': 'none', 'speed': 8.5, 'transition': true, 'style': 'bottom: 30px; left: -50%; width: 130%; border-width: 8px !important;'}" style="bottom: 30px; left: -50%; width: 150%; border-width: 8px !important; transition: transform 500ms ease 0s; transform: translate3d(0px, 4.5223%, 0px);">

 			</div>
 		</div>
		<?php } ?>
 	</div>
 </section>

 <?php
	$statementAbt = $this->db->query("SELECT * FROM tbl_settings_contact WHERE 1");
	foreach ($statementAbt->result() as $rowA) {
 ?>

 <section class="section" style="background:
    beige;
;">
 	<div class="container pb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
 		<div class="row mt-3">
 			<div class="col">
 				<div class="row justify-content-center text-center">
 					<div class="col-lg-12">
 						<span class="top-sub-title" style="padding-bottom:10px;"><?=$rowA->contact24;?></span>
 						<br />
 						<h2 class="font-weight-extra-bold line-height-1 mb-3 mt-20"><?=$rowA->contact25;?></h2>
 						<p class=" "><?=$rowA->contact26;?></p>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>






 <section class="section" style="background:
    #fff;
;">
 	<div class="container pb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">

 		<div class="row justify-content-center text-center">
 			<div class="col-lg-12">
 				<span class="top-sub-title" style="padding-bottom:10px;"><?=$rowA->contact27;?></span>
 				<br />
 				<h2 class="font-weight-extra-bold line-height-1 mb-3 mt-20"><?=$rowA->contact28;?></h2>


 				</p>
 			</div>
 		</div>

 	</div>

 	<div class="container">
 		<div class="row align-items-baseline mb-4 pb-2">


		 	<?php
				$statementCert = $this->db->query("SELECT * FROM partner WHERE 1 AND type= 2 AND active = 'Active'");							
				foreach ($statementCert->result() as $rowC) {
			?>
 			<div class="col-sm-6 col-lg-3">
 				<div class="icon-box icon-box-style-3 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">
 					<div class="text-center">
 						<img width="100" height="100" src="<?=base_url('assets/admin/uploads/'.$rowC->photo)?>" alt="<?=$rowC->name;?>">
 					</div>
 					<div class="icon-box-info">
 						<div class="icon-box-info-title">
 							<br />
 							<h4 class=" mb-3" style="text-align: center;"><?=$rowC->name;?></h4>
 						</div>

 					</div>
 				</div>
 			</div>
			<?php } ?>




 		</div>

 	</div>
 </section>
 <section class="section bg-light-5 section-text-overlay">
 	<span class="text-background font-primary font-weight-bold appear-animation animated textBgFadeInUp appear-animation-visible" data-appear-animation="textBgFadeInUp" data-appear-animation-delay="500" style="animation-delay: 500ms;"><?=$rowA->contact30;?></span>
 	<div class="container">
 		<div class="row text-center">
 			<div class="col">
 				<h2 class="font-weight-bold mb-20"><?=$rowA->contact29;?></h2>
 			</div>
 		</div>
 		<div class="row">
		 	<?php
				$statementCert = $this->db->query("SELECT * FROM partner WHERE 1 AND type= 3 AND active = 'Active'");							
				foreach ($statementCert->result() as $rowC) {
			?>
 			<div class="col-md-3">
 				<img src="<?=base_url('assets/admin/uploads/'.$rowC->photo)?>" class="img-fluid" alt="<?=$rowC->name;?>">
 			</div>
			<?php } ?>


 		</div>
 	</div>
 </section>
 


<?php } ?>