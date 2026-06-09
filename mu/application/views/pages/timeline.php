<?php
	$statementAbt = $this->db->query("SELECT * FROM tbl_settings_about WHERE 1");
	foreach ($statementAbt->result() as $rowA) {
?>

<style>
    .timeline {
        list-style: none;
        padding: 20px 0 20px;
        position: relative;
      }
      .timeline:before {
        top: 0;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 3px;
        background-color: #EEEEEE;
        left: 50%;
        margin-left: -1.5px;
      }
      .timeline > li {
        margin-bottom: 20px;
        position: relative;
      }
      .timeline > li:before,
      .timeline > li:after {
        content: " ";
        display: table;
      }
      .timeline > li:after {
        clear: both;
      }
      .timeline > li:before,
      .timeline > li:after {
        content: " ";
        display: table;
      }
      .timeline > li:after {
        clear: both;
      }
      .timeline > li > .timeline-panel {
        width: 46%;
        float: left;
        border: 1px solid #D4D4D4;
        border-radius: 2px;
        padding: 20px;
        position: relative;
        -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
      }
      .timeline > li > .timeline-panel:before {
        position: absolute;
        top: 26px;
        right: -15px;
        display: inline-block;
        border-top: 15px solid transparent;
        border-left: 15px solid #ccc;
        border-right: 0 solid #ccc;
        border-bottom: 15px solid transparent;
        content: " ";
      }
      .timeline > li > .timeline-panel:after {
        position: absolute;
        top: 27px;
        right: -14px;
        display: inline-block;
        border-top: 14px solid transparent;
        border-left: 14px solid #fff;
        border-right: 0 solid #fff;
        border-bottom: 14px solid transparent;
        content: " ";
      }
      .timeline > li > .timeline-badge {
        color: #fff;
        width: 50px;
        height: 50px;
        line-height: 50px;
        font-size: 1.4em;
        text-align: center;
        position: absolute;
        top: 16px;
        left: 50%;
        margin-left: -25px;
        background-color: #999999;
        z-index: 100;
        border-top-right-radius: 50%;
        border-top-left-radius: 50%;
        border-bottom-right-radius: 50%;
        border-bottom-left-radius: 50%;
      }
      .timeline > li.timeline-inverted > .timeline-panel {
        float: right;
      }
      .timeline > li.timeline-inverted > .timeline-panel:before {
        border-left-width: 0;
        border-right-width: 15px;
        left: -15px;
        right: auto;
      }
      .timeline > li.timeline-inverted > .timeline-panel:after {
        border-left-width: 0;
        border-right-width: 14px;
        left: -14px;
        right: auto;
      }
      .timeline-badge.primary {
        background-color: #2E6DA4 !important;
      }
      .timeline-badge.success {
        background-color: #3F903F !important;
      }
      .timeline-badge.warning {
        background-color: #F0AD4E !important;
      }
      .timeline-badge.danger {
        background-color: #D9534F !important;
      }
      .timeline-badge.info {
        background-color: #5BC0DE !important;
      }
      .timeline-title {
        margin-top: 0;
        color: inherit;
      }
      .timeline-body > p,
      .timeline-body > ul {
        margin-bottom: 0;
      }
      .timeline-body > p + p {
        margin-top: 5px;
      }
      @media (max-width:767px){
          .timeline > li > .timeline-panel{
              width: 88%;
              float: left;
          }
          .timeline > li > .timeline-badge{ left:100%;}
          .timeline:before{
              left: 100%;
          }
          .timeline > li.timeline-inverted > .timeline-panel{ float:left;}
          .timeline > li.timeline-inverted > .timeline-panel:before {
    border-left-width: 0;
    border-right-width: 15px;
    left: auto;
    right: -14px;
    transform: rotate(180deg);
}
.timeline > li.timeline-inverted > .timeline-panel:after {
    border-left-width: 0;
    border-right-width: 14px;
    left: auto;
    right: -14px;
    transform: rotate(180deg);
}
      }
      
      .timeline .timeline-body{
          padding-bottom: 0 !important;
      }
</style>

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
        <div class="container">
            <div class="page-header">
            <h1 id="timeline" class="text-center"><?= $name; ?></h1>
            </div>
            <ul class="timeline">
                
                <?php
                    $i=0;
					$statement = $this->db->query("SELECT * FROM partner WHERE 1 AND type= 5 AND active = 'Active'");							
					foreach ($statement->result() as $row) {
					     if($i%2==0){ 
				?>
                
            <li>
                <div class="timeline-badge">
                <i class="<?=$row->link;?>"></i>
                </div>
                <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title"><?=$row->name;?></h4>
                </div>
                <div class="timeline-body">
                    <p>
                   <?=$row->role;?>
                    </p>
                </div>
                </div>
            </li>
            <?php } else { ?>
            <li class="timeline-inverted">
                <div class="timeline-badge warning">
                <i class="<?=$row->link;?>"></i>
                </div>
                <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title"><?=$row->name;?></h4>
                </div>
                <div class="timeline-body">
                    <p>
                   <?=$row->role;?>
                    </p>
                </div>
                </div>
            </li>
            <?php } ++$i; } ?>
            
            </ul>
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