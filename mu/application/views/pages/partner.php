<?php
	$statementAbt = $this->db->query("SELECT * FROM tbl_settings_about WHERE 1");
	foreach ($statementAbt->result() as $rowA) {
?>


<div role="main" class="main">
	<section class="page-header page-header-dark page-header-text-light" style="background-image: url('<?php echo base_url('assets/admin/uploads/' . $banner); ?>')">
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

	<section class="">
		<div class="container" >
			<div class="row">
				<?php
					$statement = $this->db->query("SELECT * FROM partner WHERE 1 AND type= 1 AND active = 'Active'");							
					foreach ($statement->result() as $row) {
				?>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-4 d-flex align-items-center justify-content-center" style="height: 120px;">
					<img src="<?php echo base_url('assets/admin/uploads/'.$row->photo); ?>" class="img-fluid" style="max-height:80px; max-width:100%; object-fit:contain;" alt="">
				</div>
				<?php } ?>

				
			</div>
			<br />
		</div>
</div>
</div>
</section>

<section class="section call-to-action bg-primary call-to-action-text-light call-to-action-height-2">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9">
                <div class="call-to-action-content text-center text-md-left appear-animation" data-appear-animation="fadeInLeftShorter">
                    <h2 class="font-weight-semibold"><?=$rowA->about11;?></h2>
                    <p class="font-weight-light mb-0"><?=$rowA->about12;?></p>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="call-to-action-btn appear-animation" data-appear-animation="fadeInRightShorter">
                    <a href="<?=$rowA->about14;?>" class="btn btn-light btn-rounded btn-3 btn-icon-effect-1 font-weight-bold btn-h-5 btn-v-4">
                        <span class="wrap">
                            <span><?=$rowA->about13;?></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="section bg-light-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col">
                <div class="overflow-hidden">
                    <span class="d-block top-sub-title text-color-primary appear-animation animated" data-appear-animation="maskUp"><?=$rowA->about15;?></span>
                </div>
                <div class="overflow-hidden mb-2">
                    <h2 class="font-weight-bold text-5 mb-0 appear-animation animated" data-appear-animation="maskUp" data-appear-animation-delay="200"><?=$rowA->about16;?></h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="lead mb-0 appear-animation animated" data-appear-animation="maskUp" data-appear-animation-delay="400"><?=$rowA->about17;?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-5 mr-auto mb-4 mb-md-0 appear-animation animated" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                <div class="progress-bar-wrapper progress-bar-style-1 mb-3">
                    <div class="progress-bar-info">
                        <label><?=$rowA->about18;?></label>
                        <span class="progress-bar-percent"><?=$rowA->about19;?>%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" data-to="<?=$rowA->about19;?>" data-delay="500" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-bar-wrapper progress-bar-style-1 mb-3">
                    <div class="progress-bar-info">
                        <label><?=$rowA->about20;?></label>
                        <span class="progress-bar-percent"><?=$rowA->about21;?>%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" data-to="<?=$rowA->about21;?>" data-delay="700" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-bar-wrapper progress-bar-style-1 mb-3">
                    <div class="progress-bar-info">
                        <label><?=$rowA->about22;?></label>
                        <span class="progress-bar-percent"><?=$rowA->about23;?>%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" data-to="<?=$rowA->about23;?>" data-delay="900" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 pl-md-4 pl-lg-0 mb-4 mb-md-0 appear-animation animated" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                <h3 class="font-weight-bold text-4 mb-3"><?=$rowA->about24;?></h3>
                <ul class="list list-style-1">
                    <li><?=$rowA->about26;?></li>
                    <li><?=$rowA->about28;?></li>
                    <li><?=$rowA->about30;?></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 appear-animation animated" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000">
                <h3 class="font-weight-bold text-4 mb-3"><?=$rowA->about25;?></h3>
                <ul class="list list-style-1">
                    <li><?=$rowA->about27;?></li>
                    <li><?=$rowA->about29;?></li>
                    <li><?=$rowA->about31;?></li>
                </ul>
            </div>
        </div>
    </div>
</section>





<?php } ?>