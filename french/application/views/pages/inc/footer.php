<?php
	$statementAbt = $this->db->query("SELECT * FROM tbl_settings_about WHERE 1");
	foreach ($statementAbt->result() as $rowA) {
?>

<section class="parallax section py-5 call-to-action overlay overlay-color-primary overlay-show overlay-op-8 call-to-action-text-light call-to-action-text-background" data-plugin-parallax="" data-plugin-options="{'speed': 1.5, 'parallaxHeight': '280%'}" data-image-src="<?php echo base_url() ?>img/parallax/parallax-1.jpg" style="position: relative; overflow: hidden;">
	<div class="parallax-background" style="background-image: url(&quot;https://web.archive.org/web/20190908040124if_/<?php echo base_url() ?>img/parallax/parallax-1.jpg&quot;); background-size: cover; background-position: 50% center; position: absolute; top: 0px; left: 0px; width: 100%; height: 280%; transform: translate3d(0px, -737.929px, 0px);"></div>
	<span class="text-background font-primary font-weight-bold appear-animation animated" data-appear-animation="textBgFadeInUp" data-appear-animation-delay="800">IT'S EASY</span>
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-lg-9">
				<div class="call-to-action-content text-center text-md-left appear-animation animated" data-appear-animation="fadeInLeftShorter">
					<h2 class="font-weight-semibold"><?=$rowA->about32;?></h2>
					<p class="font-weight-light mb-0"><?=$rowA->about33;?></p>
				</div>
			</div>
			<div class="col-md-3 col-lg-3">
				<div class="call-to-action-btn appear-animation animated" data-appear-animation="fadeInRightShorter">
					<a href="<?=$rowA->about35;?>" class="btn btn-light btn-rounded btn-3 btn-icon-effect-1 font-weight-bold btn-h-5 btn-v-4">
						<span class="wrap">
							<span> <?=$rowA->about34;?> </span>
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>


<style>
   .foot {
      font-size: 26px;
      margin-left: 20px;
      margin-top: 8px;
   }

   .bottom-footer {
      padding: 66px 0;
   }
</style>

<footer id="footer" class="footer-hover-links-light mt-0">
   <div class="container-fluid">
      <div class="bottom-footer">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 mb-4 mb-lg-0">
                  <p style="color: rgba(255,255,255,0.7);font-weight: 200;">
                  <?=$footer_about;?></p>
                     
               </div>
               <div class="col-lg-3 mb-4 mb-lg-0">
                  <ul class="list list-icon list-unstyled">
                    <?php
                      $fQuery = $this->db->query("SELECT * FROM tbl_menu_one WHERE menu_parent=0 ORDER BY menu_order ASC");
                      foreach ($fQuery->result() as $fRow) {
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
                    ?>
                    <li class="mb-2"><i class="fa fa-angle-right mr-2 ml-1"></i> <a href="<?=$menuUrl;?>"><?=$menuName;?></a></li>
                    <?php } ?>
                     
                  </ul>
               </div>
               <div class="col-lg-3 mb-4 mb-lg-0">

                  <ul class="list list-icon list-unstyled">
                    <?php
                      $fQuery = $this->db->query("SELECT * FROM tbl_menu_two WHERE menu_parent=0 ORDER BY menu_order ASC");
                      foreach ($fQuery->result() as $fRow) {
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
                    ?>
                    <li class="mb-2"><i class="fa fa-angle-right mr-2 ml-1"></i> <a href="<?=$menuUrl;?>"><?=$menuName;?></a></li>
                    <?php } ?>
                  </ul>
               </div>




               <div class="col-lg-3 mb-4 mb-lg-0">
                  <ul class="list list-icon list-unstyled">
                     <li class="mb-2"><i class="fa fa-angle-right mr-2 ml-1"></i><i class="fab fa-location-arrow" style="color:#fff;"></i><?=$contact_address;?></li>
                     <li class="mb-2"><i class="fa fa-angle-right mr-2 ml-1"></i><i class="fab fa-location-arrow" style="color:#fff;"></i><?=$contact_fax;?> </li>

                     <li class="mb-2"><i class="fa fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Phone:</span> <a href="tel:<?=$contact_phone;?>"><?=$contact_phone;?></a></li>
                     <li class="mb-2"><i class="fa fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Email:</span> <a href="mailto:<?=$contact_email;?>" class=""><?=$contact_email;?></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="footer-copyright">
      <div class="container">
         <div class="row text-center text-md-left align-items-center">
            <div class="col-md-5">
               <?php
                  $statementAbt = $this->db->query("SELECT * FROM tbl_settings_contact WHERE 1");
                  foreach ($statementAbt->result() as $rowA) {
               ?>
               <ul class="header-top-social-icons social-icons social-icons-transparent  d-md-block">
                  <li class="social-icons-facebook">
                     <a href="<?=$rowA->contact20;?>" target="_blank" title="Facebook"> <i class="fab fa-facebook-square" style="color:#fff;"></i> </a>
                  </li>
                  <li class="social-icons-twitter">
                     <a href="<?=$rowA->contact21;?>" target="_blank" title="Twitter"><i class="fab fa-twitter-square" style="color:#fff;"></i></a>
                  </li>
                  <li class="social-icons-linkedin">
                     <a href="<?=$rowA->contact22;?>" target="_blank" title="linkedin"><i class="fab fa-linkedin-square" style="color:#fff;"></i></a>
                  </li>

                    <li class="social-icons-instagram">
                     <a href="<?=$rowA->contact23;?>" target="_blank" title="Instragram"><i class="fab fa-instagram" style="color:#fff;"></i></a>
                  </li>
               </ul>
               <?php } ?>
            </div>
            <div class="col-md-7">
               <p class="text-md-right pb-0 mb-0" style="color:#fff;"><?=$footer_copyright;?></p>
            </div>
         </div>
      </div>
   </div>

<!--   <button class="open-button" style="background:#027a3b;z-index:9;width: 172px;-->
<!--    border-radius: 10px;" onclick="openForm()"> <img src="img/bpo.png" style="height:20px"/> Raise Your Ticket </button>-->

   
<!--   <div class="chat-popup" id="myForm">-->
<!--  <form action="" class="form-container">-->
<!--    <h3 Style="color:#373f8a;font-weight:600;">Raise Your Ticket </h3>-->

<!--    <textarea placeholder="Type message.." name="msg" required style="height:10px"></textarea>-->

<!--    <button type="submit" class="btn" style="background:#027a3b">Send</button>-->
<!--    <button type="button" class="btn cancel" onclick="closeForm()" style="background:#373f8a;">Close</button>-->
<!--  </form>-->
<!--</div>-->

</footer>
</div>
<!-- Vendor -->
<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61f4f4149bd1f31184d9ec52/1fqidis9c';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();



jQuery(document).ready(function($) {

   var owl = $("#owl-demo-2");
  owl.owlCarousel({
      items : 3, 
      itemsDesktop : [992,3],
      itemsDesktopSmall : [768,2], 
      itemsTablet: [480,2], 
      itemsMobile : [320,1],
        autoPlay: true,
        autoPlaySpeed: 4000,
        autoPlayTimeout: 4000,
        autoplayHoverPause:true,
        stopOnHover:true,
        slideSpeed : 800,
        paginationSpeed : 2400,
        rewindNav : true,
        rewindSpeed: 0
  });
  $(".next").click(function(){ owl.trigger('owl.next'); });
  $(".prev").click(function(){ owl.trigger('owl.prev'); });

$('.latest-blog-posts .thumbnail.item').matchHeight();
   
});


 $(document).ready(function() {

            var owl = $("#owl-demo1");

            owl.owlCarousel({

                items: 3, //10 items above 1000px browser width
                itemsDesktop: [1000, 3], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 2], // 3 items betweem 900px and 601px
                itemsTablet: [600, 1], //2 items between 600 and 0;
                itemsMobile: [360, 1] // itemsMobile disabled - inherit from itemsTablet option

            });

            // Custom Navigation Events
            $(".next").click(function() {
                owl.trigger('owl.next');
            })
            $(".prev").click(function() {
                owl.trigger('owl.prev');
            })
            $(".play").click(function() {
                owl.trigger('owl.play', 1000);
            })
            $(".stop").click(function() {
                owl.trigger('owl.stop');
            })

        });


 

