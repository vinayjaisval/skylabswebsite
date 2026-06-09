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
            <?php if( empty($products)){ ?>
              <div class="ht-message-box style-warning" role="alert">
                  <span class="icon"><i class="far fa-exclamation-circle"></i></span> Nothing Found !!!
              </div>

            <?php } ?>
                <div class="row">

                <?php 
                
                foreach ($products as $row) { ?>

                <div class="col-md-4">
                    <div class="blog-grid">
                        <div class="img-date">
                            <img src="<?=base_url('assets/admin/uploads/'.$row['photo']);?>" class="img-fluid">
                            
                        </div>
                        <div class="discretion-blog">
                            <h4 style="font-size: 14px;"><?=$row['prod_title'];?></h4>
                            <p><?=$row->prod_content;?></p>

                            
                            <!--<span class="wrap">-->
                            <!--    <span> Read More</span>-->
                            <!--    <i class="fas fa-arrow-circle-right"></i>-->
                            <!--</span>--> 
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                </div>
           
            </div>

            
        </div>
    </div>