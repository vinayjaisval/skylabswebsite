<?php
$statement = $this->db->query("SELECT permission_menu, permission_sub_menu FROM tbl_user WHERE id = ".$this->session->userdata('userid'));
	foreach ($statement->result() as $row) {
		$menu1 = $row->permission_menu;
		$submenu1 = $row->permission_sub_menu;
	}

	$menu = explode(",",$menu1);
	$submenu = explode(",",$submenu1);
?>


<section class="content-header">
	<div class="content-header-left">
		<h1>Settings</h1>
	</div>
</section>




<section class="content" style="min-height:auto;margin-bottom: -30px;">
	<div class="row">
		<div class="col-md-12">
			<?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success"><b>Success:-</b> <?=$this->session->flashdata('success');?></div>
            <?php } ?>
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger"><b>Error:-</b> <?=$this->session->flashdata('error');?></div>
            <?php } ?>
		</div>
	</div>
</section>

<section class="content">

	<div class="row">
		<div class="col-md-12">
							
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<?php if( in_array('s_1', $submenu)){ ?>
						<li class="active"><a href="#tab_1" data-toggle="tab">Logo</a></li>
						<?php } ?>
						<?php if( in_array('s_2', $submenu)){ ?>
						<li><a href="#tab_2" data-toggle="tab">Favicon</a></li>
						<?php } ?>
						<?php if( in_array('s_3', $submenu)){ ?>
						<li><a href="#tab_3" data-toggle="tab">General Content</a></li>
						<?php } ?>
						<?php if( in_array('s_4', $submenu)){ ?>
						<li><a href="#tab_4" data-toggle="tab">Email Settings</a></li>
						<?php } ?>
						<?php if( in_array('s_5', $submenu)){ ?>
						<li><a href="#tab_6_1" data-toggle="tab">Home SEO</a></li>
						<?php } ?>
						<?php if( in_array('s_6', $submenu)){ ?>
						<li><a href="#tab_9" data-toggle="tab">About Us</a></li>
						<?php } ?>
                    	<?php if( in_array('s_7', $submenu)){ ?>
                        <li><a href="#tab_11" data-toggle="tab">Home Page</a></li>
                    	<?php } ?>
						<?php if( in_array('s_7', $submenu)){ ?>
                        <li><a href="#tab_7" data-toggle="tab">Contact Page Page</a></li>
                    	<?php } ?>
					</ul>
					<div class="tab-content">
						<?php if( in_array('s_1', $submenu)){ ?>
          				<div class="tab-pane active" id="tab_1">


          					<form class="form-horizontal" action="<?=base_url('Master/setting/logoUpdate')?>" method="post" enctype="multipart/form-data">
          					<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
							            <label for="" class="col-sm-2 control-label">Existing Photo</label>
							            <div class="col-sm-6" style="padding-top:6px;">
							                <img src="<?=base_url('assets/admin/uploads/'.$logo)?>" class="existing-photo" style="height:80px;">
							            </div>
							        </div>
									<div class="form-group">
							            <label for="" class="col-sm-2 control-label">New Photo</label>
							            <div class="col-sm-6" style="padding-top:6px;">
							                <input type="file" name="photo_logo">
                                            <input type="hidden" name="oldFile" value="<?=$logo;?>">
							            </div>
							        </div>
							        <div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left">Update Logo</button>
										</div>
									</div>
								</div>
							</div>
							</form>

							


          				</div>
          				<?php } ?>
          				<?php if( in_array('s_2', $submenu)){ ?>
          				<div class="tab-pane" id="tab_2">

          					<form class="form-horizontal" action="<?=base_url('Master/setting/faviconUpdate')?>" method="post" enctype="multipart/form-data">
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
							            <label for="" class="col-sm-2 control-label">Existing Photo</label>
							            <div class="col-sm-6" style="padding-top:6px;">
							                <img src="<?=base_url('assets/admin/uploads/'.$favicon)?>" class="existing-photo" style="height:40px;">
							            </div>
							        </div>
									<div class="form-group">
							            <label for="" class="col-sm-2 control-label">New Photo</label>
							            <div class="col-sm-6" style="padding-top:6px;">
							                <input type="file" name="photo_favicon">
                                            <input type="hidden" name="oldFile1" value="<?=$favicon;?>">
							            </div>
							        </div>
							        <div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left">Update Favicon</button>
										</div>
									</div>
								</div>
							</div>
							</form>


          				</div>
          				<?php } ?>
          				<?php if( in_array('s_3', $submenu)){ ?>
          				<div class="tab-pane" id="tab_3">

							<form class="form-horizontal" action="<?=base_url('Master/setting/generalContent');?>" method="post">
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Footer - About Us </label>
										<div class="col-sm-9">
											<textarea class="form-control" name="footer_about" rows="5"><?php echo $footer_about; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Footer - Copyright </label>
										<div class="col-sm-9">
											<input class="form-control" type="text" name="footer_copyright" value="<?php echo $footer_copyright; ?>">
										</div>
									</div>								
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Contact Address </label>
										<div class="col-sm-6">
											<textarea class="form-control" name="contact_address" style="height:140px;"><?php echo $contact_address; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Contact Address 2 </label>
										<div class="col-sm-6">
											<textarea class="form-control" name="contact_fax" style="height:140px;"><?php echo $contact_fax; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Contact Email </label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="contact_email" value="<?php echo $contact_email; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Contact Phone Number </label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="contact_phone" value="<?php echo $contact_phone; ?>">
										</div>
									</div>
									
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Contact Map iFrame </label>
										<div class="col-sm-9">
											<textarea class="form-control" name="contact_map_iframe" style="height:200px;"><?php echo $contact_map_iframe; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left">Update</button>
										</div>
									</div>
								</div>
							</div>
							</form>


          				</div>
          				<?php } ?>
          				<?php if( in_array('s_4', $submenu)){ ?>

          				<div class="tab-pane" id="tab_4">

          					<form class="form-horizontal" action="<?=base_url('Master/setting/emailSettingUpdate')?>" method="post">
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Email Address <span>*</span></label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="receive_email" value="<?php echo $receive_email; ?>">
										</div>
									</div>	
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Email From <span>*</span></label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="sender_email" value="<?php echo $sender_email; ?>">
										</div>
									</div>									
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Email Subject <span>*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="receive_email_subject" value="<?php echo $receive_email_subject; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Thank you message <span>*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" name="receive_email_thank_you_message"><?php echo $receive_email_thank_you_message; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left">Update</button>
										</div>
									</div>
								</div>
							</div>
							</form>


          				</div>
          				<?php } ?>
          				
          				



          				<?php if( in_array('s_5', $submenu)){ ?>
          				<div class="tab-pane" id="tab_6_1">
							<h3>Meta Section</h3>
          					<form class="form-horizontal" action="<?=base_url('Master/setting/metaSectionHome');?>" method="post">
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Meta Title </label>
										<div class="col-sm-9">
											<input type="text" name="meta_title_home" class="form-control" value="<?php echo $meta_title_home ?>">
										</div>
									</div>		
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Meta Keyword </label>
										<div class="col-sm-9">
											<textarea class="form-control" name="meta_keyword_home" style="height:100px;"><?php echo $meta_keyword_home ?></textarea>
										</div>
									</div>	
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Meta Description </label>
										<div class="col-sm-9">
											<textarea class="form-control" name="meta_description_home" style="height:200px;"><?php echo $meta_description_home ?></textarea>
										</div>
									</div>	
									<div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left">Update</button>
										</div>
									</div>
								</div>
							</div>
							</form>
          				</div>
          				<?php } ?>
          				
          				<?php if( in_array('s_6', $submenu)){ ?>
          				<div class="tab-pane" id="tab_9">
						  <form class="form-horizontal" action="<?=base_url('Master/setting/other1_update')?>" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
<?php
	$statement = $this->db->query("SELECT * FROM tbl_settings_about WHERE 1");
	foreach ($statement->result() as $row) {
?>
                                <div class="box-body">


<input type="text" name="about1" class="form-control" value="<?=$row->about1;?>">
<br>

<div class="row">
	<div class="col-md-4">
		<input type="hidden" name="about2_old" value="<?=$row->about2;?>">
		<input type="file" name="about2"><br>
		
		<input type="text" class="form-control" name="about3" value="<?=$row->about3;?>"><br>
		<textarea class="form-control" rows="5" name="about4"><?=$row->about4;?></textarea><br>
		<img src="<?=base_url('assets/admin/uploads/'.$row->about2);?>" class="img-responsive">
	</div>
	<div class="col-md-4">
		<input type="hidden" name="about5_old" value="<?=$row->about5;?>">
		<input type="file" name="about5"><br>
		
		<input type="text" class="form-control" name="about6" value="<?=$row->about6;?>"><br>
		<textarea class="form-control" rows="5" name="about7"><?=$row->about7;?></textarea><br>
		<img src="<?=base_url('assets/admin/uploads/'.$row->about5);?>" class="img-responsive">
	</div>
	<div class="col-md-4">
		<input type="hidden" name="about8_old" value="<?=$row->about8;?>">
		<input type="file" name="about8"><br>
		
		<input type="text" class="form-control" name="about9" value="<?=$row->about9;?>"><br>
		<textarea class="form-control" rows="5" name="about10"><?=$row->about10;?></textarea><br>
		<img src="<?=base_url('assets/admin/uploads/'.$row->about8);?>" class="img-responsive">
	</div>

</div>

<hr style="border: 2px solid #069;">

<div class="row">
	<div class="col-md-8">
		<input type="text" name="about11" class="form-control" value="<?=$row->about11;?>">
		<br>
		<input type="text" name="about12" class="form-control" value="<?=$row->about12;?>">
		<br>
	</div>
	<div class="col-md-4">
		<input type="text" name="about13" class="form-control" value="<?=$row->about13;?>">
		<br>
		<input type="text" name="about14" class="form-control" value="<?=$row->about14;?>">
		<br>
	</div>
</div>


<hr style="border: 2px solid #069;">

<input type="text" name="about15" class="form-control" value="<?=$row->about15;?>">
<br>
<input type="text" name="about16" class="form-control" value="<?=$row->about16;?>">
<br>
<input type="text" name="about17" class="form-control" value="<?=$row->about17;?>">
<br>
<div class="row">
	<div class="col-md-5">
		<div class="row">
			<div class="col-md-8">
				<input type="text" name="about18" class="form-control" value="<?=$row->about18;?>">
				<br>
			</div>
			<div class="col-md-4">
				<input type="text" name="about19" class="form-control" value="<?=$row->about19;?>">
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<input type="text" name="about20" class="form-control" value="<?=$row->about20;?>">
				<br>
			</div>
			<div class="col-md-4">
				<input type="text" name="about21" class="form-control" value="<?=$row->about21;?>">
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<input type="text" name="about22" class="form-control" value="<?=$row->about22;?>">
				<br>
			</div>
			<div class="col-md-4">
				<input type="text" name="about23" class="form-control" value="<?=$row->about23;?>">
				<br>
			</div>
		</div>
	</div>
	<div class="col-md-7">
		<div class="row">
			<div class="col-md-7">
				<input type="text" name="about24" class="form-control" value="<?=$row->about24;?>">
				<br>
			</div>
			<div class="col-md-5">
				<input type="text" name="about25" class="form-control" value="<?=$row->about25;?>">
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7">
				<input type="text" name="about26" class="form-control" value="<?=$row->about26;?>">
				<br>
			</div>
			<div class="col-md-5">
				<input type="text" name="about27" class="form-control" value="<?=$row->about27;?>">
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7">
				<input type="text" name="about28" class="form-control" value="<?=$row->about28;?>">
				<br>
			</div>
			<div class="col-md-5">
				<input type="text" name="about29" class="form-control" value="<?=$row->about29;?>">
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7">
				<input type="text" name="about30" class="form-control" value="<?=$row->about30;?>">
				<br>
			</div>
			<div class="col-md-5">
				<input type="text" name="about31" class="form-control" value="<?=$row->about31;?>">
				<br>
			</div>
		</div>
	</div>
</div>



<hr style="border: 2px solid #069;">


<div class="row">
	<div class="col-md-8">
		<input type="text" name="about32" class="form-control" value="<?=$row->about32;?>">
		<br>
		<input type="text" name="about33" class="form-control" value="<?=$row->about33;?>">
		<br>
	</div>
	<div class="col-md-4">
		<input type="text" name="about34" class="form-control" value="<?=$row->about34;?>">
		<br>
		<input type="text" name="about35" class="form-control" value="<?=$row->about35;?>">
		<br>
	</div>
</div>


<hr style="border: 2px solid #069;">


                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" >Update</button>
                                        </div>
                                    </div>
                                </div>
                            	<?php } ?>

                            </div>
                            </form>
          				</div>

          				<?php } ?>



						  <?php if( in_array('s_7', $submenu)){ ?>
          				<div class="tab-pane" id="tab_7">
						  <form class="form-horizontal" action="<?=base_url('Master/setting/other3_update')?>" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
<?php
	$statement = $this->db->query("SELECT * FROM tbl_settings_contact WHERE 1");
	foreach ($statement->result() as $row) {
?>
                                <div class="box-body">


<input type="text" name="contact1" class="form-control" value="<?=$row->contact1;?>">
<br>
<input type="text" name="contact2" class="form-control" value="<?=$row->contact2;?>">
<br>

<div class="row">
	<div class="col-md-4">
		<input type="text" class="form-control" name="contact3" value="<?=$row->contact3;?>"><br>
		<input type="text" class="form-control" name="contact4" value="<?=$row->contact4;?>"><br>
		<input type="text" class="form-control" name="contact5" value="<?=$row->contact5;?>"><br>
		<input type="text" class="form-control" name="contact6" value="<?=$row->contact6;?>"><br>
		<input type="text" class="form-control" name="contact7" value="<?=$row->contact7;?>"><br>
		<input type="text" class="form-control" name="contact8" value="<?=$row->contact8;?>"><br>
		<input type="text" class="form-control" name="contact9" value="<?=$row->contact9;?>"><br>
	</div>
	<div class="col-md-4">
		<input type="text" class="form-control" name="contact10" value="<?=$row->contact10;?>"><br>
		<input type="text" class="form-control" name="contact11" value="<?=$row->contact11;?>"><br>
		<input type="text" class="form-control" name="contact12" value="<?=$row->contact12;?>"><br>
		<input type="text" class="form-control" name="contact13" value="<?=$row->contact13;?>"><br>
		<input type="text" class="form-control" name="contact14" value="<?=$row->contact14;?>"><br>
		<input type="text" class="form-control" name="contact15" value="<?=$row->contact15;?>"><br>
		<input type="text" class="form-control" name="contact16" value="<?=$row->contact16;?>"><br>
	</div>
	<div class="col-md-4">
		<input type="text" class="form-control" name="contact10_1" value="<?=$row->contact10_1;?>"><br>
		<input type="text" class="form-control" name="contact11_1" value="<?=$row->contact11_1;?>"><br>
		<input type="text" class="form-control" name="contact12_1" value="<?=$row->contact12_1;?>"><br>
		<input type="text" class="form-control" name="contact13_1" value="<?=$row->contact13_1;?>"><br>
		<input type="text" class="form-control" name="contact14_1" value="<?=$row->contact14_1;?>"><br>
		<input type="text" class="form-control" name="contact15_1" value="<?=$row->contact15_1;?>"><br>
		<input type="text" class="form-control" name="contact16_1" value="<?=$row->contact16_1;?>"><br>
	</div>
</div>

<hr style="border: 2px solid #069;">
<input type="text" name="contact17" class="form-control" value="<?=$row->contact17;?>">
<br>
<input type="text" name="contact18" class="form-control" value="<?=$row->contact18;?>">
<br>
<input type="text" name="contact19" class="form-control" value="<?=$row->contact19;?>">
<br>

<hr style="border: 2px solid #069;">

<div class="row">
	<div class="col-md-3">
		<label>Facebook</label>
		<input type="text" name="contact20" class="form-control" value="<?=$row->contact20;?>">
		<br>
	</div>
	<div class="col-md-3">
		<label>Twitter</label>
		<input type="text" name="contact21" class="form-control" value="<?=$row->contact21;?>">
		<br>
	</div>
	<div class="col-md-3">
		<label>LinkedIn</label>
		<input type="text" name="contact22" class="form-control" value="<?=$row->contact22;?>">
		<br>
	</div>
	<div class="col-md-3">
		<label>Instagram</label>
		<input type="text" name="contact23" class="form-control" value="<?=$row->contact23;?>">
		<br>
	</div>
</div>

<hr style="border: 2px solid #069;">
<h4>Product Detail Page</h4>

<input type="text" name="contact24" class="form-control" value="<?=$row->contact24;?>">
<br>
<input type="text" name="contact25" class="form-control" value="<?=$row->contact25;?>">
<br>
<textarea class="form-control" name="contact26" rows="6"><?=$row->contact26;?></textarea>
<br>
<input type="text" name="contact27" class="form-control" value="<?=$row->contact27;?>">
<br>
<input type="text" name="contact28" class="form-control" value="<?=$row->contact28;?>">
<br>
<input type="text" name="contact29" class="form-control" value="<?=$row->contact29;?>">
<br>
<input type="text" name="contact30" class="form-control" value="<?=$row->contact30;?>">
<br>

<hr style="border: 2px solid #069;">


                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" >Update</button>
                                        </div>
                                    </div>
                                </div>
                            	<?php } ?>

                            </div>
                            </form>
          				</div>

          				<?php } ?>
          				

                    	

                    	<?php if( in_array('s_7', $submenu)){ ?>

                        <div class="tab-pane" id="tab_11">
                            <form class="form-horizontal" action="<?=base_url('Master/setting/other2_update')?>" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
<?php
	$statement = $this->db->query("SELECT * FROM tbl_settings_home WHERE 1");
	foreach ($statement->result() as $row) {
?>
                                <div class="box-body">


<input type="text" name="home_1" class="form-control" value="<?=$row->home_1;?>">
<br>

<textarea class="form-control" rows="5" name="home_2"><?=$row->home_2;?></textarea>
<br>

<div class="row">
    <div class="col-md-12">
		
		
		<input type="text" class="form-control" name="home_13" value="<?=$row->home_13;?>"><br>
		
		<textarea class="form-control" rows="5" name="home_14"><?=$row->home_14;?></textarea><br>
		<input type="hidden" name="home_12_old" value="<?=$row->home_12;?>">
		<input type="file" name="home_12"><br>
		<img src="<?=base_url('assets/admin/uploads/'.$row->home_12);?>" class="img-responsive" style="height: 60px;">
		<hr>
	</div>
	
	<div class="col-md-12">
		
		
		<input type="text" class="form-control" name="home_4" value="<?=$row->home_4;?>"><br>
		<textarea class="form-control" rows="5" name="home_5"><?=$row->home_5;?></textarea>
		<br>
		<input type="hidden" name="home_3_old" value="<?=$row->home_3;?>">
		<input type="file" name="home_3"><br>
		<img src="<?=base_url('assets/admin/uploads/'.$row->home_3);?>" class="img-responsive" style="height: 60px;">
		<hr>
	</div>
	<div class="col-md-12">
		
		
		<input type="text" class="form-control" name="home_7" value="<?=$row->home_7;?>"><br>
		<textarea class="form-control" rows="5" name="home_8"><?=$row->home_8;?></textarea>
		<br>
		<input type="hidden" name="home_6_old" value="<?=$row->home_6;?>">
		<input type="file" name="home_6"><br>
		<img src="<?=base_url('assets/admin/uploads/'.$row->home_6);?>" class="img-responsive" style="height: 60px;">
		<hr>
	</div>
	<div class="col-md-12">
		
		
		<input type="text" class="form-control" name="home_10" value="<?=$row->home_10;?>"><br>
		<textarea class="form-control" rows="5" name="home_11"><?=$row->home_11;?></textarea><br>
		<input type="hidden" name="home_9_old" value="<?=$row->home_9;?>">
		<input type="file" name="home_9"><br>
		<img src="<?=base_url('assets/admin/uploads/'.$row->home_9);?>" class="img-responsive" style="height: 60px;">
		<hr>
	</div>
	
	<div class="col-md-12">
	<input type="text" class="form-control" name="home_15" value="<?=$row->home_15;?>"><br>
	<input type="text" class="form-control" name="home_16" value="<?=$row->home_16;?>"><br>
	<input type="text" class="form-control" name="home_17" value="<?=$row->home_17;?>"><br>
	</div>
</div>

<hr style="border: 2px solid #069;">

<input type="text" name="home_18" class="form-control" value="<?=$row->home_18;?>">
<br>
<textarea class="form-control" rows="6" name="home_19"><?=$row->home_19;?></textarea><br>
<input type="hidden" name="home_20_old" value="<?=$row->home_20;?>">
<input type="file" name="home_20"><br>
<img src="<?=base_url('assets/admin/uploads/'.$row->home_20);?>" class="img-responsive" style="max-width: 200px">

<hr style="border: 2px solid #069;">
<div class="row">
	<div class="col-md-3">
		<input type="text" name="home_21" class="form-control" value="<?=$row->home_21;?>">
		<br>
		<input type="text" name="home_22" class="form-control" value="<?=$row->home_22;?>">
		<br>
	</div>
	<div class="col-md-3">
		<input type="text" name="home_23" class="form-control" value="<?=$row->home_23;?>">
		<br>
		<input type="text" name="home_24" class="form-control" value="<?=$row->home_24;?>">
		<br>
	</div>
	<div class="col-md-3">
		<input type="text" name="home_25" class="form-control" value="<?=$row->home_25;?>">
		<br>
		<input type="text" name="home_26" class="form-control" value="<?=$row->home_26;?>">
		<br>
	</div>
	<div class="col-md-3">
		<input type="text" name="home_27" class="form-control" value="<?=$row->home_27;?>">
		<br>
		<input type="text" name="home_28" class="form-control" value="<?=$row->home_28;?>">
		<br>
	</div>
</div>

<hr style="border: 2px solid #069;">

<input type="text" name="home_29" class="form-control" value="<?=$row->home_29;?>">
<br>
<input type="text" name="home_30" class="form-control" value="<?=$row->home_30;?>">

<hr style="border: 2px solid #069;">

<input type="text" name="home_31" class="form-control" value="<?=$row->home_31;?>">

<hr style="border: 2px solid #069;">

<input type="text" name="home_32" class="form-control" value="<?=$row->home_32;?>">
<br>
<input type="text" name="home_33" class="form-control" value="<?=$row->home_33;?>">
<br>
<input type="text" name="home_34" class="form-control" value="<?=$row->home_34;?>">
<br>
<input type="text" name="home_35" class="form-control" value="<?=$row->home_35;?>">
<br>
<input type="hidden" name="home_36_old" value="<?=$row->home_36;?>">
<input type="file" name="home_36"><br>
<img src="<?=base_url('assets/admin/uploads/'.$row->home_36);?>" class="img-responsive" style="max-width: 200px">

<hr style="border: 2px solid #069;">

<input type="text" name="home_37" class="form-control" value="<?=$row->home_37;?>">

<hr style="border: 2px solid #069;">

<input type="text" name="home_38" class="form-control" value="<?=$row->home_38;?>">

<hr style="border: 2px solid #069;">


                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" >Update</button>
                                        </div>
                                    </div>
                                </div>
                            	<?php } ?>
                            </div>
                            
                        </div>

                    	<?php //} ?>
                            </div>
                            </form>
                        </div>

                    	<?php } ?>




          			</div>
				</div>

			
		</div>
	</div>

</section>