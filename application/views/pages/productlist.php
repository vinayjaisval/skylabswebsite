
<div role="main" class="main">
   	<section class="page-header page-header-dark page-header-text-light">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-12">
   					<ul class="breadcrumb justify-content-start">
   						<li><a href="<?=base_url('/');?>">Home</a></li>
   						<li class="active"><?= $name;?></li>
   					</ul>
   				</div>
   			</div>
   			<div class="row text-left">
   				<div class="col-md-12">
   					<h1><?=$name;?></h1>
   					<p class="lead"><?=$short_content;?></p>
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
                           <?php if( empty($products)){ ?>
              <div class="ht-message-box style-warning" role="alert">
                  <span class="icon"><i class="far fa-exclamation-circle"></i></span> Nothing Found !!!
              </div>

            <?php } ?>
                        <?php 
                            foreach($products as $row){ 
                        ?>
   						<li class="nav-item">
   							<a style="padding: 10px 0; font-size: 14px;" class="nav-link " href="<?php echo base_url('/details/'.$row['prod_slug']); ?>" ><?=$row['prod_title'];?></a>
   						</li>
                        <?php  } ?>
   					</ul>
   				</div>
				<?php 
                   
				?>
				<?php 
				   if(empty($product) || !isset($product))
				   { ?>
					<div class="col-md-9">
					<div class="tab-content" id="tabVerticalContent">
						<div class="tab-pane fade pb-4 show active" id="vertical-portfolio" role="tabpanel" aria-labelledby="vertical-portfolio-tab">
						 <div class="image-frame image-frame-style-6">
							 <img src="<?=base_url('assets/admin/uploads/'.$row['photo']);?>" class="img-fluid" alt="">
						 </div>
						<p><?=$row->prod_content;?></p>
						</div>

					  <?php 
						 foreach($related_page as $relPage){ 
							  {
					 ?>
					 <div class="tab-pane fade pb-4" id="related_page_<?=$relPage->id;?>" role="tabpanel" aria-labelledby="related_page_tab_<?=$relPage->id;?>">
						 <div class="image-frame image-frame-style-6">
							 <img src="<?=base_url('assets/admin/uploads/'.$relPage['photo']);?>" class="img-fluid" alt="">
						 </div>
						 <?=$relPage->prod_content;?>
						</div>
					 <?php } } ?>
				
					</div>

				</div>
				  <?php }else{
		
					?>
					<div class="col-md-9">
					<div class="tab-content" id="tabVerticalContent">
						<div class="tab-pane fade pb-4 show active" id="vertical-portfolio" role="tabpanel" aria-labelledby="vertical-portfolio-tab">
						 <div class="image-frame image-frame-style-6">
							 <img src="<?=base_url('assets/admin/uploads/'.$product[0]['photo']);?>" class="img-fluid" alt="">
						 </div>
						<p><?=$product[0]['prod_content']?></p>
						</div>

					  <?php 
						 foreach($related_page as $relPage){ 
							  {
					 ?>
					 <div class="tab-pane fade pb-4" id="related_page_<?=$relPage->id;?>" role="tabpanel" aria-labelledby="related_page_tab_<?=$relPage->id;?>">
						 <div class="image-frame image-frame-style-6">
							 <img src="<?=base_url('assets/admin/uploads/'.$relPage['photo']);?>" class="img-fluid" alt="">
						 </div>
						 <?=$relPage->prod_content;?>
						</div>
					 <?php } } ?>
				
					</div>

				</div>
					
					<?php
				  }
				?>
   				
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