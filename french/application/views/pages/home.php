
<?php
$statement = $this->db->query("SELECT * FROM tbl_settings_home WHERE 1");
foreach ($statement->result() as $rowH) {
    ?>



<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
          <h1 style="font-weight: 600;color:green; ">
            <?=$rowH->home_1;?>
          </h1>
        </div>
        <p class="mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"> <?=$rowH->home_2;?> </p>
        
       
      </div>
      
    </div>
  </div>
</section>
<section class="section" style="background-image: url(<?=base_url('assets/');?>img/about-boxes-bg1.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
          <div class="" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
            <h1 style="font-weight: 600;color:green">
              <?=$rowH->home_18;?>
            </h1>
          </div>
        </div>
        <p style="text-align:justify;" class="mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"> <?=$rowH->home_19;?> </p>
      </div>
      <div class="col-10 col-md-6 mx-auto ml-md-auto appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
       <img src="<?=base_url('assets/admin/uploads/'.$rowH->home_20);?>" style="border-radius: 20px 20px 20px 20px; margin-top:50px" class="img-fluid" alt="about skylabs"  />
      </div>
    </div>
  </div>
</section>


<div class="container-fuild">
  <div class="counters counters-light">
    <div class="row" style="margin-left:0px; margin-right:0px">
      <div class="col-6 col-lg-3" style="background: rgb(1, 120, 66);">
        <div class="counter">
          <strong data-to="<?=$rowH->home_21;?>" data-append="+"><?=$rowH->home_21;?></strong>
          <label> <?=$rowH->home_22;?></label>
        </div>
      </div>
      <div class="col-6 col-lg-3" style="background:#2c3a72">
        <div class="counter">
          <strong data-to="<?=$rowH->home_23;?>"><?=$rowH->home_23;?></strong>
          <label> <?=$rowH->home_24;?></label>
        </div>
      </div>
      <div class="col-6 col-lg-3" style="background: rgb(1, 120, 66);">
        <div class="counter">
          <strong data-to="<?=$rowH->home_25;?>" data-append="+"><?=$rowH->home_25;?></strong>
          <label><?=$rowH->home_26;?></label>
        </div>
      </div>
      <div class="col-6 col-lg-3" style="background:#2c3a72">
        <div class="counter">
          <strong data-to="<?=$rowH->home_27;?>" data-append="+"><?=$rowH->home_27;?></strong>
          <label> <?=$rowH->home_28;?></label>
        </div>
      </div>
    </div>
  </div>
</div>



<section class="section" style="background-image: url(<?=base_url('assets/');?>img/about-boxes-bg1.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
          <div class="" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
            <h1 style="font-weight: 600;color:green">
              <?=$rowH->home_29;?>
            </h1>
          </div>
        </div>
        <p style="text-align:justify;" class="mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"><?=$rowH->home_30;?></p>
        
      </div>

        <?php
            $statement = $this->db->query("SELECT * FROM `advertisement` WHERE 1 ");							
            foreach ($statement->result() as $row) {
        ?>

       <div class="col-md-4 col-sm-6 col-xs-12 service_bx" style="margin: 9px;background: <?=$row->bg_color;?>;padding: 20px;border-radius: 10px;" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
        <h4 style="font-weight: 700;"> <?=$row->name;?> </h4>
        <img src="<?=base_url('assets/admin/uploads/'.$row->photo)?>" style="height: 70px;"/>
        <?=$row->role;?>
       </div>
       <?php } ?>
       
       <div class="col-md-4 col-xs-12">
           <img src="<?=base_url('assets/experties.png');?>" class="img-fluid" style="border-radius: 25px;" />
       </div>


    </div>
  </div>
</section>




<section class="latest-blog-posts bg-white pt60 pb60" style="background: url(https://delport-react.vercel.app/_next/static/media/testimonial-bg.ff687e91.png);">
  <div class="container-fluid">
    <h1 style="font-weight: 600;color:green;text-align:center">
      <?=$rowH->home_31;?>
    </h1>
    <br>
    <div id="owl-demo-2" class="owl-carousel owl-theme">
      <?php
            $statement = $this->db->query("SELECT * FROM `tbl_news` WHERE 1 AND category_id = 2 ORDER BY news_id DESC LIMIT 0, 9");							
            foreach ($statement->result() as $row) {
          ?>
      <article class="thumbnail item" itemscope="" itemtype="<?=base_url('blog/'.$row->news_slug.'.html');?>">
        <a class="blog-thumb-img" href="<?=base_url('blog/'.$row->news_slug.'.html');?>" title="">
          <img src="<?=base_url('assets/admin/uploads/'.$row->photo);?>" class="img-responsive" style="cursor: pointer" onclick="ShowTestimonialModel('https://www.youtube.com/embed/G9J-KcqcQYY');" />
        </a>
        <div class="caption">
          <h4 itemprop="headline" class="hd">
            <a href="<?=base_url('blog/'.$row->news_slug.'.html');?>" rel="bookmark"> <?=$row->news_title;?></a>
          </h4>
          <p itemprop="text" class="flex-text text-muted">
            <span class="bi bi-quote blue-color"></span><?=$row->news_content_short;?> <span class="bi bi-quote blue-color"></span>
          </p>
        </div>
      </article>
      <?php } ?>
      
      
    <div class="customNavigation">
      <span class="pager-left">
        <a class="btn btn-link prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
      </span>
      <span class="pager-right">
        <a class="btn btn-link next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </span>
    </div>
  </div>
  <!-- .container -->
</section>
<div class="cta-section pad-tb bg-fixed-img" data-parallax="scroll" data-speed="0.5" data-image-src="<?=base_url('assets/admin/uploads/'.$rowH->home_36)?>" style="background-image: url(<?=base_url('assets/admin/uploads/'.$rowH->home_36)?>);padding: 43px;background-attachment: fixed;">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8">
        <div class="cta-heading">
          <h2 class="mb20 text-w aos-init" data-aos="fade-up" data-aos-delay="100" style="color:white;font-weight:600;font-size: 37px;" data-appear-animation="fadeInUpShorter">
            <?=$rowH->home_32;?>
          </h2>
          <p class="text-w aos-init" data-aos="fade-up" data-aos-delay="300" style="color:white" data-appear-animation="fadeInUpShorter"><?=$rowH->home_33;?></p>
          <a href="<?=$rowH->home_35;?>" class="btn-rd mt40 aos-init" data-aos="fade-up" data-aos-delay="500" data-appear-animation="fadeInUpShorter" style="background:#2c3a72;color:white;padding: 15px;border-radius: 10px;font-size: 13px;"><?=$rowH->home_34;?> →</a>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="user-blog" style="background: url(<?=base_url('assets/');?>img/world-map.png);">
  <div class="container">
    <h1 style="font-weight: 600;color:green;text-align:center">
      <?=$rowH->home_37;?>
    </h1>
    
    <br>
    <div id="demo1">
      <div class="span12">
        <div id="owl-demo1" class="owl-carousel">
          <?php
            $statement = $this->db->query("SELECT * FROM `tbl_news` WHERE 1 AND category_id = 1 ORDER BY news_id DESC LIMIT 0, 9");							
            foreach ($statement->result() as $row) {
          ?>
          <div class="item">
            <div class="blog-grid">
              <div class="img-date">
                <img src="<?=base_url('assets/admin/uploads/'.$row->photo);?>">
                <div class="date-blog"><?=date('M', strtotime($row->news_date));?> <br /> <?=date('Y', strtotime($row->news_date));?>, </div>
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
  
  </div>
</section>





  



<?php } ?>

<style>
.video_wrap_heiht{ display:none;}
    .videoWarpper video{ height:auto !important; position: relative !important; margin-top:0px;}
    
    @media(max-width:767px){
        .videoWarpper video{  margin-top:0px;}
    }
    
</style>