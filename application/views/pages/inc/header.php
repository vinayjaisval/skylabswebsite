<?php $this->session->set_userdata('referred_from', current_url()); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="<?= $meta_keyword; ?>">
  <meta name="description" content="<?= $meta_description; ?>">
  <title> <?= $meta_title; ?> </title>
  <meta name="author" content="">

   <link rel="shortcut icon" href="<?=base_url('assets/admin/uploads/'.$favicon)?>" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <meta name="google-site-verification" content="lAKdcq2vQnMEozUU3Ohqy9fXfo7SS-5WG-q3x7eZ2KA" />
   <!--<meta name="google-site-verification" content="pCVWIRVrTiDpZLC--Gp23uUDwRFv7_H_ik1v1TT4nuQ" />-->
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
   <!-- Web Fonts  -->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
   <!-- Vendor CSS -->
   <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>vendor/animate/animate.min.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>vendor/linear-icons/css/linear-icons.min.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>vendor/owl.carousel/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>vendor/owl.carousel/assets/owl.theme.default.min.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>vendor/magnific-popup/magnific-popup.min.css">
   <!-- Theme CSS -->
   <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/theme.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/theme-elements.css">

   <!-- Current Page CSS -->
   <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>vendor/rs-plugin/css/settings.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>vendor/rs-plugin/css/layers.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>vendor/rs-plugin/css/navigation.css">
   <!-- Skin CSS -->
   <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/skins/default.css">
   <script src="master/style-switcher/style.switcher.localstorage.js"></script>
   <!-- Theme Custom CSS -->
   <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/custom.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>style.css">
   <!-- Head Libs -->
   <script src="<?php echo base_url('assets/'); ?>vendor/modernizr/modernizr.min.js"></script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PFFWTQ3B');</script>
<!-- End Google Tag Manager -->


<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '434217555867355');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=434217555867355&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
 
<style>
    .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 0%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(8px);
            display: flex;
            justify-content: center;
            align-items: center;
            visibility: visible;
            opacity: 1;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            z-index:999;
        }
        .popup {
            position: relative;
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            /* width: 300px; */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition:0.3s ease-in-out;
            
        }
        .popup img {
            width: 100%;
            border-radius: 10px;
             margin-top: 700px;
           
        }
        .close-btn {
            position: absolute;
            top: 718px;
            right: 10px;
            background: red;
            color: white;
            border: none;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            font-size: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .hidden {
            visibility: hidden;
            opacity: 0;
        }
</style>
</head>

<body>

   
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119007924-1"></script>
   <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
         dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-119007924-1');

      
   </script>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


   <div class="body">
      <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 120}">
         <div class="header-body">
         
            <div class="header-top header-top-colored">
               <div class="header-top-container container">
                  <div class="header-row">
                     <div class="header-column justify-content-start" style="max-width: calc(100% - 140px)">
                     <marquee class="color-black"><b>Exciting news! </b>Skylabs has gone global, with a presence in Bharat, Mauritius, Dubai, and is supercharging businesses worldwide, including Russia and Korea!  #SkylabsGlobalExpansion #BusinessBoost #ConnectingWorld</marquee>
                                            <!--<marquee class="color-black"><b>Exciting news! </b>VITIB 2025 Business Connect – 5th March | Network & explore opportunities with West Africa’s leading tech & business hub!</marquee>-->
                      
                       
                     </div>
                     <div class="header-column header-columnokh77 justify-content-end">


                       <div class="dropdown ditem rr">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>  &nbsp; Change Lang
                            </button>
                            
                            <div class="dropdown-menu">
                           <?php
                           $statement = $this->db->query("SELECT * FROM lanuage WHERE 1 AND active = 'Active'");							
                           foreach ($statement->result() as $row) {
                           ?>
                            <a class="dropdown-item tt" href="<?=$row->link;?>" > 
                              <img src="<?php echo base_url('assets/admin/uploads/'.$row->photo);?>"> <?=$row->name;?>
                           </a>
                           <?php } ?>
                         </div>
                        </div> &nbsp;&nbsp;
                       <div class="dropdown ditem rr">
    <a href="tel:8800138139"
       class="btn btn-secondary dropdown-toggle"
       role="button">
        <i class="fa fa-phone" aria-hidden="true"></i>
        &nbsp; 8800138139
    </a>
