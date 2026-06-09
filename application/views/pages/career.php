<div role="main" class="main">
	<section class="page-header page-header-dark page-header-text-light" style="background-image: url('<?php echo base_url('assets/admin/uploads/' . $banner); ?>')">
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

	<section class="">
		<div class="container" style="  background-color: #f2f2f2;">
			<div class="col-md-12">
			    
				<div class="row">
					
					<div class="col-md-12">
					    <br>
					    <?=$page_content;?>
						<br>
						<div class="tab-content" id="tabVerticalContent">
							<div class="tab-pane fade pb-4 show active" id="vertical-portfolio" role="tabpanel" aria-labelledby="vertical-portfolio-tab">
								<?php 
                              if($this->session->flashdata('msg'))
                              {
                                  echo '<div class="alert alert-success mb-2">'.$this->session->flashdata('msg').'</div>';
                              }
                             ?>
								
								<div class="container-fluid1">
									<form class="contact-form" action="<?= base_url('home/career'); ?>" method="post" enctype='multipart/form-data'>
										<div class="contact-form-success alert alert-success d-none">
											<strong>Success!</strong> Your message has been sent to us.
										</div>
										<div class="contact-form-error alert alert-danger d-none">
											<strong>Error!</strong> There was an error sending your message.
											<span class="mail-error-message d-block"></span>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="Name" required>
											</div>
											<div class="form-group col-md-6">
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="E-mail" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<input type="tel" value="" data-msg-required="Please enter your mobile no."minlength="10" maxlength="10" class="form-control onlynumbers" name="phone" id="mobile" placeholder="Mobile No" required>
											</div>
											<div class="form-group col-md-6">
												<input type="number" value="" data-msg-required="Please enter your experience." data-msg-email="Please enter a valid email address." class="form-control" name="experience" id="experience"  placeholder="Experience" required>
											</div>
										</div>
										<!-- <div class="form-row">
											<div class="form-group col">
												<input type="tel" data-msg-required="Please enter your mobile no." maxlength="10" class="form-control" name="mobile" id="mobile" placeholder="Mobile no" required>
											</div>
										</div> -->
										<div class="form-row">
											<div class="form-group col-md-6">
											<select id="post_applied" name="post_applied" required>
													<option value="Select">Post Applied for</option>
													<option value="Presales">Presales</option>
													<option value="Project Manager">Project Manager</option>
													<option value=".Net Developer">.Net Developer</option>
													<option value="Php Developer">Php Developer</option>
													<option value="GIS Experts">GIS Experts</option>
													<option value="GIS Experts">Digital Marketers</option>
													<option value="GIS Experts">Business Analyst</option>
													<option value="Tester">Tester</option>
													<option value="IT Manager">IT Manager</option>
													<option value="Installer">Installer</option>
													<option value="others">others</option>
												</select>
											</div>
											<div class="form-group col-md-6">
												<input type="file" value="" data-msg-required="Please upload pdf" accept=".pdf" data-msg-email="Please enter a valid cv_upload." maxlength="" class="form-control" name="cv_upload" id="cv_upload" placeholder="Upload Cv" required>
												<span style="color:red;" id="fileerror"></span>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" placeholder="Message" required></textarea>
											</div>
										</div>

										
										<div class="form-row ">
											<div class="form-group col">
												<input type="submit" value="SEND MESSAGE" class="btn btn-primary btn-rounded btn-4 font-weight-semibold text-0" data-loading-text="Loading..." id="sbtbtn">
											</div>
										</div>
									</form>
								</div>
								
								<br>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			cv_upload = document.getElementById('cv_upload');
			sbtbtn = document.getElementById('sbtbtn');
			cv_upload.addEventListener('change',function(e){
				filesize = Math.round(e.target.files[0].size/1024)
				if(filesize > 10)
				{
                    sbtbtn.disabled = true;
					document.getElementById('fileerror').innerText = "Sorry File not grater than 10 kb"
				}else
				{
					sbtbtn.disabled = false;
					document.getElementById('fileerror').innerText = ""
				}

			})
		</script>
	</section>



	





