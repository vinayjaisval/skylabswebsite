
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


	<?php
	$statementServ = $this->db->query("SELECT * FROM tbl_page_content WHERE page_id=".$page_id);
	foreach ($statementServ->result() as $rowServ) {
	?>

	<section class="section" style="padding-top:0%!important; ">
		<div class="container">
			<div class="row text-center mb-4">
				<div class="col">
					<span class="top-sub-title text-color-primary"><?=$rowServ->page1;?></span>
					<h2 class="font-weight-bold"><?=$rowServ->page2;?></h2>
					<p class="lead"><?=$rowServ->page3;?></p>
				</div>
			</div>
			<div class="row">
				<div class="col highlight-boxes highlight-boxes-rounded">
					<svg class="particles" viewBox="0 0 1351 456" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" x="0px" y="0px" width="1351px" height="456px">
						<g class="g-particles g-particles-group-1" data-appear-animation="expandParticles" data-appear-animation-delay="500">
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 71.3474 409 C 69.7543 412.6979 74.1068 412.9063 74.9886 411.5 C 75.8705 410.0948 78.4593 413.0886 75.899 414 " />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 501.3474 56 C 499.7543 59.6979 504.1068 59.9063 504.9886 58.5 C 505.8705 57.0948 508.4593 60.0886 505.899 61 " />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 302 437.5 C 302 437.2239 302.2239 437 302.5 437 C 302.7761 437 303 437.2239 303 437.5 C 303 437.7761 302.7761 448 302.5 448 C 302.2239 448 302 437.7761 302 437.5 Z" />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 66 262 L 65 268 L 71 266 L 66 262 Z" />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 1281 112 L 1280 118 L 1286 116 L 1281 112 Z" />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 949 448 L 948 444 L 954 442 L 949 448 Z" />
						</g>
						<g class="g-particles g-particles-group-2" data-appear-animation="expandParticles" data-appear-animation-delay="800">
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 1290 190.5 C 1290 190.2248 1290.2239 190 1290.5 190 C 1290.7761 190 1291 190.2248 1291 190.5 C 1291 190.7762 1290.7761 191 1290.5 191 C 1290.2239 191 1290 190.7762 1290 190.5 Z" />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 424 39 L 429 48 L 427 43 " />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 1093 58 L 1098 57 L 1096 62 " />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 204.5 433.1666 L 209 437 L 210.3333 431 L 204.5 433.1666 Z" />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 67 341 L 77 335 " />
						</g>
						<g class="g-particles g-particles-group-3" data-appear-animation="expandParticles" data-appear-animation-delay="1100">
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 59 186.5 C 59 186.2248 59.2239 186 59.5 186 C 59.7761 186 60 186.2248 60 186.5 C 60 186.7762 59.7761 187 59.5 187 C 59.2239 187 59 186.7762 59 186.5 Z" />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 923 45 L 922.4713 40.8965 L 927.5314 42.3751 " />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 359 36.5 C 359 36.2248 359.2239 36 359.5 36 C 359.7761 36 360 36.2248 360 36.5 C 360 36.7762 359.7761 37 359.5 37 C 359.2239 37 359 36.7762 359 36.5 Z" />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 254 57 L 253.4713 52.8965 L 258.5313 54.3751 " />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 671 77 L 681 71 " />
						</g>
						<g class="g-particles g-particles-group-4" data-appear-animation="expandParticles" data-appear-animation-delay="1400">
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 1148 70.5 C 1148 70.2248 1148.2239 70 1148.5 70 C 1148.7761 70 1149 70.2248 1149 70.5 C 1149 70.7762 1148.7761 71 1148.5 71 C 1148.2239 71 1148 70.7762 1148 70.5 Z" />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 849 60.3474 C 845.3021 58.7543 845.0948 63.1068 846.5 63.9886 C 847.9063 64.8705 844.9114 67.4593 844 64.899 " />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 1144.5 434.8334 L 1139 437 L 1143.6666 441 L 1144.5 434.8334 Z" />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 991 40.5 C 991 40.2248 991.2239 40 991.5 40 C 991.7761 40 992 40.2248 992 40.5 C 992 40.7762 991.7761 41 991.5 41 C 991.2239 41 991 40.7762 991 40.5 Z" />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 1274 339 L 1284 347 " />
						</g>
						<g class="g-particles g-particles-group-5" data-appear-animation="expandParticles" data-appear-animation-delay="1700">
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 202 67.5 C 202 67.2248 202.2239 67 202.5 67 C 202.7761 67 203 67.2248 203 67.5 C 203 67.7762 202.7761 68 202.5 68 C 202.2239 68 202 67.7762 202 67.5 Z" />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 398 435 L 397 441 L 403 439 L 398 435 Z" />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 1281 265 L 1280 271 L 1286 269 L 1281 265 Z" />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 1048 441.5 C 1048 441.2239 1048.2239 441 1048.5 441 C 1048.7761 441 1049 441.2239 1049 441.5 C 1049 441.7761 1048.7761 442 1048.5 442 C 1048.2239 442 1048 441.7761 1048 441.5 Z" />
							<path stroke="#989d9f" fill="#989d9f" stroke-width="1" d="M 64.8333 108.5 L 67 114 L 71 109.3333 L 64.8333 108.5 Z" />
						</g>
					</svg>
					<div class="wrap-boxes">
						<div class="col-md-4 text-center bg-light-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
							<i class="lnr lnr-map-marker background-icon background-icon-right"></i>
							<h3 class="font-weight-bold text-3 mb-4 pb-2"><?=$rowServ->page4;?></h3>
							<p><?=$rowServ->page5;?></p>
						</div>
						<div class="col-md-4 text-center bg-dark-5 appear-animation" data-appear-animation="fadeInUpShorter">
							<i class="lnr lnr-map-marker background-icon background-icon-bottom text-color-dark"></i>
							<h2 class="text-color-light font-weight-bold text-3 mb-4 pb-2"><?=$rowServ->page6;?></h2>

							<p><?=$rowServ->page7;?></p>
						</div>
						<div class="col-md-4 text-center  appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200" >
							<i class="lnr lnr-map-marker background-icon background-icon-left"></i>
							
							
							<img src="<?=base_url('assets/admin/uploads/'.$rowServ->page8);?>" class="img-fluid" />




						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php } ?>






	<section class="section" style="background:#e7e7e7;">
		<div class="container">
			<div class="row appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
				<?php
					$menuId=0;
					$getMenuId = $this->db->query("SELECT id FROM tbl_menu WHERE page_id=".$page_id);
					foreach($getMenuId->result() as $rowM){
						$menuId = $rowM->id;
					}
					$statementServ = $this->db->query("SELECT a.id, b.page_name, b.page_slug, b.short_content, b.banner FROM tbl_menu a, tbl_page b WHERE a.page_id = b.id AND a.menu_parent=".$menuId);
					foreach ($statementServ->result() as $rowServ) {
				?>
				<div class="col-md-4 text-center mb-5 mb-md-2">
				    <div class="service_box">
    					<div class="image-frame  mb-4 pb-3">
    						<img src="<?php echo base_url('assets/admin/uploads/'.$rowServ->banner); ?>" class="img-fluid" alt="gis-solution">
    					</div>
    					<h2 class="text-4 font-weight-bold mb-3"><?=$rowServ->page_name;?></h2>
    					<p><?=$rowServ->short_content;?></p>
    					<a href="<?php echo base_url($rowServ->page_slug.'.html'); ?>" class="btn btn-outline btn-rounded btn-primary btn-v-3 btn-h-4 font-weight-bold text-0 appear-animation animated appear-animation-visible fadeInUpShorter" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">Know More</a>
    				</div>
				</div>
				
				<?php } ?>

			</div>
		</div>

	</section>



	














