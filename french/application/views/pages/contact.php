<?php
$statementAbt = $this->db->query("SELECT * FROM tbl_settings_contact WHERE 1");
foreach ($statementAbt->result() as $rowA) {
?>

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




      <section class="section" style="padding: 0px 0px;">
         <div class="container mb-lg-5">
            <div class="row mb-4">
               <div class="col">
                  <div class="overflow-hidden">
                     <span class="d-block top-sub-title text-color-primary appear-animation" data-appear-animation="maskUp"><?= $rowA->contact1; ?></span>
                  </div>
                  <div class="overflow-hidden mb-2">
                     <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><?= $rowA->contact2; ?></h2>
                  </div>
               </div>
            </div>
            <div class="row">

               <div class="col-sm-4 col-lg-4 mb-6 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">

                  <h3 class="font-weight-bold text-4"><?= $rowA->contact3; ?></h3>
                  <span class="top-sub-title"><?= $rowA->contact4; ?></span>
                  <div class="icon-box-info mt-1">

                     <p><?= $rowA->contact5; ?><br /> <i class="fas fa-angle-right"></i> <?= $rowA->contact6; ?> </p>
                  </div>

                  <a href="mailto:<?= $rowA->contact7; ?>" style="font-size: 15px;
color: black;"> <i class="fa fa-envelope" aria-hidden="true"></i> <?= $rowA->contact7; ?></a>
                  <span class="d-block mb-3">
                     <a href="tel:<?= $rowA->contact8; ?>" style="font-size: 15px;
color: black;"> <i class="fa fa-phone" aria-hidden="true" style="  transform: rotate(89deg);
"></i> <?= $rowA->contact8; ?></a> , <a href="tel:<?= $rowA->contact9; ?>" style="font-size: 15px;
color: black;"> <?= $rowA->contact9; ?></a>
                  </span>
               </div>


               <div class="col-sm-4 col-lg-4 mb-6 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">

                  <h3 class="font-weight-bold text-4"><?= $rowA->contact10; ?></h3>
                  <span class="top-sub-title"><?= $rowA->contact11; ?></span>
                  <div class="icon-box-info mt-1">

                     <p><?= $rowA->contact12; ?><br /> <i class="fas fa-angle-right"></i> <?= $rowA->contact13; ?></p>
                  </div>

                  <a href="mailto:<?= $rowA->contact14; ?>" style="font-size: 15px;
color: black;"> <i class="fa fa-envelope" aria-hidden="true"></i> <?= $rowA->contact14; ?></a>
                  <span class="d-block mb-3">
                     <a href="tel:<?= $rowA->contact15; ?>" style="font-size: 15px;
color: black;"> <i class="fa fa-phone" aria-hidden="true" style="  transform: rotate(89deg);
"></i> <?= $rowA->contact15; ?></a> , <a href="tel:<?= $rowA->contact16; ?>" style="font-size: 15px;
color: black;"> <?= $rowA->contact16; ?></a>
                  </span>
               </div>

               <div class="col-sm-4 col-lg-4 mb-6 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">

                  <h3 class="font-weight-bold text-4"><?= $rowA->contact10_1; ?></h3>
                  <span class="top-sub-title"><?= $rowA->contact11_1; ?></span>
                  <div class="icon-box-info mt-1">

                     <p><?= $rowA->contact12_1; ?><br /> <i class="fas fa-angle-right"></i> <?= $rowA->contact13_1; ?></p>
                  </div>

                  <a href="mailto:<?= $rowA->contact14_1; ?>" style="font-size: 15px;
color: black;"> <i class="fa fa-envelope" aria-hidden="true"></i> <?= $rowA->contact14_1; ?></a>
                  <span class="d-block mb-3">
                     <a href="tel:<?= $rowA->contact15_1; ?>" style="font-size: 15px;
color: black;"> <i class="fa fa-phone" aria-hidden="true" style="  transform: rotate(89deg);
"></i> <?= $rowA->contact15_1; ?></a> , <a href="tel:<?= $rowA->contact16_1; ?>" style="font-size: 15px;
color: black;"> <?= $rowA->contact16_1; ?></a>
                  </span>
               </div>

            </div>
         </div>
      </section>
      <section class="section bg-light-5">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

                  <div id="googlemaps">
                     <iframe src="<?= $contact_map_iframe; ?>" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
               </div>
               <div class="col-lg-6 py-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                  <div class="p-4">
                     <div class="row">
                        <div class="col">
                           <span class="top-sub-title text-color-primary"><?= $rowA->contact17; ?></span>
                           <h2 class="text-color-dark font-weight-bold mb-4"><?= $rowA->contact18; ?></h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col">
                           <form class="contact-form" action="<?= base_url('contactSubmit'); ?>" method="post">

                              <div class="form-row">
                                 <div class="form-group col-md-6">
                                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="Name" required>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="E-mail" required>
                                 </div>
                              </div>
                              <div class="form-row">
                                 <div class="form-group col">
                                    <input type="tel" data-msg-required="Please enter your mobile no." class="form-control onlynumbers" minlength="10" maxlength="10" name="phone" id="mobile" placeholder="Mobile no" required>
                                 </div>
                              </div>
                              <div class="form-row">
                                 <div class="form-group col">
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" placeholder="Message" required></textarea>
                                 </div>
                              </div>

                              <div class="form-row mt-2">
                                 <div class="form-group col">
                                    <input type="submit" value="<?= $rowA->contact19; ?>" class="btn btn-primary btn-rounded btn-4 font-weight-semibold text-0" data-loading-text="Loading...">
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>


<?php } ?>