</div>
                        <?php
                           $statementAbt = $this->db->query("SELECT * FROM tbl_settings_contact WHERE 1");
                           foreach ($statementAbt->result() as $rowA) {
                        ?>
                        <ul class="header-top-social-icons social-icons social-icons-transparent  flex-start-mobile">
                           <li class="social-icons-facebook">
                              <a href="<?=$rowA->contact20;?>" target="_blank" title="Facebook"> <i class="fab fa-facebook-square"></i> </a>
                           </li>
                           <li class="social-icons-twitter">
                              <a href="<?=$rowA->contact21;?>" target="_blank" title="Twitter"><i class="fab fa-twitter-square"></i></a>
                           </li>
                           <li class="social-icons-linkedin">
                              <a href="<?=$rowA->contact22;?>" target="_blank" title="Linkedin"><i class="fab fa-linkedin-square"></i></a>
                           </li>

                           <li class="social-icons-instagram">
                              <a href="<?=$rowA->contact23;?>" target="_blank" title="Instragram"><i class="fab fa-youtube-square"></i></a>
                           </li>
                         
                        </ul>
                        
                        <?php } ?>
                     </div>
                  </div>
               </div>
            </div>

            <div class="header-container ">
               <div class="container header-row">
                  <div class="header-column justify-content-start">
                     <div class="header-logo">
                        <a href="<?php echo base_url();?>">
                            <?php if(!empty($logo)){
                            ?>
                           <img alt="SkyLabs Solution" src="<?=base_url('assets/admin/uploads/'.$logo)?>" class="sky-logo width-a">
                           <?php }else {?> 
                           <img alt="SkyLabs Solution" src="<?=base_url('assets/admin/uploads/logo2.png')?>" class="sky-logo width-a">
                           <?php } ?>
                        </a>
                     </div>
                  </div>
                  <div class="header-column header-columnokh77 justify-content-end" style="width:205px">
                     <div class="header-nav">
                        <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                           <nav class="collapse">
                              <ul class="nav flex-column flex-lg-row" id="mainNav">
                                 
                              
                                 <li class="">
                                    <a class="active" href="<?php echo base_url(); ?>">
                                       Home
                                    </a>
                                 </li>

                                 <?php
                                    $fQuery = $this->db->query("SELECT * FROM tbl_menu WHERE menu_parent=0 ORDER BY menu_order ASC");
                                    foreach ($fQuery->result() as $fRow) {
                                      $SubQuery = $this->db->query("SELECT * FROM tbl_menu WHERE menu_parent='".$fRow->id."' ORDER BY menu_order ASC");
                                      if($fRow->menu_type=='Page'){
                                        $fQuerySub = $this->db->query("SELECT * FROM tbl_page WHERE id= {$fRow->page_id} ORDER BY id ASC");
                                        foreach ($fQuerySub->result() as $fRowSub) {
                                            $menuName = $fRowSub->page_name;
                                            $menuUrl = base_url($fRowSub->page_slug).'.html';
                                        }
                                    } else {
                                        $menuName = $fRow->menu_name;
                                        $menuUrl = $fRow->menu_url;
                                    }

                                    //Get For Sub Sub Menus ---
                                    $SubSubQuery="";
                                    if($SubQuery->num_rows() > 0){
                                        foreach ($SubQuery->result() as $fRow1) {
                                          $SubSubQuery = $this->db->query("SELECT * FROM tbl_menu WHERE menu_parent='".$fRow1->id."' ORDER BY menu_order ASC");
                                        }
                                    }
                                                               
                                    ?>


                                    <?php if($SubSubQuery != ""){ 
                                       if($SubSubQuery->num_rows() > 0){
                                    ?>

                                       <li class="dropdown dropdown-mega">
                                          <a class="dropdown-item dropdown-toggle" href="<?=$menuUrl;?>">
                                             <?=$menuName;?>
                                          </a>
                                          <ul class="dropdown-menu">
                                             <li>
                                                <div class="dropdown-mega-content">
                                                   <div class="row">
                                                   <?php
                                                      foreach ($SubQuery->result() as $fRow1) {
                                                         $SubSubQuery = $this->db->query("SELECT * FROM tbl_menu WHERE menu_parent='".$fRow1->id."' ORDER BY menu_order ASC");
                                                         if($fRow1->menu_type=='Page'){
                                                            $fQuerySub1 = $this->db->query("SELECT * FROM tbl_page WHERE id= {$fRow1->page_id} ORDER BY id ASC");
                                                            foreach ($fQuerySub1->result() as $fRowSub1) {
                                                               $menuName1 = $fRowSub1->page_name;
                                                               $menuUrl1 = base_url($fRowSub1->page_slug).'.html';
                                                            }
                                                      } else {
                                                            $menuName1 = $fRow1->menu_name;
                                                            $menuUrl1 = $fRow1->menu_url;
                                                      }
                                                                                          
                                                      ?>
                                                      <div class="col-lg-3 ml-auto">
                                                         <a class="dropdown-item" href="<?=$menuUrl1;?>"> <span class="dropdown-mega-sub-title"> 
                                                         <img src="<?php echo base_url('assets/admin/uploads/'.$fRow1->menu_img)?>" style="width:40px" /> <span style="color:black"> <?=$menuName1;?> </span></span></a>
                                                         <ul class="dropdown-mega-sub-nav">
                                                            <?php
                                                               foreach ($SubSubQuery->result() as $fRow2) {
                                                                  if($fRow2->menu_type=='Page'){
                                                                     $fQuerySub2 = $this->db->query("SELECT * FROM tbl_page WHERE id= {$fRow2->page_id} ORDER BY id ASC");
                                                                     foreach ($fQuerySub2->result() as $fRowSub2) {
                                                                        $menuName2 = $fRowSub2->page_name;
                                                                        $menuUrl2 = base_url($fRowSub2->page_slug).'.html';
                                                                     }
                                                               } else {
                                                                     $menuName2 = $fRow2->menu_name;
                                                                     $menuUrl2 = $fRow2->menu_url;
                                                               }                               
                                                            ?>
                                                            <li><a class="dropdown-item" href="<?=$menuUrl2;?>"><?=$menuName2;?></a></li>
                                                            <?php } ?>

                                                         </ul>
                                                      </div>
                                                      <?php } ?>
                                                      
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </li>

                                       

                                    <?php } else { ?>
                                       <li class="dropdown">
                                          <a class="" href="<?=$menuUrl;?>">
                                             <?=$menuName;?>
                                          </a>
                                          <?php if($SubQuery->num_rows() > 0){?>
                                             <ul class="dropdown-menu">
                                                <?php
                                                foreach ($SubQuery->result() as $fRow1) {
                                                   $SubSubQuery = $this->db->query("SELECT * FROM tbl_menu WHERE menu_parent='".$fRow->id."' ORDER BY menu_order ASC");
                                                   if($fRow1->menu_type=='Page'){
                                                      $fQuerySub1 = $this->db->query("SELECT * FROM tbl_page WHERE id= {$fRow1->page_id} ORDER BY id ASC");
                                                      foreach ($fQuerySub1->result() as $fRowSub1) {
                                                         $menuName1 = $fRowSub1->page_name;
                                                         $menuUrl1 = base_url($fRowSub1->page_slug).'.html';
                                                      }
                                                } else {
                                                      $menuName1 = $fRow1->menu_name;
                                                      $menuUrl1 = $fRow1->menu_url;
                                                }
                                                                                    
                                                ?>
                                                <li><a class="dropdown-item" href="<?=$menuUrl1;?>"><?=$menuName1;?></a></li>
                                                <?php } ?>
                                             </ul>
                                          <?php } ?>
                                       </li> 
                                    <?php }

                                    } else { 
                                       if($menuName == 'Products'){ ?>
                                       <li class="dropdown">
                                          <a class="" href="<?=$menuUrl;?>">
                                             <?=$menuName;?>
                                          </a>
                                          <ul class="dropdown-menu">
                                             <?php
                                             $sqlCat = $this->db->query("SELECT * FROM `tbl_category_prod` WHERE 1 ORDER BY `cat_order` ASC");
                                             foreach($sqlCat->result() as $cat){                                    
                                             ?>
                                             <li><a class="dropdown-item" href="<?=base_url('product/'.$cat->category_slug.'.html')?>"><?=$cat->category_name;?></a></li>
                                             <?php } ?>

                                             <li><a class="dropdown-item" href="<?= base_url('Home/omnicom'); ?>">Video Compression Solution</a></li>

                                                <li><a class="dropdown-item" href="<?= base_url('product/drone') ?>">Drones</a></li>
                                          </ul>
                                       </li> 
                                    
                                 <?php } else { 
                                 ?>
                                       <li class="dropdown">
                                          <a class="" href="<?=$menuUrl;?>">
                                             <?=$menuName;?>
                                          </a>
                                          <?php if($SubQuery->num_rows() > 0){?>
                                             <ul class="dropdown-menu">
                                                <?php
                                                foreach ($SubQuery->result() as $fRow1) {
                                                   $SubSubQuery = $this->db->query("SELECT * FROM tbl_menu WHERE menu_parent='".$fRow->id."' ORDER BY menu_order ASC");
                                                   if($fRow1->menu_type=='Page'){
                                                      $fQuerySub1 = $this->db->query("SELECT * FROM tbl_page WHERE id= {$fRow1->page_id} ORDER BY id ASC");
                                                      foreach ($fQuerySub1->result() as $fRowSub1) {
                                                         $menuName1 = $fRowSub1->page_name;
                                                         $menuUrl1 = base_url($fRowSub1->page_slug).'.html';
                                                      }
                                                } else {
                                                      $menuName1 = $fRow1->menu_name;
                                                      $menuUrl1 = $fRow1->menu_url;
                                                }
                                                                                    
                                                ?>
                                                <li><a class="dropdown-item" href="<?=$menuUrl1;?>"><?=$menuName1;?></a></li>
                                                <?php } ?>
                                             </ul>
                                          <?php } ?>
                                       </li> 
                                    <?php } } ?>
                                    
                                 <?php } ?>
                                 
                              </ul>
                           </nav>
                        </div>

                        <button class="header-btn-collapse-nav ml-3" data-toggle="collapse" data-target=".header-nav-main nav">
                           <span class="hamburguer">
                              <span></span>
                              <span></span>
                              <span></span>
                           </span>
                           <span class="close">
                              <span></span>
                              <span></span>
                           </span>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      
      <style>
          @media(max-width:767px){
              .header-top-container { max-width:767px;}
              .header-columnokh77{ width:140px !important;}
              .social-icons{ font-size:11px;}
          }
      </style>

