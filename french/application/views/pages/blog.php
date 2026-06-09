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



<section class="section-b-space blog-page ratio2_3">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php if( empty($news)){ ?>
              <div class="ht-message-box style-warning" role="alert">
                  <span class="icon"><i class="far fa-exclamation-circle"></i></span> Nothing Found !!!
              </div>

            <?php } ?>
                <div class="row">
                <?php foreach ($news as $row) { ?>

                <div class="col-md-4">
                    <div class="blog-grid">
                        <div class="img-date">
                            <img src="<?=base_url('assets/admin/uploads/'.$row->photo);?>" class="img-fluid">
                            <div class="date-blog"><?=date('M', strtotime($row->news_date));?> <br /> <?=date('Y', strtotime($row->news_date));?> </div>
                        </div>
                        <div class="discretion-blog">
                            <h4 style="font-size: 14px;"><?=$row->news_title;?></h4>
                            <p><?=$row->news_content_short;?></p>
                            <a href="<?=base_url('blog/'.$row->news_slug.'.html');?>" class="btn btn-outline btn-rounded btn-primary btn-4 btn-icon-effect-1" style="background: white;">
                            <span class="wrap">
                                <span> Read More</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                </div>
           
            </div>

            
        </div>
<?php if(!empty($news)){ ?>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class='page-link' href="<?=base_url($url12);?>?page=1&key=<?=$this->input->get('key');?>">First</a></li>
            <?php
                                              
                $count = $catNumRows;
                $a = $count/$offset;
                $a = ceil($a);
                $j=($page);
                $j = ceil($j);
                if($j<0) {
                    $j=1;
                }
                $k=$j+3;
                if($j >= $a-3){
                    $k=$a;
                }
                $i =$j-2;
                if($i<=0){
                    $i=1;
                }
                for($i;$i<=$k;$i++){
            ?>

            <?php if($getPage == $i){ ?>
                <li class="page-item active"><a class="page-link" href="#"><?=$i?></a></li>
            <?php } else{ ?>
            <li class="page-item"><a class="page-link" href="<?=base_url($url12);?>?page=<?=$i;?>&key=<?=$this->input->get('key');?>"><?=$i;?></a></li>
            <?php } ?>
            <?php } 

            if($a > $page+1){
            ?>
            <li class="page-item"><a class="page-link" href="<?=base_url($url12);?>?page=<?=$page+1;?>&key=<?=$this->input->get('key');?>">Next &raquo;</a></li>
            <?php } ?>
            <li class="page-item"><a class="page-link" href="<?=base_url($url12);?>?page=<?=$a;?>&key=<?=$this->input->get('key');?>">Last</a></li>
            <li class="page-item"><a class="page-link">Page <?php if($page==0){ echo '1'; } else { echo $page; } ?> of <?=$a;?></a></li>
        </ul>
    </nav>

<?php } ?>  
    </div>
</section>
</div>


                           

   

                            

                      