</script>
<!--End of Tawk.to Script-->


<script>
    

    $(document).ready(function() {
     
      $("#owl-demo").owlCarousel({
        navigation : true
             items:6,
    loop:true,
    margin:10,
    autoplay:true,
      });
 
     
    });


</script>


<script src="<?php echo base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>master/style-switcher/style.switcher.js" id="styleSwitcherScript" data-base-path="" data-skin-src=""></script>
<script src="<?php echo base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/common/common.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/vide/vide.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/vivus/vivus.min.js"></script>
<!-- Theme Base, Components and Settings -->
<script src="<?php echo base_url('assets/'); ?>js/theme.js"></script>
<!-- Current Page Vendor and Views -->
<script src="<?php echo base_url('assets/'); ?>vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- Theme Custom -->
<script src="<?php echo base_url('assets/'); ?>js/custom.js"></script>
<!-- Theme Initialization Files -->
<script src="<?php echo base_url('assets/'); ?>js/theme.init.js"></script>
<!-- Examples -->
<script src="<?php echo base_url('assets/'); ?>js/examples/examples.portfolio.js"></script>


<script type="text/javascript">
   $(document).ready(function() {
      // alert('ok');
      $(".onlyalphabetsspace").keypress(function(event) {
         var inputValue = event.charCode;
         if (!(inputValue >= 65 && inputValue <= 121) && (inputValue != 32 && inputValue != 0)) {
            event.preventDefault();
         }
      });
      $(".onlyalphabetsspace").keypress(function(event) {
         if (this.value.length === 0 && event.which === 32) {
            event.preventDefault();
         }
      });
      $('.numberonly').keypress(function(e) {
         var charCode = (e.which) ? e.which : event.keyCode
         if (String.fromCharCode(charCode).match(/[^0-9]/g))
            return false;
      });
      $(".onlynumbers").keypress(function(e) {
         if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            $("#errmsg").html("Digits Only").show().fadeOut("slow");
            return false;
         }
      });
      var validateEmail = function(elementValue) {
         var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
         return emailPattern.test(elementValue);
      }

      $('.email').keyup(function() {
         var value = $(this).val();
         var valid = validateEmail(value);
         if (!valid) {
            $(this).css('color', 'red');
            $(':input[type="submit"]').prop('disabled', true);
         } else {
            $(this).css('color', '#000');
            $(':input[type="submit"]').prop('disabled', false);
         }
      });
   });