<?php
$statement = $this->db->query("SELECT * FROM tbl_settings_home WHERE 1");
foreach ($statement->result() as $rowH) {
    ?>

	<div class="section section-height-2 bg-dark appear-animation" data-appear-animation="fadeIn" data-appear-animation-duration="1s">
		<div class="container">
			<div class="counters counters-light">
				<div class="row">
					<div class="col-12 col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter">
						<div class="counter">
							<strong data-to="<?=$rowH->home_21;?>" data-append="+"><?=$rowH->home_21;?></strong>
							<label class="font-weight-light"><?=$rowH->home_22;?></label>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter">
						<div class="counter">
							<strong data-to="<?=$rowH->home_23;?>"><?=$rowH->home_23;?></strong>
							<label class="font-weight-light"><?=$rowH->home_24;?></label>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInLeftShorter">
						<div class="counter">
							<strong data-to="<?=$rowH->home_25;?>"data-append="+"><?=$rowH->home_25;?></strong>
							<label class="font-weight-light"><?=$rowH->home_26;?></label>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInLeftShorter">
						<div class="counter">
							<strong data-to="<?=$rowH->home_27;?>"data-append="+"><?=$rowH->home_27;?></strong>
							<label class="font-weight-light"><?=$rowH->home_28;?></label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php } ?>
	

</div>



<style>
 .service_box{
    border: 1px solid #ccc;
    padding: 6px;
    box-shadow: 2px 2px 2px 2px #cccc;
    border-radius: 6px;
    margin-bottom: 10px;
}

.service_box img{
    height: 180px;
    max-width: 100%;
}
</style>
