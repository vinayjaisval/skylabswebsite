<div class='videoWarpper'>
  <video 
      autoPlay
      muted  
      loop
      src="<?=base_url('assets/bannner.mp4');?>"
      width="100%"
      height="auto"
    >
  </video>
</div>

<div class="video_wrap_heiht"></div>



<!----

<div id="demo" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators">
    <?php $i=0; foreach ($slider as $row) { ?>
      <li data-target="#demo" data-slide-to="<?=$i;?>" class="<?php if($i == 0){ echo 'active'; } ?>"></li>
    <?php ++$i; } ?>
  </ul>

  <div class="carousel-inner">
    <?php $i=0; foreach ($slider as $row) { ?>
    <div class="carousel-item <?php if($i==0){ echo 'active'; } ?>">
      <img src="<?= base_url('assets/admin/uploads/' . $row->photo); ?>">
    </div>
    <?php ++$i; } ?>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

--->
