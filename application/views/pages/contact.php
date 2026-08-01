<?php
$statementAbt = $this->db->query("SELECT * FROM tbl_settings_contact");
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

      <section class="section">
         <div class="container">

            <div class="row mb-5">
               <div class="col text-center">
                  <span class="d-block top-sub-title text-color-primary">
                     <?= $rowA->contact1; ?>
                  </span>
                  <h2 class="font-weight-bold" style="font-size: 2.2rem;">
                     <?= ($rowA->contact2 == 'Our Branch') ? 'Our Branches' : $rowA->contact2; ?>
                  </h2>
               </div>
            </div>

            <!-- NATIONAL OFFICES -->
            <div class="row mb-4">
               <div class="col-12 text-center">
                  <h2 class="font-weight-bold">National Offices</h2>
                  <hr>
               </div>
            </div>

            <div class="row">

               <!-- Office 1 -->
               <div class="col-lg-3 col-sm-6 col-12 mb-4">
                  <div class=" h-100 shadow-sm p-3">
                     <h3 class="font-weight-bold text-4">
                        <?= $rowA->contact3; ?>
                     </h3>

                     <span class="text-muted">
                        <?= $rowA->contact4; ?>
                     </span>

                     <p class="mt-3">
                        <?= $rowA->contact5; ?><br>
                        <i class="fas fa-map-marker-alt"></i>
                        <?= $rowA->contact6; ?>
                     </p>

                     <p>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:<?= $rowA->contact7; ?>">
                           <?= $rowA->contact7; ?>
                        </a>
                     </p>

                     <!-- <p>
                        <i class="fa fa-phone"></i>
                        <a href="tel:<?= $rowA->contact8; ?>">
                           <?= $rowA->contact8; ?>
                        </a>
                        <?php if (!empty($rowA->contact9)) { ?>
                           , <a href="tel:<?= $rowA->contact9; ?>">
                              <?= $rowA->contact9; ?>
                           </a>
                        <?php } ?>
                     </p> -->
                  </div>
               </div>

               <!-- Office 2 -->
               <div class="col-lg-3 col-sm-6 col-12 mb-4">
                  <div class=" h-100 shadow-sm p-3">
                     <h3 class="font-weight-bold text-4">
                        <?= $rowA->contact10; ?>
                     </h3>

                     <span class="text-muted">
                        <?= $rowA->contact11; ?>
                     </span>

                     <p class="mt-3">
                        <?= $rowA->contact12; ?><br>
                        <i class="fas fa-map-marker-alt"></i>
                        <?= $rowA->contact13; ?>
                     </p>

                     <p>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:<?= $rowA->contact14; ?>">
                           <?= $rowA->contact14; ?>
                        </a>
                     </p>

                     <!-- <p>
                        <i class="fa fa-phone"></i>
                        <a href="tel:<?= $rowA->contact15; ?>">
                           <?= $rowA->contact15; ?>
                        </a>
                        <?php if (!empty($rowA->contact16)) { ?>
                           , <a href="tel:<?= $rowA->contact16; ?>">
                              <?= $rowA->contact16; ?>
                           </a>
                        <?php } ?>
                     </p> -->
                  </div>
               </div>

               <!-- Office 3 -->
             
               <div class="col-lg-3 col-sm-6 col-12 mb-4">
                  <div class=" h-100 shadow-sm p-3">
                     <h3 class="font-weight-bold text-4">
                        Nagaland


                     </h3>

                     <span class="text-muted">
                        Location
                     </span>

                     <p class="mt-3">
                       
                        <i class="fas fa-map-marker-alt"></i>
                       3rd floor, Providence Abode, 4th mile, Near Green Park, Chumoukedima, Nagaland, 797103
                     </p>

                     <p>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:info@skylabsci.com">
                           info@skylabstech.com
                        </a>
                     </p>

                     
                  </div>
               </div>


               <div class="col-lg-3 col-sm-6 col-12 mb-4">
                  <div class=" h-100 shadow-sm p-3">
                     <h3 class="font-weight-bold text-4">
                        Arunachal Pradesh


                     </h3>

                     <span class="text-muted">
                        Location
                     </span>

                     <p class="mt-3">
                       
                        <i class="fas fa-map-marker-alt"></i>

                        JOY-7 TOWER NEAR CENTRAL JAIL JALLANG CHIMPU Itanagar  Capital Complex  Arunachal Pradesh 791113
                       <!-- 3rd floor, Providence Abode, 4th mile, Near Green Park, Chumoukedima, Nagaland, 797103 -->
                     </p>

                     <p>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:info@skylabsci.com">
                           info@skylabstech.com
                        </a>
                     </p>

                     
                  </div>
               </div>
            </div>

            <!-- INTERNATIONAL OFFICES -->
            <div class="row mt-5 mb-4">
               <div class="col-12 text-center">
                  <h2 class="font-weight-bold">International Offices</h2>
                  <hr>
               </div>
            </div>

            <div class="row">

               <div class="col-md-6 col-12 mb-4">
                  <div class=" h-100 shadow-sm p-3">
                     <h3 class="font-weight-bold text-4">
                        COTE D'IVOIRE Office
                     </h3>

                     <span class="text-muted">
                        Location
                     </span>

                     <p class="mt-3">
                        SKYLABS CI<br>
                        <i class="fas fa-map-marker-alt"></i>
                        VITIB - GRAND BASSAM,
                        COTE D'IVOIRE
                     </p>

                     <p>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:info@skylabsci.com">
                           info@skylabsci.com
                        </a>
                     </p>

                    
                  </div>
               </div>
                <div class="col-md-6 col-12 mb-4">
                  <div class=" h-100 shadow-sm p-3">
                     <h3 class="font-weight-bold text-4">
                        <?= $rowA->contact10_1; ?>
                     </h3>

                     <span class="text-muted">
                        <?= $rowA->contact11_1; ?>
                     </span>

                     <p class="mt-3">
                        <?= $rowA->contact12_1; ?><br>
                        <i class="fas fa-map-marker-alt"></i>
                        <?= $rowA->contact13_1; ?>
                     </p>

                     <p>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:<?= $rowA->contact14_1; ?>">
                           <?= $rowA->contact14_1; ?>
                        </a>
                     </p>

                     <!-- <p>
                        <i class="fa fa-phone"></i>
                        <a href="tel:<?= $rowA->contact15_1; ?>">
                           <?= $rowA->contact15_1; ?>
                        </a>
                        <?php if (!empty($rowA->contact16_1)) { ?>
                           , <a href="tel:<?= $rowA->contact16_1; ?>">
                              <?= $rowA->contact16_1; ?>
                           </a>
                        <?php } ?>
                     </p> -->
                  </div>
               </div>
               
            </div>

         </div>
      </section>

      <!-- MAP + CONTACT FORM -->
      <section class="section bg-light-5">
         <div class="container">
            <div class="row">

               <div class="col-lg-6">
                  <iframe
                     src="<?= $contact_map_iframe; ?>"
                     width="100%"
                     height="400"
                     frameborder="0"
                     style="border:0"
                     allowfullscreen>
                  </iframe>
               </div>

               <div class="col-lg-6 py-lg-5 py-3">
                  <div class="p-lg-4 p-2">
                     <span class="top-sub-title text-color-primary">
                        <?= $rowA->contact17; ?>
                     </span>

                     <h2 class="text-color-dark font-weight-bold mb-4">
                        <?= $rowA->contact18; ?>
                     </h2>

                     <form action="<?= base_url('contactSubmit'); ?>" method="post">

                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <input type="text"
                                 class="form-control"
                                 name="name"
                                 placeholder="Name"
                                 required>
                           </div>

                           <div class="form-group col-md-6">
                              <input type="email"
                                 class="form-control"
                                 name="email"
                                 placeholder="Email"
                                 required>
                           </div>
                        </div>

                        <div class="form-group">
                           <input type="tel"
                              class="form-control"
                              name="phone"
                              placeholder="Mobile Number"
                              required>
                        </div>

                        <div class="form-group">
                           <textarea class="form-control"
                              rows="5"
                              name="message"
                              placeholder="Message"
                              required></textarea>
                        </div>

                        <input type="submit"
                           value="<?= $rowA->contact19; ?>"
                           class="btn btn-primary">

                     </form>
                  </div>
               </div>

            </div>
         </div>
      </section>

   </div>

<?php } ?>