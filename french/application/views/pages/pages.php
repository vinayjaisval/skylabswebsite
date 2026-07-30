<?php foreach ($content as $row) { 
    $related_page =  $row->related_page;
    $related_page = explode(",", $related_page);  
?>


   <div role="main" class="main">
   	<section class="page-header page-header-dark page-header-text-light">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-12">
   					<ul class="breadcrumb justify-content-start">
   						<li><a href="<?=base_url('/');?>">Home</a></li>
   						<li class="active"><?=$row->page_name;?></li>
   					</ul>
   				</div>
   			</div>
   			<div class="row text-left">
   				<div class="col-md-12">
   					<h1><?=$row->page_name;?></h1>
   					<p class="lead"><?=$row->short_content;?></p>
   				</div>
   			</div>
   		</div>
   	</section>
   </div>
   <section class="">
   	<div class="container">
   			<div class="row">
   				<div class="col-md-3">
   					<ul class="nav flex-column nav-tabs nav-tabs-vertical" id="tabVertical" role="tablist">
   					    <!---
   						<li class="nav-item">
   							<a class="nav-link active" id="vertical-portfolio-tab" data-toggle="tab" href="#vertical-portfolio" role="tab" aria-controls="vertical-portfolio" aria-expanded="true"><?=$row->page_name;?></a>
   						</li>
   						-->
                        <?php 
                            foreach($related_page as $relPage){ 
                                $pageName = $this->db->query("SELECT * FROM tbl_page WHERE page_slug = '".$relPage."'");
                                foreach ($pageName->result() as $pRow) {
                        ?>
   						<li class="nav-item">
   							<a style="padding: 10px 0; font-size: 14px;" class="nav-link <?php if($row->page_slug == $pRow->page_slug){ echo 'active'; } ?>" href="<?php echo base_url($pRow->page_slug.'.html'); ?>" ><?=$pRow->page_name;?></a>
   						</li>
                        <?php } } ?>
   					</ul>
   				</div>
   				<div class="col-md-9">
   					<div class="tab-content" id="tabVerticalContent">
   						<div class="tab-pane fade pb-4 show active" id="vertical-portfolio" role="tabpanel" aria-labelledby="vertical-portfolio-tab">
                            <div class="image-frame image-frame-style-6">
                                <img src="<?php echo base_url('assets/admin/uploads/'.$row->banner); ?>" class="img-fluid" alt="">
                            </div>
                            <?=$row->page_content;?>
   						</div>

                        <?php 
                            foreach($related_page as $relPage){ 
                                $pageName = $this->db->query("SELECT * FROM tbl_page WHERE page_slug = '".$relPage."'");
                                foreach ($pageName->result() as $pRow) {
                        ?>
                        <div class="tab-pane fade pb-4" id="related_page_<?=$pRow->id;?>" role="tabpanel" aria-labelledby="related_page_tab_<?=$pRow->id;?>">
                            <div class="image-frame image-frame-style-6">
                                <img src="<?php echo base_url('assets/admin/uploads/'.$pRow->banner); ?>" class="img-fluid" alt="">
                            </div>
                            <?=$pRow->page_content;?>
   						</div>
                        <?php } } ?>
   						
   					</div>

   				</div>
   			</div>

   		</div>

   </section>

<style>
@media (max-width: 991px) {
    #tabVertical {
        margin-bottom: 25px !important;
        border-bottom: 1px solid #ddd !important;
        padding-bottom: 15px !important;
    }
}
/* Responsive overrides for inline-styled database content */
#tabVerticalContent img,
#tabVerticalContent div,
#tabVerticalContent p,
#tabVerticalContent iframe,
#tabVerticalContent span {
    max-width: 100% !important;
}
#tabVerticalContent img {
    height: auto !important;
}
#tabVerticalContent table {
    display: block !important;
    width: 100% !important;
    max-width: 100% !important;
    overflow-x: auto !important;
}
</style>



<?php } ?>