</script>

<script>
   $('#contactform').on('submit', function() {
      $.ajax({
         type: 'post',
         url: '/ajax-requestPost',
         data: $('#contactform').serialize(),
         success: function(res) {
            if (res) {
               $('#contactform')[0].reset()
               $('.contact-form-success').removeClass('d-none');
            }
         }
      });
      return false;
   });
</script>
<script>
   (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
         (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
         m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
   })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

   ga('create', 'UA-42715764-9', 'auto');
   ga('send', 'pageview');
</script>



<script>

$('.brand-carousel').owlCarousel({
  loop:true,
  margin:10,
  autoplay:true,
  responsive:{
    0:{
      items:1
    },
    600:{
      items:3
    },
    1000:{
      items:5
    }
  }
})
</script>



<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<style>
/*@media (max-width:767px){*/
/*     #header .header-nav-main nav>ul>li.dropdown:hover>.dropdown-menu{ display:unset;}*/
/*}*/
.header-body{box-shadow:1px 1px 5px 3px rgba(0,0,0,.6);}
</style>

<script>
    $(document).ready(function(){
        var srcres = window.innerWidth;
       
        if(srcres <767){
        $('.dropdown a').mouseover(function(){
            $(this).siblings('.dropdown-menu').slideDown();
        });
        $('.dropdown a').mouseout(function(){
            $(this).siblings('.dropdown-menu').slideUp();
        });
        }
        else
        {
            
        }
    })
</script>

<script>
    $(document).ready(function(){
        $(window).scroll(function(){
            var scrollTop = 200;
            if($(window).scrollTop() >= scrollTop){
                $('.header-body').css({
                    background :'rgba(255,255,255,1)'
                });
            }
            if($(window).scrollTop() <= scrollTop){
                $('.header-body').css({
                    background :'rgba(255,255,255,0.6)'
                });  
            }
        })
    })
    </script>
</body>

</html>